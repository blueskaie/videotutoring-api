<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    //
    protected $fillable = ["name", "description"];
    protected $hidden = ['created_at', 'updated_at'];

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}
