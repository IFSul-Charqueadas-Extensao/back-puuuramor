<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutoModel extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nome',
        'descricao',
        'preco',
        'imagem',
        'estoque',
        'created_at',
        'updated_at'
    ];

    protected $useTimestamps = true;

    protected $validationRules = [
        'nome' => 'required|min_length[2]',
        'preco' => 'required|decimal|greater_than_equal_to[0]',
        'estoque' => 'required|integer|greater_than_equal_to[0]',
    ];

    protected $validationMessages = [
        'nome' => [
            'required' => 'O nome do produto é obrigatório.',
            'min_length' => 'O nome deve ter pelo menos 2 caracteres.',
        ],
        'preco' => [
            'required' => 'Informe o preço.',
            'decimal' => 'O preço deve ser um número com casas decimais.',
            'greater_than_equal_to' => 'O preço não pode ser negativo.',
        ],
        'estoque' => [
            'required' => 'Informe o estoque.',
            'integer' => 'O estoque deve ser um número inteiro.',
            'greater_than_equal_to' => 'O estoque não pode ser negativo.',
        ],
    ];
}
