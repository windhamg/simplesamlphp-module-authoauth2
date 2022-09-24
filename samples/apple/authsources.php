<?php

$config = array(

    'appleTest' => array(
        // Must install correct provider with: composer require patrickbussmann/oauth2-apple
        'authoauth2:OAuth2',
        'attributePrefix' => 'apple.',
        // Improve log lines
        'label' => 'apple',
        // Logging http traffic causes the provider to see a blank body when it tries to read json response
        // since the body stream doesn't get reset correctly
        // 'logHttpTraffic' => true,
        'logIdTokenJson' => true,
        'providerClass' => 'League\OAuth2\Client\Provider\Apple',
        'teamId'            => 'N827WEDQK9', // // 1A234BFK46 https://developer.apple.com/account/#/membership/ (Team ID)
        'clientId' => 'net.athena-institute.idpproxy.apple',
        'redirectUri' => 'https://apple.test.idpproxy.athena-institute.net/simplesaml/module.php/authoauth2/linkback.php',
        'keyFileId' => '98K57TKZGJ', // 1ABC6523AA https://developer.apple.com/account/resources/authkeys/list (Key ID)
        'keyFilePath' => __DIR__ . '/../cert/apple.p8', // __DIR__ . '/AuthKey_1ABC6523AA.p8' -> Download key above. p8 is same format at pem
    ),

    // This is a authentication source which handles admin authentication.
    'admin' => array(
        // The default is to use core:AdminPassword, but it can be replaced with
        // any authentication source.

        'core:AdminPassword',
    ),

);

