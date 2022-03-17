<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' =>'927204794626274',
        'client_secret' => 'e4ea2f735e0863b71837cbe340e8de51',
        'redirect' => 'http://localhost:8000/facebook/callback',
    ],
    'google' => [
        'client_id' =>'639572670645-cvsngnu2ji7edini1ukgcu08hpj71h9o.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/google/callback',
    ],

];
