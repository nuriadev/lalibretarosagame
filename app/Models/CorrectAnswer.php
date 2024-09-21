<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorrectAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'outfit', 'invitado', 'acustica', 'rosa', 'electrica', 'nueva', 'otro', 'piano', 'conocemos', 'fies', 'primera'
    ];
}
