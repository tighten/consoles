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
        ],
        [
            'name' => 'AWS Console w/IAM Account',
            'url' => 'https://signin.aws.amazon.com/oauth?redirect_uri=https%3A%2F%2Fconsole.aws.amazon.com%2Fconsole%2Fhome%3Fstate%3DhashArgs%2523%26isauthcode%3Dtrue&client_id=arn%3Aaws%3Aiam%3A%3A015428540659%3Auser%2Fhomepage&response_type=code&iam_user=true&account=',
            'provider' => 'Amazon',
            'route' => 'aws/account',
        ],
        [
            'name' => 'Google API Console',
            'url' => 'https://console.developers.google.com/',
            'provider' => 'Google',
            'route' => 'google',
        ],
        [
            'name' => 'Google Analytics Console',
            'url' => 'https://analytics.google.com/analytics/web/',
            'provider' => 'Google',
            'route' => 'google/analytics',
        ],
        [
            'name' => 'Google Play Console',
            'url' => 'https://play.google.com/apps/publish',
            'provider' => 'Google',
            'route' => 'google/play',
        ],
        [
            'name' => 'Firebase Console',
            'url' => 'https://console.firebase.google.com',
            'provider' => 'Google',
            'route' => 'google/firebase',
        ],
        [
            'name' => 'Hetzner Cloud Console',
            'url' => 'https://console.hetzner.cloud',
            'provider' => 'Hetzner',
            'route' => 'hcloud',
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
        [
            'name' => 'Azure Portal',
            'url' => 'https://portal.azure.com/',
            'provider' => 'Microsoft',
            'route' => 'azure',
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
