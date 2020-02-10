<?php

namespace App;

use Sushi\Sushi;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
    use Sushi;

    protected $rows = [
        [
            'name' => 'AWS Management Console',
            'url' => 'https://console.aws.amazon.com/',
            'provider' => 'Amazon',
            'route' => 'amazon',
        ],
        [
            'name' => 'AWS IAM Console',
            'url' => 'https://console.aws.amazon.com/iam',
            'provider' => 'Amazon',
            'route' => 'amazon/iam',
        ],
        [
            'name' => 'Google API Console',
            'url' => 'https://console.developers.google.com/',
            'provider' => 'Google',
            'route' => 'google',
        ],
        [
            'name' => 'Twitter Apps',
            'url' => 'https://developer.twitter.com/en/apps',
            'provider' => 'Twitter',
            'route' => 'twitter',
        ],
        [
            'name' => 'GitHub OAuth Apps',
            'url' => 'https://github.com/settings/developers',
            'provider' => 'GitHub',
            'route' => 'github',
        ],
    ];

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider', 'name');
    }
}
