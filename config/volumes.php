<?php

if ($_SERVER["APP_SECRETS"]) {
    $secrets = json_decode(file_get_contents($_SERVER["APP_SECRETS"]), true);

    return [
        'production' => [
            'static' => [
                'keyId' => $secrets['LINODE']['S3']['ACCESS']['KEY'],
                'secret' => $secrets['LINODE']['S3']['SECRET']
            ],
            'collectionImages' => [
                'keyId' => $secrets['LINODE']['S3']['ACCESS']['KEY'],
                'secret' => $secrets['LINODE']['S3']['SECRET']
            ],
        ],
    ];
}