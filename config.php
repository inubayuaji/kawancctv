<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Jigsaw',
    'description' => 'Website description.',
    'collections' => [
        'posts' => [
            'path' => 'blog/{filename}',
            'sort' => 'date'
        ]
    ],
];
