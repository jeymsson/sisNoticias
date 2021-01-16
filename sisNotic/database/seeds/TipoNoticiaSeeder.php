<?php

use App\TipoNoticia;
use Illuminate\Database\Seeder;

class TipoNoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoNoticia::insertOrIgnore(['id' => 1, 'jornalista' => 2, 'descricao' => 'Nacional']);
        TipoNoticia::insertOrIgnore(['id' => 2, 'jornalista' => 2, 'descricao' => 'Internacional']);
        TipoNoticia::insertOrIgnore(['id' => 3, 'jornalista' => 4, 'descricao' => 'Regional']);
        TipoNoticia::insertOrIgnore(['id' => 4, 'jornalista' => 4, 'descricao' => 'Internacional']);

        /*States::create(['country_id' => 1, 'name' => 'Ceará']);
        States::create(['country_id' => 1, 'name' => 'Rio de Janeiro']);
        States::create(['country_id' => 1, 'name' => 'São Paulo']);
        States::create(['country_id' => 1, 'name' => 'Rio Grande do Sul']);
        States::create(['country_id' => 2, 'name' => 'Ohio']);
        States::create(['country_id' => 2, 'name' => 'N. Virginia']);
        States::create(['country_id' => 2, 'name' => 'Kansas']);
        States::create(['country_id' => 2, 'name' => 'New York']);
        States::create(['country_id' => 3, 'name' => 'Berkshire']);
        States::create(['country_id' => 3, 'name' => 'Cambridgeshire']);
        States::create(['country_id' => 3, 'name' => 'Oxfordshire']);*/
    }
}
