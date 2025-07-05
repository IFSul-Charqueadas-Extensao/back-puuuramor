<?php

namespace App\Models;

use CodeIgniter\Model;

class AnimalModel extends Model
{
    protected $table = 'animais';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nome',
        'especie',
        'idade',
        'descricao',
        'categoria',
        'status',
        'imagem',
        'data_resgate',
        'data_castracao',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = true;

    protected $validationRules = [
        'nome'      => 'required|min_length[2]',
        'especie'   => 'required|in_list[gato,cachorro]',
        'idade'     => 'required|integer|greater_than_equal_to[0]',
        'categoria' => 'permit_empty|in_list[adotavel,especial,nao_adotavel,ja_adotado,memorial]',
        'status'    => 'permit_empty|in_list[disponivel,em tratamento,adotado]',
        'data_resgate' => 'permit_empty|valid_date',
    ];

    protected $validationMessages = [
        'nome' => [
            'required' => 'O nome do animal é obrigatório.',
            'min_length' => 'O nome deve ter pelo menos 2 caracteres.',
        ],
        'idade' => [
            'required' => 'Informe a idade.',
            'integer'  => 'A idade deve ser um número inteiro.',
            'greater_than_equal_to' => 'A idade não pode ser negativa.',
        ],
    ];

}