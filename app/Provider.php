<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
        [
            'name' => 'Digital Ocean',
        ],
        [
            'name' => 'Apple',
        ],
        [
            'name' => 'Dropbox',
        ],
        [
            'name' => 'Trello',
        ],
    ];

    public function consoles(): HasMany
    {
        return $this->hasMany(Console::class, 'provider', 'name');
    }
}
