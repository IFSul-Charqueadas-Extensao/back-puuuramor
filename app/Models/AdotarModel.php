<?php

namespace App\Models;

use CodeIgniter\Model;

class AdotarModel extends Model
{
    protected $table = 'animais';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $allowedFields = ['nome', 'idade', 'descricao', 'imagem', 'categoria'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
