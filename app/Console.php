<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Console extends Model
{
    use Sushi;

    protected $rows = [
        [
            'name' => 'AWS',
            'url' => 'https://console.aws.amazon.com/',
        ],
        [
            'name' => 'Google',
            'url' => 'https://console.developers.google.com/',
        ],
        [
            'name' => 'Twitter',
            'url' => 'https://developer.twitter.com/en/apps',
        ],
        [
            'name' => 'GitHub',
            'url' => 'https://github.com/settings/developers',
        ]
    ];
}
