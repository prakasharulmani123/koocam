<?php
$whitelist = array('127.0.0.1', '::1');
if (in_array($_SERVER['REMOTE_ADDR'], $whitelist)) {
    $mailsendby = 'smtp';
} else {
    $mailsendby = 'phpmail';
}
if (strpos($_SERVER['SERVER_NAME'], 'localhost') !== false) {
    $fb_app_id = '1072911946066926';
    $fb_sec_id = '9aee56441691bd738496f84d8daeb261';
    
    $google_app_id = '675517855666-ndue37r1cdhn72es30r1kkk545sm8ooi.apps.googleusercontent.com';
    $google_sec_id = 'ahTkPog54J_DcMGI5NU-dSwk';
}

// this contains the application parameters that can be maintained via GUI
// Custom Params Value
return array(
    //Global Settings
    'EMAILLAYOUT' => 'file', // file(file concept) or db(db_concept)
    'EMAILTEMPLATE' => '/mailtemplate/',
    'MAILSENDBY' => $mailsendby,
    //EMAIL Settings
    'SMTPHOST' => 'smtp.gmail.com',
    'SMTPPORT' => '465', // Port: 465 or 587
    'SMTPUSERNAME' => 'marudhuofficial@gmail.com',
    'SMTPPASS' => 'ninja12345',
    'SMTPAUTH' => true, // Auth : true or false
    'SMTPSECURE' => 'ssl', // Secure :tls or ssl
    'NOREPLYMAIL' => 'noreply@koocam.com',
    'CONTACTMAIL' => 'contact@koocam.com',
    'JS_SHORT_DATE_FORMAT' => 'yy-mm-dd',
    'PHP_SHORT_DATE_FORMAT' => 'Y-m-d',

    //Product Settings
    'SITEBASEURL' => 'http://wipocos.byethost16.com',
    'UPLOAD_DIR' => 'uploads',
    'EMAILHEADERIMAGE' => '/themes/adminlte/img/fa-globe.png',

    'PAGE_SIZE' => '10',

    'SITENAME' => 'Koocam',
    'EMAILHEADERIMAGE' => '',
    
    'FB_APP_ID' => $fb_app_id,
    'FB_SECRET_ID' => $fb_sec_id,
    'GOOGLE_APP_ID' => $google_app_id,
    'GOOGLE_SECRET_ID' => $google_sec_id,
);