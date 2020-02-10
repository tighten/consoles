<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Console extends Model
{
    use Sushi;

    protected $rows = [
        [
            'name' => 'AWS Management Console',
            'url' => 'https://console.aws.amazon.com/',
        ],
        [
            'name' => 'Google API Console',
            'url' => 'https://console.developers.google.com/',
        ],
        [
            'name' => 'Twitter Apps',
            'url' => 'https://developer.twitter.com/en/apps',
        ],
        [
            'name' => 'GitHub OAuth Apps',
            'url' => 'https://github.com/settings/developers',
        ]
    ];
}
