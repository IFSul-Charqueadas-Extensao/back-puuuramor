<?php

namespace App\Models;

use CodeIgniter\Model;

class ResgatesModel extends Model
{
    protected $table = 'resgates';
    protected $primaryKey = 'id';
    protected $allowedFields = ['titulo', 'descricao', 'foto_antes', 'foto_depois'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
