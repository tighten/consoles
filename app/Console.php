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
            'provider' => 'Amazon',
            'route' => 'aws',
            'shortcut' => 'a w s 1'
        ],
        [
            'name' => 'AWS Console w/IAM Account',
            'url' => 'https://signin.aws.amazon.com/oauth?redirect_uri=https%3A%2F%2Fconsole.aws.amazon.com%2Fconsole%2Fhome%3Fstate%3DhashArgs%2523%26isauthcode%3Dtrue&client_id=arn%3Aaws%3Aiam%3A%3A015428540659%3Auser%2Fhomepage&response_type=code&iam_user=true&account=',
            'provider' => 'Amazon',
            'route' => 'aws/account',
            'shortcut' => 'a w s 2'
        ],
        [
            'name' => 'Google API Console',
            'url' => 'https://console.developers.google.com/',
            'provider' => 'Google',
            'route' => 'google',
            'shortcut' => 'g a p i'
        ],
        [
            'name' => 'Google Analytics Console',
            'url' => 'https://analytics.google.com/analytics/web/',
            'provider' => 'Google',
            'route' => 'google/analytics',
            'shortcut' => 'g o o a'
        ],
        [
            'name' => 'Google Play Console',
            'url' => 'https://play.google.com/apps/publish',
            'provider' => 'Google',
            'route' => 'google/play',
            'shortcut' => 'g p l'
        ],
        [
            'name' => 'Firebase Console',
            'url' => 'https://console.firebase.google.com',
            'provider' => 'Google',
            'route' => 'google/firebase',
            'shortcut' => 'f i r e'
        ],
        [
            'name' => 'Hetzner Cloud Console',
            'url' => 'https://console.hetzner.cloud',
            'provider' => 'Hetzner',
            'route' => 'hcloud',
            'shortcut' => 'h c l'
         ],
        [
            'name' => 'Twitter Apps',
            'url' => 'https://developer.twitter.com/en/apps',
            'provider' => 'Twitter',
            'route' => 'twitter',
            'shortcut' => 't w'
        ],
        [
            'name' => 'GitHub OAuth Apps',
            'url' => 'https://github.com/settings/developers',
            'provider' => 'GitHub',
            'route' => 'github',
            'shortcut' => 'g i t'
        ],
        [
            'name' => 'Azure Portal',
            'url' => 'https://portal.azure.com/',
            'provider' => 'Microsoft',
            'route' => 'azure',
            'shortcut' => 'a z'
        ],
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'route';
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'provider', 'name');
    }
}
