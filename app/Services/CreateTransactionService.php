<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\Transaction;
use App\Models\User;

class CreateTransactionService {
    public function execute(array $data) {
        $userPayer = $this->findUser($data['payer']);

        if($userPayer->type === 'SELLER') {
            throw new AppError('Tipo de usuário inválido', 403);
        }

        if($userPayer->balance < $data['value']) {
            throw new AppError('Saldo insuficiente para transação', 400);
        }

        $userPayee = $this->findUser($data['payee']);

        $userPayer->balance -= $data['value'];
        $userPayee->balance += $data['value'];

        $userPayer->save();
        $userPayee->save();


        return Transaction::create([
            'payee_id' => $userPayee->id,
            'payer_id' => $userPayer->id,
            'value' => $data['value']
        ]);
    }

    private function findUser(string $id) {
        $user = User::find($id);

        if(is_null($user)) {
            throw new AppError("Usuário {$id} não encontrado", 404);
        }

        return $user;
    }
}
