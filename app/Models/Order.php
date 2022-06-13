<?php

namespace App\Models;

use App\Models\User;
use App\Models\Kamar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
