<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Provider extends Model
{
    use Sushi;

    protected $rows = [
        [
            'name' => 'Amazon',
        ],
        [
            'name' => 'Google',
        ],
        [
            'name' => 'Twitter',
        ],
        [
            'name' => 'GitHub',
        ],
    ];

    public function consoles()
    {
        return $this->hasMany(Console::class, 'provider', 'name');
    }
}
