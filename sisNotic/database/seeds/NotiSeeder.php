<?php

use App\Noticia;
use Illuminate\Database\Seeder;

class NotiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Noticia::insertOrIgnore(['id' => 1, 'jornalista' => 2, 'tipo' => 2, 'titulo' => 'Ovni', 'descricao' => 'Pouso de Ovni', 'corpon' => 'Ovni pousou no Ceará', 'link' => 'imagem']);
        Noticia::insertOrIgnore(['id' => 2, 'jornalista' => 2, 'tipo' => 2, 'titulo' => 2, 'descricao' => 2, 'corpon' => 2, 'link' => 2]);
        Noticia::insertOrIgnore(['id' => 3, 'jornalista' => 2, 'tipo' => 2, 'titulo' => 2, 'descricao' => 2, 'corpon' => 2, 'link' => 2]);
        Noticia::insertOrIgnore(['id' => 4, 'jornalista' => 2, 'tipo' => 2, 'titulo' => 2, 'descricao' => 2, 'corpon' => 2, 'link' => 2]);
    }
}
