return [

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'], // sementara buka dulu

    'allowed_headers' => ['*'],

    'supports_credentials' => false,

];