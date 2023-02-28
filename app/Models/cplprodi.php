<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cplprodi extends Model
{
    use HasFactory;
    public $table = 'cplprodi';
    protected $fillable = ['kodecpl', 'deskripsi'];
}
