<?php

return [
    'baseUrl' => 'https://michaeljdennis.com/',
    'production' => true,
    'githubUrl' => 'https://github.com/michaeljdennis',
    'twitterUrl' => 'https://twitter.com/michaeljdennis',
    'googlePlusUrl' => 'https://plus.google.com/u/0/+MichaelDennis',
    'linkedInUrl' => 'https://www.linkedin.com/in/michaeljdennis',
    'keybaseUrl' => 'https://keybase.io/michaeljdennis/key.asc',
    'collections' => [
        'posts' => [
            'path' => '{date|Y-m-d}/{slug}',
            'author' => 'Michael Dennis',
            'sort' => ['-date', '-time'],
        ]
    ],
    'pageTitle' => function($page) {
        $title = 'Michael Dennis | michaeljdennis';

        if ($page->title) {
            $title = $page->title . ' | ' . $title;
        }

        return $title;
    },
    'pageDescription' => function($page) {
        $description = 'The life and times of Michael Dennis. michaeljdennis.';

        if ($page->title) {
            $description = $page->title;
        }

        return $description;
    },
];
