<?php
use Illuminate\Http\Request;

return [
    'routes' => [
        // The middleware to wrap the auth routes in.
        // Must contain session handling otherwise login will fail.
        'middleware' => 'web',

        // The url that will redirect to the SSO URL.
        // There should be no reason to override this.
        'login' => 'login/microsoft',

        // The app route that SSO will redirect to.
        // There should be no reason to override this.
        'callback' => 'login/microsoft/callback',
    ],
    'credentials' => [
        'client_id' => env('AZURE_AD_CLIENT_ID', ''),
        'client_secret' => env('AZURE_AD_CLIENT_SECRET', ''),
        'redirect' => 'https://33af-2a02-1812-2e34-1f00-1cec-5213-e35e-10dd.eu.ngrok.io/login/microsoft/callback'
    ],

    // The route to redirect the user to upon login.
    'redirect_on_login' => 'http://localhost:80/',

    // The User Eloquent class.
    'user_class' => '\\App\\Models\\User',

    // How much time should be left before the access
    // token expires to attempt a refresh.
    'refresh_token_within' => 30,

    // The users table database column to store the user SSO ID.
    'user_id_field' => 'azure_id',

    // How to map azure user fields to Laravel user fields.
    // Do not include the id field above.
    // AzureUserField => LaravelUserField
    'user_map' => [
        'name' => 'name',
        'email' => 'email',
        'name' => 'name',
        'name' => 'name',
    ]
];
