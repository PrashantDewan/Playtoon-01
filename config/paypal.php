<?php

/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        // 'client_id'         => env('PAYPAL_SANDBOX_CLIENT_ID', 'AbF1oycWMBsFBmJoFEQuguBhYswkb8iqCFIg3KFXnpM-gv6sVuVcboukY8qkTJJmsc648pol2uW6Amtb'),
        // 'secret'     => env('PAYPAL_SANDBOX_CLIENT_SECRET', 'ED_-go4aw-S_UFg-C9iFRGP044K-5PfDN0i27em88FMm2DsZkFbadIYQBS_u_2zD8Rplh8pr14aF3A4P'),
        'app_id'            => 'APP-80W284485P519543T',
        'certificate' => env('PAYPAL_LIVE_API_CERTIFICATE', ''),
        'username'    => env('PAYPAL_LIVE_API_USERNAME', ''),
        'password'    => env('PAYPAL_LIVE_API_PASSWORD', ''),
        'client_id'         => env('PAYPAL_SANDBOX_CLIENT_ID', 'AVsJEFLoar1g0bPQSlpGTlLKw8uBw00vEwco3vf-cBXr_VNcPh-9VhyP9MsgK3v2PNEYpAWw_9Zy9d39'),
        'secret'     => env('PAYPAL_SANDBOX_CLIENT_SECRET', 'EBmLbmAR1qE3IKSwpvkAoYS2fZ4xXxrSNKpY615jfbVpkqNAtrSqBd1xMYn9m3o15PjasZYkN9LDb9h5'),
        'app_id'            => 'APP-80W284485P519543T',

    ],
    'live' => [
        'username'    => env('PAYPAL_LIVE_API_USERNAME', ''),
        'password'    => env('PAYPAL_LIVE_API_PASSWORD', ''),
        'secret'      => env('PAYPAL_LIVE_API_SECRET', ''),
        'certificate' => env('PAYPAL_LIVE_API_CERTIFICATE', ''),
        'app_id'      => '', // Used for Adaptive Payments API
    ],

    'payment_action' => 'Sale', // Can only be 'Sale', 'Authorization' or 'Order'
    'currency'       => env('PAYPAL_CURRENCY', 'USD'),
    'billing_type'   => 'MerchantInitiatedBilling',
    'notify_url'     => '', // Change this accordingly for your application.
    'locale'         => '', // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => false, // Validate SSL when creating api client.
];
$provider->setApiCredentials($config);
