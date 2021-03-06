<?php

return [
    'acceptable' => [
        'file'  => [
            'application/pdf'          => 'pdf',
            'application/octet-stream' => '',
            'application/zip'          => 'zip',
            'text/plain'               => 'txt',
        ],
        'image' => [
            'image/png'  => 'png',
            'image/jpeg' => 'jpg',
            'image/gif'  => 'gif',
        ],
    ],
    'categories' => [
        'article-cover-image' => [
            'name'       => 'article-cover-image',
            'type'       => 'image',
            'region'     => env('AWS_IMAGE_REGION'),
            'buckets'    => [
                env('AWS_IMAGE_BUCKET'),
            ],
            'size'       => [1440, 0],
            'thumbnails' => [
                [400, 300],
                [800, 600],
                [640, 640],  // Instagram
                [735, 1102], // Pinterest
                [1024, 512], // Twitter Card
                [1280, 628], // Facebook OGP
                [1440, 900],
            ],
            'seedPrefix' => 'article-cover',
            'format'     => 'png',
        ],
        'user-profile-image'  => [
            'name'       => 'user-profile-image',
            'type'       => 'image',
            'region'     => env('AWS_IMAGE_REGION'),
            'buckets'    => [
                env('AWS_IMAGE_BUCKET'),
            ],
            'size'       => [328, 328],
            'thumbnails' => [
            ],
            'seedPrefix' => 'user-profile',
            'format'     => 'png',
        ],
        'article-image'       => [
            'name'       => 'article-image',
            'type'       => 'image',
            'region'     => env('AWS_IMAGE_REGION'),
            'buckets'    => [
                env('AWS_IMAGE_BUCKET'),
            ],
            'size'       => [1440, 0],
            'thumbnails' => [
                [400, 300],
            ],
            'seedPrefix' => 'article',
            'format'     => 'png',
        ],
        'ogp-image'           => [
            'name'       => 'ogp-image',
            'type'       => 'image',
            'region'     => env('AWS_IMAGE_REGION'),
            'buckets'    => [
                env('AWS_IMAGE_BUCKET'),
            ],
            'size'       => [1280, 628],
            'thumbnails' => [
            ],
            'seedPrefix' => 'ogp',
            'format'     => 'png',
        ],
        'twitter-card-image'  => [
            'name'       => 'twitter-card-image',
            'type'       => 'image',
            'region'     => env('AWS_IMAGE_REGION'),
            'buckets'    => [
                env('AWS_IMAGE_BUCKET'),
            ],
            'size'       => [1024, 512],
            'thumbnails' => [
            ],
            'seedPrefix' => 'twitter-card',
            'format'     => 'png',
        ],
    ],
];
