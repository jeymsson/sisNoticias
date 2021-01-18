<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutenticadorController extends Controller
{
    public function registrar(Request $req)
    {
        //Nome email senha
        /*$req->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'senha' => 'required|string|confirmed'
        ]);*/
        $validator = \Validator::make($req->all(), [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'senha' => 'required|string|confirmed'
        ]);
        if ($validator->fails()) {
            return response()->json(['res'=>'Parametros incorretos.','err'=>$validator->errors()], 401);
        }

        $usu = new User([
            'name' => $req->name,
            'email' => $req->email,
            'senha' => bcrypt($req->senha)
        ]);
        $usu->save();
        // return json_encode($usu);
        return response()->json(['res'=>'Usuario/Jornalista criado.'], 201);
    }

    public function login(Request $req)
    {
        //
        /*$req->validate([
            'email' => 'required|string|email',
            'senha' => 'required|string'
        ]);*/
        $validator = \Validator::make($req->all(), [
            'email' => 'required|string|email',
            'senha' => 'required|string'
        ]);
        if ($validator->fails()) {
            // return response()->json($validator->errors(), Response::HTTP_BAD_REQUEST);
            return response()->json(['res'=>'Parametros incorretos.','err'=>$validator->errors()], 401);
        }

        if(!Auth::attempt(['email' => $req->email, 'password' => $req->senha])){
            return response()->json(['res'=>'Não logado.'], 401);
        }
        $user = $req->user();
        $obt = $user->createToken('token');
        $tkn = $obt->accessToken;
        $req->headers->add(['Authorization' => 'Bearer '. $tkn]);
        return response()->json(['res'=>'Logado agora.', 'Token'=>$tkn], 200);
    }
    public function showme(Request $req)
    {
        //
        /*$req->validate([
            'email' => 'required|string|email',
            'senha' => 'required|string'
        ]);*/
        $validator = \Validator::make($req->all(), [
            'email' => 'required|string|email',
            'senha' => 'required|string'
        ]);
        if ($validator->fails()) {
            // return response()->json($validator->errors(), Response::HTTP_BAD_REQUEST);
            return response()->json(['res'=>'Parametros incorretos.','err'=>$validator->errors()], 401);
        }

        if(!Auth::attempt(['email' => $req->email, 'password' => $req->senha])){
            return response()->json(['res'=>'Não logado.'], 401);
        }
        $user = $req->user();
        $obt = $user->createToken('token');
        $tkn = $obt->accessToken;
        $req->headers->add(['Authorization' => 'Bearer '. $tkn]);
        return response()->json(['res'=>'Logado agora.', 'Token'=>$tkn], 200);
    }

    public function logout(Request $req)
    {
        $user = $req->user();
        if(!empty($user)){
            $user->token()->revoke();
            return response()->json(['res'=>'Deslogado agora.'], 200);
        } else {
            return response()->json(['res'=>'Não logado.'], 401);
        }
    }
}
