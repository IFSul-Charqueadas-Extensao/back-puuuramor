<?php

namespace App\Controllers;

use App\Models\AnimalModel;

class Gatinhos extends BaseController
{
    public function index()
    {
        $model = new AnimalModel();

        $data['adotaveis'] = $model->where(['especie' => 'gato', 'categoria' => 'adotavel'])->findAll();
        $data['nao_adotaveis'] = $model->where(['especie' => 'gato', 'categoria' => 'nao_adotavel'])->findAll();
        $data['especiais'] = $model->where(['especie' => 'gato', 'categoria' => 'especial'])->findAll();
        $data['ja_adotados'] = $model->where(['especie' => 'gato', 'categoria' => 'ja_adotado'])->findAll();
        $data['memorial'] = $model->where(['especie' => 'gato', 'categoria' => 'memorial'])->findAll();

        return view('gatinhos', $data);
    }
}
