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
            'name' => 'Microsoft',
        ],
        [
            'name' => 'GitHub',
        ],
        [
            'name' => 'Hetzner',
        ],
        [
            'name' => 'Twitter',
        ],
        [
            'name' => 'Vultr',
        ],
        [
            'name' => 'Linode',
        ],
    ];

    public function consoles()
    {
        return $this->hasMany(Console::class, 'provider', 'name');
    }
}
