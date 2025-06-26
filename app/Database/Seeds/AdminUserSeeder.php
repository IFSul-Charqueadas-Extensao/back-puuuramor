<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Shield\Entities\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $username = "admin";
        $email = "admin@example.com";
        $password = "senhaForte123!";

        $users = auth()->getProvider();

        $existingUser = $users->where('username', $username)->first();
        if ($existingUser) {
            echo "Usuário '$username' já existe.\n";
            return;
        }

        $user = new User([
            'username' => $username,
            'email'    => $email,
            'password' => $password,
        ]);

        $users->save($user);

        $user = $users->findById($users->getInsertID());

        $user->activate();
        $users->save($user);

        echo "Usuário criado com sucesso.\n";
    }
}
