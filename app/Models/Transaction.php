<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'transactions';

    protected $fillable = [
        'value',
        'payee_id',
        'payer_id'
    ];
}
