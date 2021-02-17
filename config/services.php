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
        'client_id'     => '1319383241761791',
        'client_secret' => '4b8bc2172c49cc9a20f1f757c9bb7898',
        'redirect'      => 'http://127.0.0.1:8000/auth/facebook/callback',
    ],

    'google' => [
        'client_id'     => '325649909197-2o5kb16mgeed56i5u7l2la3h2tmf0lev.apps.googleusercontent.com',
        'client_secret' => '3i3ZJXgNVNJL8hQE6CVOTyYM',
        'redirect'      =>  'http://127.0.0.1:8000/auth/google/callback',
    ],

];
