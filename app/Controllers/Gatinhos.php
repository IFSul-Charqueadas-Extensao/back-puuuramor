<?php

namespace App\Controllers;

class Gatinhos extends BaseController
{
    public function index()
    {
        $data['adotaveis'] = [
            ['nome' => 'Mimi', 'descricao' => 'Gatinha brincalhona', 'imagem' => 'mimi.jpg'],
            ['nome' => 'Toby', 'descricao' => 'Gato calmo e carinhoso', 'imagem' => 'toby.jpg'],
        ];

        $data['nao_adotaveis'] = [
            ['nome' => 'Felix', 'descricao' => 'Gato selvagem, não domesticável', 'imagem' => 'felix.jpg'],
        ];

        $data['especiais'] = [
            ['nome' => 'Luna', 'descricao' => 'Necessidades especiais, precisa de cuidados', 'imagem' => 'luna.jpg'],
        ];

        $data['ja_adotados'] = [
            ['nome' => 'Simba', 'descricao' => 'Já encontrou um lar feliz', 'imagem' => 'simba.jpg'],
        ];

        $data['memorial'] = [
            ['nome' => 'Garfield', 'descricao' => 'Em memória', 'imagem' => 'garfield.jpg'],
        ];

        return view('gatinhos', $data);
    }
}
