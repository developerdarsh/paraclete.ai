<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FnEPtkIVVlfPXRKI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gDFIcUqdUIt3v0qZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hHYzoLCz8Hl0w4zw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aOdcg8XbPLNKjJbc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login/2fa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.2fa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'login.2fa.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verification-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MO7vmBOb67zMv5aR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BVsS2mCdAmim7vY0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'contact.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/terms-and-conditions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'terms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/privacy-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VPvHgitHJcKr0IOi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hArcmDjzsltU3PE5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MAa6vAMD6SyZ4N9X',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1FpZzYl11mPGe5TM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/mollie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mollie.webhook',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/coinbase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DKMg6iRiCio5gAzQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/flutterwave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wTSpmGKLZcxut6xw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/yookassa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gzd8UmWDarSjUQAw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/paddle' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QS1hd8XvO3knCwIl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/webhooks/midtrans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MqYqmR2yDYITthJp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.requirements',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.permissions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.database',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'install.database.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/activation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.activation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'install.activation.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/update/now' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n19DIK3kWx2yb4o0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.templates',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates/template/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m3fnhfwl83RlwtGD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates/template/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RUuX8rPupcVjq7Oq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates/template/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cFQ29yCpjUjhxcUt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates/template/changepackage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tT4LptNuYFzL0tum',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates/template/setnew' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qGc3HJKHK6JRr0ng',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates/template/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jaMtmm82HsslAYE8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates/activate/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mcWqUyo5pGJOIaDM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/templates/deactivate/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zdAh2GTUHwW2xwTt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs/keys' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs.keys',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs/keys/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs.keys.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs/keys/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs.keys.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs/keys/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cq2hDU6S3SUzTHlA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs/keys/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VKBOEI5AmbWFpJSK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/configs/keys/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HwNsVytl4k2fYpdQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/custom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/custom/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom.category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/custom/category/change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l1noeNxNDQwj0SuW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/custom/category/description' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2Yoj31jt8F26fOeU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/custom/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::92hZirxe96j96mmS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/davinci/custom/category/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P00xeCX0Nk776q6X',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/text-to-speech/voices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.voices',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/text-to-speech/voices/avatar/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::83FtuANhZzd1okPh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/text-to-speech/voice/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SEdhWKLrgXjrbOmj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/text-to-speech/voices/voice/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UT3kxMTg2j7rxaSI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/text-to-speech/voices/voice/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LZhhezy0ni313loQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/text-to-speech/voices/activate/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8kCU6iuoRiSE82Kr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/text-to-speech/voices/deactivate/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QzgGBrr1S8IOCwK5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chats',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/avatar/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mchyUKsXSvRIqLnp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wi03cfk1injpYsBg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p1HF8a68Ewsp19gW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0x0vyC0CmIlQWW8Z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/category/change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uHMU4uepTpYP5cxT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YKgdFAWUYPxMAGSN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/category/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PPeKibvLU1uNPSxE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/prompt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.prompt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/prompt/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.prompt.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/prompt/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.prompt.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/prompt/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rFZnSadOaSDFUhbY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/prompt/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zQF29UIDxXSPky5P',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/chats/chat/prompt/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EbKW7AwQ0RCs8n3n',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/activity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.activity',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.transactions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/transaction/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yILzYnMdklXvXQFI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.subscriptions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/subscriptions/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.stop.subscription',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plans',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/plan/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/prepaid' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/prepaid/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/promocodes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/promocodes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/referral/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/referral/payouts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/referral/top' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.top',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.invoice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.invoice.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/finance/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.settings.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/support/response' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.response',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/support/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G0t9tNM1CiDKRjQq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications/sytem' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.system',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications/mark-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.markAllRead',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications/delete-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.deleteAll',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/notifications/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K0xeb8kXhCYPuYjz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/global' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.global',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.global.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/backup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.backup',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/backup/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.backup.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/smtp/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.smtp.test',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/smtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.smtp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.smtp.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/registration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.registration',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.registration.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/oauth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.oauth',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.oauth.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/activation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/activation/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation.remove',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/activation/destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/activation/manual' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation.manual',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation.manual.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/appearance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.appearance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.appearance.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/frontend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.frontend',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.frontend.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/steps' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.step',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/steps/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.step.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.step.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/tools' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.tool',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/features' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.feature',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/features/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.feature.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.feature.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/blog/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AUNVGZdx5DLsQ5dY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/faq/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/faq/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GI6J8OQ2tOoHjaRZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/review/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/review/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RBOg3y9y4EwDmQM3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/adsense' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.adsense',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.terms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.terms.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.about.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/upgrade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.upgrade',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.upgrade.start',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.clear',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/clear/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.clear.cache',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/settings/clear/symlink' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.clear.symlink',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dashboard/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7GMKlEEQ8H3cZhB2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/dashboard/favoritecustom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::roZkSEPkFoGG2vLb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.templates',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/original-template/generate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UrHKDxncplwk8J96',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/original-template/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GsaOCpEqRHQz6waT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/custom-template/customGenerate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2gYGFsHis4xlsZUQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/custom-template/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nxlHNjHoZneFeRg6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::srSqmlOZq3O16ZjN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/original-template/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6CH00QLuDF1M2pOe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/original-template/favoritecustom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nQDVADtJrROBFODw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/templates/custom-template/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::atmOD1gK3yCSOYmm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/images' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.images',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/images/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DP4I6AGq1oHBuUyj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/images/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hT8B0264wotPa7Gt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/images/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cPjdgvKZ77wW59ZI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/images/load' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.images.load',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.codex',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/code/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uWZUc9McjxMoIj6O',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/code/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1piSmKzL1SWeUrub',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/code/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9rR8y9v956xmfWpE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/code/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WIzpzRLvJ1pfGoqb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.chat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B4laeOh3txVpDdTZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SvWM3gvT7twOZrtC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rYHCKKVEfhCFMXVA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/generate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pLILUHnM9k6BHuVr',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/conversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ixKbZlFebewog8Kc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E7dm2xqA2Cy9YLxJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/rename' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1uvNU6bvTePJ59DM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/chat/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jsrYK8kl03u50OYM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/speech-to-text' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.transcribe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/speech-to-text/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dm3tHWYvHgZ3zP26',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/speech-to-text/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y96wPYLc9yag6Qmn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/speech-to-text/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wHTp44nP8dMjg82r',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/speech-to-text/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oq2IitydqmYPENwc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/synthesize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover.synthesize',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/listen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover.listen',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/listen-row' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UHkT1z6va1mM9x2Z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/audio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3ylB2ysfqWoYO08a',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mFZCWTyjUBxNSGjt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/text-to-speech/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8t9SWeKY7nGaavp1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.wizard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard/generate/keywords' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TAZo6fONi0TvBvkl',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard/generate/ideas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xgUqVI0f9RAuXS0u',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard/generate/outlines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EQSBgUsJ7bNA9Apr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard/generate/talking-points' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b2Be6siRQDimU0Pg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard/generate/images' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9twpiRKhi73C4TIg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard/generate/prepare' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tr4sL5Xpar2gabjZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard/generate/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Japit5znobQyuooK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/wizard/generate/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mGgvhshGayxUTlzj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/vision' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.vision',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/vision/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5qyhiEGJxl6A8ikn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/vision/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f4lGaMEKEF6lldUB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/vision/generate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::30240LmQirFqeduG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/vision/conversation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sNWqmSEqOfEqow8E',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/vision/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::URekckWqszwUJGwU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/vision/rename' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NgPUUG8g6agN3UQ7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/vision/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ndcLrgsW3Ixvxe44',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IWjoebfO4diwjKqf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/images' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.images',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/images/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5RvY1pNgtUJ3qoPZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.codes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/voiceovers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.voiceovers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/transcripts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.transcripts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/result/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2lcEoJWvCPAwsDlM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/result/code/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cGh5wxELRkMzYdrh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/result/voiceover/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fsuvBF6Zo5z2eDr4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/document/result/transcript/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pbiGukwtDkRaNSlb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/workbook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DuQRqmAMmXBH9h7Z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        3 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/workbook/result/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZrDe9aMUit8egjqz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/workbook/change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks.change',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/security/2fa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security.2fa',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/security/2fa/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security.2fa.activate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/security/2fa/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security.2fa.deactivate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/edit/defaults' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.defaults',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/edit/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile/api/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.api',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.team',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.team.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/team/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.team.list',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/team/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.team.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/team/leave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1NZLFp0i2bdV3raE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/team/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m4Iz5G9BnZHKteGQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/purchases/subscriptions/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dmlqDeGrlxuyrsDv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/purchases' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.purchases',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/purchases/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.purchases.subscriptions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/pricing/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.plans',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/pricing/plan/one-time' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.prepaid.checkout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/approved/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.approved.razorpay',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/approved/midtrans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.approved.midtrans',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/approved/iyzico' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.approved.iyzico',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/approved/braintree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.approved.braintree',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/approved/paddle' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fzQdwu7CRFSc132F',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/approved' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.approved',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/cancelled' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.cancelled',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/subscription/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.subscription.razorpay',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/subscription/flutterwave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.subscription.flutterwave',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/subscription/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.subscription.stripe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/subscription/approved' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.subscription.approved',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/subscription/cancelled' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.subscription.cancelled',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/stripe/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.stripe.process',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/payments/stripe/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.stripe.cancel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/referral' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/referral/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/referral/gateway' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.gateway',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.gateway.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/referral/payouts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/referral/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/referral/payouts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/referral/payouts/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/referral/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.referrals',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.support.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vs9pww8hZreL0JVT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support/response' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support.response',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/support/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/notification/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VSBGruHI71oTcuMB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/notifications/mark-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications.markAllRead',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/notifications/delete-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications.deleteAll',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/notifications/mark-as-read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications.mark',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/reset\\-password/([^/]++)(*:32)|/verify\\-email/([^/]++)/([^/]++)(*:71)|/a(?|uth/(?|redirect/([^/]++)(*:107)|callback/([^/]++)(*:132))|dmin/(?|davinci/custom/([^/]++)/(?|show(*:180)|update(*:194))|chats/chat/(?|([^/]++)/(?|edit(*:233)|update(*:247))|prompt/([^/]++)/(?|edit(*:279)|update(*:293)))|users/(?|([^/]++)(?|/(?|s(?|how(*:334)|ubscription(*:353))|edit(*:366)|credit(*:380)|assign(*:394)|increase(*:410)|update(*:424))|(*:433))|delete(*:448)|plan(*:460))|finance/(?|transaction/([^/]++)/(?|update(*:510)|show(*:522)|edit(*:534))|p(?|lan/(?|([^/]++)(?|/(?|show(*:573)|edit(*:585))|(*:594))|delete(*:609))|r(?|epaid/(?|([^/]++)(?|/(?|show(*:650)|edit(*:662))|(*:671))|delete(*:686))|omocodes/([^/]++)(?|/(?|show(*:723)|edit(*:735))|(*:744)))))|referral/(?|([^/]++)/show(*:781)|payouts/([^/]++)/(?|s(?|how(*:816)|tore(*:828))|cancel(*:843)|decline(*:858)))|s(?|upport/([^/]++)/show(*:892)|ettings/(?|b(?|ackup/([^/]++)(?|(*:932)|/delete(*:947))|logs/([^/]++)(?|(*:972)|/edit(*:985)))|steps/(?|([^/]++)(?|/edit(*:1020)|(*:1029))|delete(*:1045))|tools/([^/]++)(?|/edit(*:1077)|(*:1086))|f(?|eatures/(?|([^/]++)(?|/edit(*:1127)|(*:1136))|delete(*:1152))|aqs/([^/]++)(?|(*:1177)|/edit(*:1191)))|reviews/([^/]++)(?|(*:1221)|/edit(*:1235))|adsense/([^/]++)(?|(*:1264)|/edit(*:1278))))|notifications/(?|([^/]++)/show(*:1320)|system/([^/]++)/show(*:1349))))|/blog/([^/]++)(*:1375)|/locale/([^/]++)(*:1400)|/user/(?|te(?|mplates/(?|custom\\-template/([^/]++)(*:1459)|original\\-template/([^/]++)(*:1495))|xt\\-to\\-speech/([^/]++)/show(*:1533)|am/([^/]++)/(?|show(*:1561)|edit(*:1574)|update(*:1589)))|chats/([^/]++)(*:1614)|document/result/(?|([^/]++)/show(*:1655)|code/([^/]++)/show(*:1682)|voiceover/([^/]++)/show(*:1714)|transcript/([^/]++)/show(*:1747))|workbook/result/([^/]++)/show(*:1786)|p(?|r(?|ofile/(?|security/password/([^/]++)(*:1838)|([^/]++)(*:1855)|project(*:1871)|edit(?|(*:1887)|/delete/([^/]++)(*:1912))|api/store/([^/]++)(*:1940)|update/defaults/([^/]++)(*:1973))|icing/plan/subscription/([^/]++)(*:2015))|urchases/show/([^/]++)(*:2047)|ayments/(?|pay/(?|([^/]++)(?|(*:2085))|one\\-time/([^/]++)/([^/]++)(?|(*:2125))|promocode/(?|prepaid/([^/]++)(*:2164)|subscription/([^/]++)(*:2194)))|invoice/([^/]++)/(?|generate(*:2233)|show(*:2246)|transfer(*:2263))))|referral/payouts/([^/]++)/(?|show(*:2308)|cancel(*:2323)|decline(*:2339))|support/([^/]++)/show(*:2370)|notification/([^/]++)/show(*:2405)))/?$}sDu',
    ),
    3 => 
    array (
      32 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      71 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FPc74Fyoc3GjZDiD',
          ),
          1 => 
          array (
            0 => 'driver',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      132 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LPgWQrfHZhDoP8uy',
          ),
          1 => 
          array (
            0 => 'driver',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      180 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      279 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.prompt.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      293 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.chat.prompt.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      334 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      353 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.subscription',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      380 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.credit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.assign',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      410 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.increase',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      433 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.change',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r4PduOkYt6eO8yDf',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      460 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rK4yCgwTNDPJY4qz',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.transaction.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.transaction.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      534 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.transaction.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      573 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      585 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      609 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hMlgRDr6tnOMH2q7',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      650 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      662 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      671 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      686 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ncBBhbHVJlY7VXt9',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      723 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      735 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      744 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.destroy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.delete',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      781 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.show',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      816 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      843 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts.decline',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.show',
          ),
          1 => 
          array (
            0 => 'ticket_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      932 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.backup.download',
          ),
          1 => 
          array (
            0 => 'file_name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      947 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.backup.delete',
          ),
          1 => 
          array (
            0 => 'file_name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      985 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1020 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.step.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.step.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1045 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UObZE7xTv7npJ3Hx',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1077 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.tool.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1086 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.tool.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1127 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.feature.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1136 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.feature.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iqmvvcrsCPZinHYn',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1177 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1221 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1235 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1264 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.adsense.update',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.adsense.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1349 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.systemShow',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.show',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'locale',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1459 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MQaXP67XI4aqhTSm',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Jctunh2jreFUS8JH',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1533 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1561 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.team.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.team.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1589 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.team.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1614 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qd7x4B4tgXeFVUQu',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1682 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.code.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1714 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.voiceover.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1747 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.transcript.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1786 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1838 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security.password',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1871 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.project',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1887 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.edit',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1912 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.delete.account',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1940 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.api.store',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1973 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.update.defaults',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.plan.subscribe',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2047 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.purchases.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2085 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W5bULYpZkWbuY6bl',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.pay',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2125 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SxgOfnTCS5eeeM6v',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.pay.prepaid',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2164 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.promocodes.prepaid',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.promocodes.subscription',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.invoice',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2246 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.invoice.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.invoice.transfer',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2323 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.cancel',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2339 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.decline',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2370 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support.show',
          ),
          1 => 
          array (
            0 => 'ticket_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2405 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications.show',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::FnEPtkIVVlfPXRKI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::FnEPtkIVVlfPXRKI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gDFIcUqdUIt3v0qZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000065e0000000000000000";}";s:4:"hash";s:44:"1fROePN4V8bvCIQ8I5wneMQHGf6N3Pbce3iGcCerBB0=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::gDFIcUqdUIt3v0qZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hHYzoLCz8Hl0w4zw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hHYzoLCz8Hl0w4zw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aOdcg8XbPLNKjJbc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::aOdcg8XbPLNKjJbc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.2fa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/2fa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@twoFactorAuthentication',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@twoFactorAuthentication',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.2fa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.2fa.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/2fa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@twoFactorAuthenticationStore',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@twoFactorAuthenticationStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.2fa.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
          2 => 'signed',
          3 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email/verification-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
          2 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MO7vmBOb67zMv5aR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MO7vmBOb67zMv5aR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FPc74Fyoc3GjZDiD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/redirect/{driver}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@redirectToProvider',
        'controller' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@redirectToProvider',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FPc74Fyoc3GjZDiD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LPgWQrfHZhDoP8uy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/callback/{driver}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@handleProviderCallback',
        'controller' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@handleProviderCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LPgWQrfHZhDoP8uy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BVsS2mCdAmim7vY0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BVsS2mCdAmim7vY0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@blogShow',
        'controller' => 'App\\Http\\Controllers\\HomeController@blogShow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogs.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@contactShow',
        'controller' => 'App\\Http\\Controllers\\HomeController@contactShow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@contactSend',
        'controller' => 'App\\Http\\Controllers\\HomeController@contactSend',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@aboutUs',
        'controller' => 'App\\Http\\Controllers\\HomeController@aboutUs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'terms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms-and-conditions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@termsAndConditions',
        'controller' => 'App\\Http\\Controllers\\HomeController@termsAndConditions',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'terms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@privacyPolicy',
        'controller' => 'App\\Http\\Controllers\\HomeController@privacyPolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'privacy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VPvHgitHJcKr0IOi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\StripeWebhookController@handleStripe',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\StripeWebhookController@handleStripe',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::VPvHgitHJcKr0IOi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hArcmDjzsltU3PE5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaypalWebhookController@handlePaypal',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaypalWebhookController@handlePaypal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hArcmDjzsltU3PE5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MAa6vAMD6SyZ4N9X' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/paystack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaystackWebhookController@handlePaystack',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaystackWebhookController@handlePaystack',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MAa6vAMD6SyZ4N9X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1FpZzYl11mPGe5TM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\RazorpayWebhookController@handleRazorpay',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\RazorpayWebhookController@handleRazorpay',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1FpZzYl11mPGe5TM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mollie.webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/mollie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\MollieWebhookController@handleMollie',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\MollieWebhookController@handleMollie',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'mollie.webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DKMg6iRiCio5gAzQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/coinbase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\CoinbaseWebhookController@handleCoinbase',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\CoinbaseWebhookController@handleCoinbase',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DKMg6iRiCio5gAzQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wTSpmGKLZcxut6xw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/flutterwave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\FlutterwaveWebhookController@handleFlutterwave',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\FlutterwaveWebhookController@handleFlutterwave',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::wTSpmGKLZcxut6xw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gzd8UmWDarSjUQAw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/yookassa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\YookassaWebhookController@handleYookassa',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\YookassaWebhookController@handleYookassa',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Gzd8UmWDarSjUQAw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QS1hd8XvO3knCwIl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/paddle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaddleWebhookController@handlePaddle',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaddleWebhookController@handlePaddle',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QS1hd8XvO3knCwIl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MqYqmR2yDYITthJp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/midtrans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\MidtransWebhookController@midtransPaddle',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\MidtransWebhookController@midtransPaddle',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MqYqmR2yDYITthJp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@index',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.requirements' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@requirements',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@requirements',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.requirements',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.permissions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@permissions',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@permissions',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.permissions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@database',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@database',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.database',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.database.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@storeDatabaseCredentials',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@storeDatabaseCredentials',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.database.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.activation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@activation',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@activation',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.activation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.activation.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@activateApplication',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@activateApplication',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.activation.activate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'locale' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'locale/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LocaleController@language',
        'controller' => 'App\\Http\\Controllers\\LocaleController@language',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'locale',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n19DIK3kWx2yb4o0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/update/now',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UpdateController@updateDatabase',
        'controller' => 'App\\Http\\Controllers\\Admin\\UpdateController@updateDatabase',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::n19DIK3kWx2yb4o0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.templates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templates',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templates',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.templates',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m3fnhfwl83RlwtGD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@descriptionUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@descriptionUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::m3fnhfwl83RlwtGD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RUuX8rPupcVjq7Oq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateActivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateActivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::RUuX8rPupcVjq7Oq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cFQ29yCpjUjhxcUt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateDeactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateDeactivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::cFQ29yCpjUjhxcUt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tT4LptNuYFzL0tum' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/changepackage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@assignPackage',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@assignPackage',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::tT4LptNuYFzL0tum',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qGc3HJKHK6JRr0ng' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/setnew',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@setNew',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@setNew',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::qGc3HJKHK6JRr0ng',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jaMtmm82HsslAYE8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@deleteTemplate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@deleteTemplate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jaMtmm82HsslAYE8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mcWqUyo5pGJOIaDM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/templates/activate/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateActivateAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateActivateAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mcWqUyo5pGJOIaDM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zdAh2GTUHwW2xwTt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/templates/deactivate/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateDeactivateAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateDeactivateAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zdAh2GTUHwW2xwTt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.keys' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/configs/keys',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@showKeys',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@showKeys',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.keys',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.keys.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/configs/keys/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@createKeys',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@createKeys',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.keys.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.keys.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs/keys/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@storeKeys',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@storeKeys',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.keys.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cq2hDU6S3SUzTHlA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs/keys/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::cq2hDU6S3SUzTHlA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VKBOEI5AmbWFpJSK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs/keys/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@activate',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@activate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::VKBOEI5AmbWFpJSK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HwNsVytl4k2fYpdQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs/keys/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::HwNsVytl4k2fYpdQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/custom/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/davinci/custom/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/custom/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@category',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@category',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l1noeNxNDQwj0SuW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom/category/change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@change',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@change',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::l1noeNxNDQwj0SuW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2Yoj31jt8F26fOeU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom/category/description',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@description',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@description',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::2Yoj31jt8F26fOeU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::92hZirxe96j96mmS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::92hZirxe96j96mmS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P00xeCX0Nk776q6X' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom/category/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::P00xeCX0Nk776q6X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.voices' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/text-to-speech/voices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voices',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voices',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.voices',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::83FtuANhZzd1okPh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/text-to-speech/voices/avatar/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@changeAvatar',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@changeAvatar',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::83FtuANhZzd1okPh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SEdhWKLrgXjrbOmj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/text-to-speech/voice/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::SEdhWKLrgXjrbOmj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UT3kxMTg2j7rxaSI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/text-to-speech/voices/voice/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceActivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceActivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::UT3kxMTg2j7rxaSI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LZhhezy0ni313loQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/text-to-speech/voices/voice/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceDeactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceDeactivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::LZhhezy0ni313loQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8kCU6iuoRiSE82Kr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/text-to-speech/voices/activate/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voicesActivateAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voicesActivateAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::8kCU6iuoRiSE82Kr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QzgGBrr1S8IOCwK5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/text-to-speech/voices/deactivate/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voicesDeactivateAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voicesDeactivateAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::QzgGBrr1S8IOCwK5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chats',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chats',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chats',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mchyUKsXSvRIqLnp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/avatar/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@changeAvatar',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@changeAvatar',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mchyUKsXSvRIqLnp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wi03cfk1injpYsBg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Wi03cfk1injpYsBg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p1HF8a68Ewsp19gW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatActivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatActivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::p1HF8a68Ewsp19gW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0x0vyC0CmIlQWW8Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatDeactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@chatDeactivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::0x0vyC0CmIlQWW8Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats/chat/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats/chat/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/chats/chat/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats/chat/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@category',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@category',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uHMU4uepTpYP5cxT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/category/change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@change',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@change',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::uHMU4uepTpYP5cxT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YKgdFAWUYPxMAGSN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@createCategory',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@createCategory',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::YKgdFAWUYPxMAGSN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PPeKibvLU1uNPSxE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/category/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::PPeKibvLU1uNPSxE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.prompt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats/chat/prompt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@prompt',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@prompt',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.prompt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.prompt.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats/chat/prompt/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptCreate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptCreate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.prompt.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.prompt.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/prompt/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptStore',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptStore',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.prompt.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.prompt.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/chats/chat/prompt/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptEdit',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptEdit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.prompt.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.chat.prompt.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/chats/chat/prompt/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.chat.prompt.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rFZnSadOaSDFUhbY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/prompt/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptActivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptActivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::rFZnSadOaSDFUhbY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zQF29UIDxXSPky5P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/prompt/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptDeactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptDeactivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zQF29UIDxXSPky5P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EbKW7AwQ0RCs8n3n' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/chats/chat/prompt/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptDelete',
        'controller' => 'App\\Http\\Controllers\\Admin\\ChatCustomizationController@promptDelete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::EbKW7AwQ0RCs8n3n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.activity' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/activity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@activity',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@activity',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.activity',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@listUsers',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@listUsers',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.credit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}/credit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@credit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@credit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.credit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.subscription' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}/subscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@subscription',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@subscription',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.subscription',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.assign' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/{user}/assign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@assignSubscription',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@assignSubscription',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.assign',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.increase' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/{user}/increase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@increase',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@increase',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.increase',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/users/{user}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.change' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@change',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@change',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r4PduOkYt6eO8yDf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::r4PduOkYt6eO8yDf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rK4yCgwTNDPJY4qz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/plan',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@hiddenPlans',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@hiddenPlans',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::rK4yCgwTNDPJY4qz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.transactions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@listTransactions',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@listTransactions',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.transactions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.transaction.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/finance/transaction/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.transaction.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.transaction.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/transaction/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.transaction.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.transaction.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/transaction/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.transaction.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yILzYnMdklXvXQFI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/transaction/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::yILzYnMdklXvXQFI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.subscriptions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@listSubscriptions',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@listSubscriptions',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.subscriptions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.stop.subscription' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/subscriptions/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.stop.subscription',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plans',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plan/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plan/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plan/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/finance/plan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hMlgRDr6tnOMH2q7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/plan/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::hMlgRDr6tnOMH2q7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/prepaid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/prepaid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/prepaid/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/prepaid/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/prepaid/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/finance/prepaid/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ncBBhbHVJlY7VXt9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/prepaid/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ncBBhbHVJlY7VXt9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/promocodes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/finance/promocodes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/finance/promocodes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/referral/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.settings.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/{order_id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@paymentShow',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@paymentShow',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/payouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payouts',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payouts',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/payouts/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsShow',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsShow',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/referral/payouts/{id}/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/payouts/{id}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsCancel',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsCancel',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts.decline' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/referral/payouts/{id}/decline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsDecline',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsDecline',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts.decline',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.top' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/top',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@topReferrers',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@topReferrers',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.top',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvoiceController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.invoice.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvoiceController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvoiceController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.invoice.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSettingController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSettingController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSettingController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSettingController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.settings.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.support',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/support/{ticket_id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.support.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.response' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/support/response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportController@response',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportController@response',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.support.response',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G0t9tNM1CiDKRjQq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/support/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::G0t9tNM1CiDKRjQq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.system' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/sytem',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@system',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@system',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.system',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.systemShow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/system/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@systemShow',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@systemShow',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.systemShow',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.markAllRead' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/mark-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@markAllRead',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@markAllRead',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.markAllRead',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.deleteAll' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/delete-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@deleteAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@deleteAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.deleteAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K0xeb8kXhCYPuYjz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notifications/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::K0xeb8kXhCYPuYjz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.global' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/global',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\GlobalController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\GlobalController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.global',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.global.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/global',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\GlobalController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\GlobalController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.global.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.backup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/backup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.backup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.backup.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/backup/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.backup.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.backup.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/backup/{file_name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@download',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@download',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.backup.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.backup.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/backup/{file_name}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.backup.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.smtp.test' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/smtp/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@test',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@test',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.smtp.test',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.smtp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.smtp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.smtp.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.smtp.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.registration' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\RegistrationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\RegistrationController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.registration',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.registration.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\RegistrationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\RegistrationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.registration.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.oauth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/oauth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\OAuthController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\OAuthController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.oauth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.oauth.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/oauth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\OAuthController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\OAuthController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.oauth.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.remove' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/activation/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@remove',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.remove',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/activation/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.manual' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/activation/manual',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@showManualActivation',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@showManualActivation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.manual',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.manual.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/activation/manual',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@storeManualActivation',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@storeManualActivation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.manual.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.appearance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/appearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AppearanceController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AppearanceController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.appearance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.appearance.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/appearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AppearanceController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AppearanceController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.appearance.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.frontend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/frontend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.frontend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.frontend.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/frontend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.frontend.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.step' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/steps',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@showSteps',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@showSteps',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.step',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.step.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/steps/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@createSteps',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@createSteps',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.step.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.step.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/steps/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@storeSteps',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@storeSteps',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.step.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.step.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/steps/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@editSteps',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@editSteps',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.step.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.step.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/steps/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@updateSteps',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@updateSteps',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.step.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UObZE7xTv7npJ3Hx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/steps/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@deleteSteps',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@deleteSteps',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::UObZE7xTv7npJ3Hx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.tool' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/tools',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@showTools',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@showTools',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.tool',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.tool.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/tools/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@editTools',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@editTools',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.tool.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.tool.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/tools/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@updateTools',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@updateTools',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.tool.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.feature' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/features',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@showFeatures',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@showFeatures',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.feature',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.feature.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/features/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@createFeatures',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@createFeatures',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.feature.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.feature.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/features/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@storeFeatures',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@storeFeatures',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.feature.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.feature.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/features/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@editFeatures',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@editFeatures',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.feature.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.feature.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/features/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@updateFeatures',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@updateFeatures',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.feature.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iqmvvcrsCPZinHYn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/features/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@deleteFeatures',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendSectionController@deleteFeatures',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::iqmvvcrsCPZinHYn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/blogs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/blogs/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AUNVGZdx5DLsQ5dY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/blog/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::AUNVGZdx5DLsQ5dY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/faq/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/faqs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/faqs/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GI6J8OQ2tOoHjaRZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/faq/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::GI6J8OQ2tOoHjaRZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/review/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/reviews/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/reviews/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RBOg3y9y4EwDmQM3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/review/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::RBOg3y9y4EwDmQM3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.adsense' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/adsense',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.adsense',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.adsense.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/adsense/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.adsense.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.adsense.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/adsense/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.adsense.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.terms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.terms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@indexAbout',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@indexAbout',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.terms.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.terms.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.about.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@storeAbout',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@storeAbout',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.about.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.upgrade' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\UpgradeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\UpgradeController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.upgrade',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.upgrade.start' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\UpgradeController@upgrade',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\UpgradeController@upgrade',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.upgrade.start',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.clear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.clear',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.clear.cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/clear/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@cache',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@cache',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.clear.cache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.clear.symlink' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/clear/symlink',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@symlink',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@symlink',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.clear.symlink',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserDashboardController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserDashboardController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7GMKlEEQ8H3cZhB2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/dashboard/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserDashboardController@favorite',
        'controller' => 'App\\Http\\Controllers\\User\\UserDashboardController@favorite',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::7GMKlEEQ8H3cZhB2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::roZkSEPkFoGG2vLb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/dashboard/favoritecustom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserDashboardController@favoriteCustom',
        'controller' => 'App\\Http\\Controllers\\User\\UserDashboardController@favoriteCustom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::roZkSEPkFoGG2vLb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.templates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@index',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.templates',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UrHKDxncplwk8J96' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/original-template/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@generate',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@generate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::UrHKDxncplwk8J96',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GsaOCpEqRHQz6waT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/original-template/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@process',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::GsaOCpEqRHQz6waT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2gYGFsHis4xlsZUQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/custom-template/customGenerate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@customGenerate',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@customGenerate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::2gYGFsHis4xlsZUQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nxlHNjHoZneFeRg6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/custom-template/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@process',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::nxlHNjHoZneFeRg6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::srSqmlOZq3O16ZjN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@save',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@save',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::srSqmlOZq3O16ZjN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6CH00QLuDF1M2pOe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/original-template/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@favorite',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@favorite',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::6CH00QLuDF1M2pOe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nQDVADtJrROBFODw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/original-template/favoritecustom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@favoriteCustom',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@favoriteCustom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::nQDVADtJrROBFODw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::atmOD1gK3yCSOYmm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/custom-template/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@favoriteCustom',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@favoriteCustom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::atmOD1gK3yCSOYmm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MQaXP67XI4aqhTSm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/custom-template/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewCustomTemplate',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewCustomTemplate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::MQaXP67XI4aqhTSm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jctunh2jreFUS8JH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/original-template/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewOriginalTemplate',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewOriginalTemplate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Jctunh2jreFUS8JH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.images' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.images',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DP4I6AGq1oHBuUyj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/images/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@process',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::DP4I6AGq1oHBuUyj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hT8B0264wotPa7Gt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/images/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@view',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::hT8B0264wotPa7Gt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cPjdgvKZ77wW59ZI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/images/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::cPjdgvKZ77wW59ZI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.images.load' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/images/load',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@loadMore',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@loadMore',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.images.load',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.codex' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@index',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.codex',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uWZUc9McjxMoIj6O' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/code/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@process',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::uWZUc9McjxMoIj6O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1piSmKzL1SWeUrub' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/code/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@save',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@save',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::1piSmKzL1SWeUrub',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9rR8y9v956xmfWpE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/code/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@view',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::9rR8y9v956xmfWpE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WIzpzRLvJ1pfGoqb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/code/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::WIzpzRLvJ1pfGoqb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.chat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.chat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B4laeOh3txVpDdTZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@process',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::B4laeOh3txVpDdTZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SvWM3gvT7twOZrtC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@clear',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@clear',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::SvWM3gvT7twOZrtC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rYHCKKVEfhCFMXVA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@favorite',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@favorite',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::rYHCKKVEfhCFMXVA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pLILUHnM9k6BHuVr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chat/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@generateChat',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@generateChat',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::pLILUHnM9k6BHuVr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ixKbZlFebewog8Kc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/conversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@conversation',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@conversation',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ixKbZlFebewog8Kc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E7dm2xqA2Cy9YLxJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@history',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@history',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::E7dm2xqA2Cy9YLxJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1uvNU6bvTePJ59DM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/rename',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@rename',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@rename',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::1uvNU6bvTePJ59DM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jsrYK8kl03u50OYM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::jsrYK8kl03u50OYM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qd7x4B4tgXeFVUQu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chats/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@view',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Qd7x4B4tgXeFVUQu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.transcribe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/speech-to-text',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@index',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.transcribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dm3tHWYvHgZ3zP26' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/speech-to-text/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@process',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Dm3tHWYvHgZ3zP26',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y96wPYLc9yag6Qmn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/speech-to-text/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@save',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@save',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::y96wPYLc9yag6Qmn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wHTp44nP8dMjg82r' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/speech-to-text/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@view',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::wHTp44nP8dMjg82r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oq2IitydqmYPENwc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/speech-to-text/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::oq2IitydqmYPENwc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/text-to-speech',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@index',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover.synthesize' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/synthesize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@synthesize',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@synthesize',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover.synthesize',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover.listen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/listen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@listen',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@listen',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover.listen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UHkT1z6va1mM9x2Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/listen-row',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@listenRow',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@listenRow',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::UHkT1z6va1mM9x2Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/text-to-speech/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@show',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3ylB2ysfqWoYO08a' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/audio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@audio',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@audio',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::3ylB2ysfqWoYO08a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mFZCWTyjUBxNSGjt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::mFZCWTyjUBxNSGjt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8t9SWeKY7nGaavp1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@config',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@config',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::8t9SWeKY7nGaavp1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.wizard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/wizard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.wizard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TAZo6fONi0TvBvkl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wizard/generate/keywords',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@keywords',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@keywords',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::TAZo6fONi0TvBvkl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xgUqVI0f9RAuXS0u' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wizard/generate/ideas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@ideas',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@ideas',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::xgUqVI0f9RAuXS0u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EQSBgUsJ7bNA9Apr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wizard/generate/outlines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@outlines',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@outlines',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::EQSBgUsJ7bNA9Apr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b2Be6siRQDimU0Pg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wizard/generate/talking-points',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@talkingPoints',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@talkingPoints',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::b2Be6siRQDimU0Pg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9twpiRKhi73C4TIg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wizard/generate/images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@images',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@images',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::9twpiRKhi73C4TIg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tr4sL5Xpar2gabjZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wizard/generate/prepare',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@prepare',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@prepare',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::tr4sL5Xpar2gabjZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Japit5znobQyuooK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/wizard/generate/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@process',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Japit5znobQyuooK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mGgvhshGayxUTlzj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/wizard/generate/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ArticleWizardController@clear',
        'controller' => 'App\\Http\\Controllers\\User\\ArticleWizardController@clear',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::mGgvhshGayxUTlzj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.vision' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/vision',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VisionController@index',
        'controller' => 'App\\Http\\Controllers\\User\\VisionController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.vision',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5qyhiEGJxl6A8ikn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/vision/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VisionController@process',
        'controller' => 'App\\Http\\Controllers\\User\\VisionController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::5qyhiEGJxl6A8ikn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f4lGaMEKEF6lldUB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/vision/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VisionController@clear',
        'controller' => 'App\\Http\\Controllers\\User\\VisionController@clear',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::f4lGaMEKEF6lldUB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::30240LmQirFqeduG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/vision/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VisionController@generateChat',
        'controller' => 'App\\Http\\Controllers\\User\\VisionController@generateChat',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::30240LmQirFqeduG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sNWqmSEqOfEqow8E' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/vision/conversation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VisionController@conversation',
        'controller' => 'App\\Http\\Controllers\\User\\VisionController@conversation',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::sNWqmSEqOfEqow8E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::URekckWqszwUJGwU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/vision/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VisionController@history',
        'controller' => 'App\\Http\\Controllers\\User\\VisionController@history',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::URekckWqszwUJGwU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NgPUUG8g6agN3UQ7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/vision/rename',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VisionController@rename',
        'controller' => 'App\\Http\\Controllers\\User\\VisionController@rename',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::NgPUUG8g6agN3UQ7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ndcLrgsW3Ixvxe44' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/vision/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VisionController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\VisionController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ndcLrgsW3Ixvxe44',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@index',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IWjoebfO4diwjKqf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@store',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::IWjoebfO4diwjKqf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.images' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@images',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@images',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.images',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5RvY1pNgtUJ3qoPZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/images/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@showImage',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@showImage',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::5RvY1pNgtUJ3qoPZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.codes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@codes',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@codes',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.codes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.voiceovers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/voiceovers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@voiceovers',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@voiceovers',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.voiceovers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.transcripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/transcripts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@transcripts',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@transcripts',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.transcripts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2lcEoJWvCPAwsDlM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/result/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::2lcEoJWvCPAwsDlM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cGh5wxELRkMzYdrh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/result/code/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@deleteCode',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@deleteCode',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::cGh5wxELRkMzYdrh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fsuvBF6Zo5z2eDr4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/result/voiceover/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@deleteVoiceover',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@deleteVoiceover',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::fsuvBF6Zo5z2eDr4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pbiGukwtDkRaNSlb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/result/transcript/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@deleteTranscript',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@deleteTranscript',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::pbiGukwtDkRaNSlb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/result/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@show',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.code.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/result/code/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@showCode',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@showCode',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.code.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.voiceover.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/result/voiceover/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@showVoiceover',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@showVoiceover',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.voiceover.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.transcript.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/result/transcript/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@showTranscript',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@showTranscript',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.transcript.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/workbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@index',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DuQRqmAMmXBH9h7Z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/workbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@store',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::DuQRqmAMmXBH9h7Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZrDe9aMUit8egjqz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/workbook/result/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ZrDe9aMUit8egjqz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks.change' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/workbook/change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@change',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@change',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/workbook/result/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@show',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/workbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@update',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/workbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@destroy',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@destroy',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/security/password/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@update',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security.2fa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/security/2fa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@google',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@google',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security.2fa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security.2fa.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/security/2fa/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@activate2FA',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@activate2FA',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security.2fa.activate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security.2fa.deactivate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/security/2fa/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@deactivate2FA',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@deactivate2FA',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security.2fa.deactivate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.project' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@updateProject',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@updateProject',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.project',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@edit',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.defaults' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/edit/defaults',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@editDefaults',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@editDefaults',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.defaults',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/edit/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@showDelete',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@showDelete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.api' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/api/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@showAPI',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@showAPI',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.api',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.api.store' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile/api/store/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@storeAPI',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@storeAPI',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.api.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.delete.account' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/edit/delete/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@accountDelete',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@accountDelete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.delete.account',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.update.defaults' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile/update/defaults/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@updateDefaults',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@updateDefaults',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.update.defaults',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.team' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@index',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.team',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.team.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/team/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@listUsers',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@listUsers',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.team.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.team.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@store',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.team.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.team.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/team/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@create',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@create',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.team.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.team.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/team/{user}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@show',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.team.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.team.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/team/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@edit',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@edit',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.team.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.team.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/team/{user}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@update',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.team.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1NZLFp0i2bdV3raE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/team/leave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@leave',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@leave',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::1NZLFp0i2bdV3raE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m4Iz5G9BnZHKteGQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/team/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TeamController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\TeamController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::m4Iz5G9BnZHKteGQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dmlqDeGrlxuyrsDv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/purchases/subscriptions/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::dmlqDeGrlxuyrsDv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.purchases' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@index',
        'controller' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.purchases',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.purchases.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/purchases/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@show',
        'controller' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.purchases.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.purchases.subscriptions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/purchases/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@subscriptions',
        'controller' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@subscriptions',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.purchases.subscriptions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.plans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/pricing/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PlanController@index',
        'controller' => 'App\\Http\\Controllers\\User\\PlanController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.plans',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.plan.subscribe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/pricing/plan/subscription/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
          5 => 'unsubscribed',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PlanController@subscribe',
        'controller' => 'App\\Http\\Controllers\\User\\PlanController@subscribe',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.plan.subscribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.prepaid.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/pricing/plan/one-time',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PlanController@checkout',
        'controller' => 'App\\Http\\Controllers\\User\\PlanController@checkout',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.prepaid.checkout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W5bULYpZkWbuY6bl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/pay/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@pay',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@pay',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::W5bULYpZkWbuY6bl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.pay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/pay/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
          5 => 'unsubscribed',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@pay',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@pay',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.pay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SxgOfnTCS5eeeM6v' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/pay/one-time/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@payPrePaid',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@payPrePaid',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::SxgOfnTCS5eeeM6v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.pay.prepaid' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/pay/one-time/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@payPrePaid',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@payPrePaid',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.pay.prepaid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.approved.razorpay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/approved/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approvedRazorpayPrepaid',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approvedRazorpayPrepaid',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.approved.razorpay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.approved.midtrans' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/approved/midtrans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@midtransSuccess',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@midtransSuccess',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.approved.midtrans',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.approved.iyzico' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/approved/iyzico',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@iyzicoSuccess',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@iyzicoSuccess',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.approved.iyzico',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.approved.braintree' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/approved/braintree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@braintreeSuccess',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@braintreeSuccess',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.approved.braintree',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fzQdwu7CRFSc132F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/approved/paddle',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@paddleSuccess',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@paddleSuccess',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::fzQdwu7CRFSc132F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.approved' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/approved',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approved',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approved',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.approved',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.cancelled' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/cancelled',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@cancelled',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@cancelled',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.cancelled',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.subscription.razorpay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/subscription/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approvedRazorpaySubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approvedRazorpaySubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.subscription.razorpay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.subscription.flutterwave' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/subscription/flutterwave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approvedFlutterwaveSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approvedFlutterwaveSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.subscription.flutterwave',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.subscription.stripe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/subscription/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approvedStripeSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approvedStripeSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.subscription.stripe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.subscription.approved' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/subscription/approved',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approvedSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approvedSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.subscription.approved',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.subscription.cancelled' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/subscription/cancelled',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
          5 => 'unsubscribed',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@cancelledSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@cancelledSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.subscription.cancelled',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.stripe.process' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/stripe/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Services\\StripeService@processStripe',
        'controller' => 'App\\Services\\StripeService@processStripe',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.stripe.process',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.stripe.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/stripe/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Services\\StripeService@processCancel',
        'controller' => 'App\\Services\\StripeService@processCancel',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.stripe.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.promocodes.prepaid' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/pay/promocode/prepaid/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PromocodeController@applyPromocodesPrepaid',
        'controller' => 'App\\Http\\Controllers\\User\\PromocodeController@applyPromocodesPrepaid',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.promocodes.prepaid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.promocodes.subscription' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/pay/promocode/subscription/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PromocodeController@applyPromocodesSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PromocodeController@applyPromocodesSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.promocodes.subscription',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/referral/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@store',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.gateway' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/gateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@gateway',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@gateway',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.gateway',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.gateway.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/referral/gateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@gatewayStore',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@gatewayStore',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.gateway.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/payouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payouts',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payouts',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/referral/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@email',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@email',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/payouts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsCreate',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsCreate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/referral/payouts/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsStore',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsStore',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.referrals' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@referrals',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@referrals',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.referrals',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/payouts/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsShow',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsShow',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/payouts/{id}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsCancel',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsCancel',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.decline' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/referral/payouts/{id}/decline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsDecline',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsDecline',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.decline',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/invoice/{order_id}/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@generatePaymentInvoice',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@generatePaymentInvoice',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.invoice.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/invoice/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@showPaymentInvoice',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@showPaymentInvoice',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.invoice.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.invoice.transfer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/invoice/{order_id}/transfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@bankTransferPaymentInvoice',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@bankTransferPaymentInvoice',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.invoice.transfer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@store',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vs9pww8hZreL0JVT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::vs9pww8hZreL0JVT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.response' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support/response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@response',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@response',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support.response',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@create',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@create',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support/{ticket_id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@show',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notification/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@show',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VSBGruHI71oTcuMB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/notification/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::VSBGruHI71oTcuMB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications.markAllRead' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notifications/mark-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@markAllRead',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@markAllRead',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications.markAllRead',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications.deleteAll' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notifications/delete-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@deleteAll',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@deleteAll',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications.deleteAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications.mark' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/notifications/mark-as-read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@markNotification',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@markNotification',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications.mark',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'user/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SearchController@index',
        'controller' => 'App\\Http\\Controllers\\User\\SearchController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
