<?php

use Illuminate\Database\Seeder;
use App\Models\Config;
class ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Config::create([
        	'titulo'		=> 'Titulo do Site',
        	'descricao'		=> 'Descrição do Site',
        	'chaves'		=> 'palavras chaves',
        	'email'			=> 'email@email.com',
        	'fone1'			=> '(99) 99999-9999',
        	'fone2'			=> '(99) 99999-9999',
        	'whatsapp1'		=> '999999999',
        	'whatsapp2'		=> '999999999',
        	'endereço'		=> 'Endereço da Empresa',
        	'cnpj'			=> '99.999/9999-99',
        	'contato'		=> 'email@email.com',
        	'slogan'		=> 'Nome da Empresa',
        	'youtube'		=> '---',
        	'twitter'		=> '---',
        	'instagram'		=> '---',
        	'facebook'		=> '---',
        	'google'		=> '---',
        	'dest1'			=> 'Frase 01',
        	'dest2'			=> 'Frase 02',
        	'dest3'			=> 'Frase 03',
        	'dest4'			=> 'Frase 04',
            'dest5'         => 'Frase 05'
        ]);
    }
}
