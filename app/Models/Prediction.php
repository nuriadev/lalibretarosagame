<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_identifier', 'outfit', 'invitado', 'acustica', 'rosa', 'electrica', 'nueva', 'otro', 'piano', 'conocemos', 'fies', 'primera', 'token', 'token_expiry'
    ];
}
