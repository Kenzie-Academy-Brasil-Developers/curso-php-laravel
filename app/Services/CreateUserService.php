<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\User;
use Illuminate\Support\Facades\Log;

// $data = [
//     'email' => 'tsunode@mail.com'
// ]

class CreateUserService {
    public function execute(array $data) {
        Log::info('Usuario: 33234324 service->');
        Log::debug('Esse é um debug Usuario service');

        $userFound = User::firstWhere('email', $data['email']);

        // O usuario foi encontrado?
        if(!is_null($userFound)) {
            Log::error('Email já cadastrado');
            throw new AppError('Email já cadastrado', 400);
        }

        $userFound = User::firstWhere('cpf', $data['cpf']);

        // O usuario foi encontrado?
        if(!is_null($userFound)) {
            throw new AppError('CPF já cadastrado', 400);
        }

        return User::create($data);
    }
}
