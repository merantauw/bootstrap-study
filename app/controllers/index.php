<?php

/*require 'funcs.php';*/

$title = 'My blog :: Home';

$posts = [
    1 => [
        'title' => 'Title 1',
        'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content',
        'slug' => 'title-1',
    ],
    2 => [
        'title' => 'Title 2',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequuntur est hic, impedit porro tempore?',
        'slug' => 'title-2',
    ],
    3 => [
        'title' => 'Title 3',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur dignissimos ea hic iusto, modi quaerat tempore tenetur unde vitae. Accusamus commodi debitis nemo tempore. Aliquam dicta eius ex nihil quo!',
        'slug' => 'title-3',
    ],
    4 => [
        'title' => 'Title 4',
        'desc' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content',
        'slug' => 'title-4',
    ],
    5 => [
        'title' => 'Title 5',
        'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, minima.',
        'slug' => 'title-5',
    ],
];


$recent_posts = [
    1 => [
        'title' => 'An item',
        'slug' => lcfirst(str_replace(' ', '-', 'An item')),
    ],
    2 => [
        'title' => 'A second item',
        'slug' => lcfirst(str_replace(' ', '-', 'A second item')),
    ],
    3 => [
        'title' => 'A third item',
        'slug' => lcfirst(str_replace(' ', '-', 'A third item')),
    ],
    4 => [
        'title' => 'A fourth item',
        'slug' => lcfirst(str_replace(' ', '-', 'A fourth item')),
    ],
    5 => [
        'title' => 'And a fifth one',
        'slug' => lcfirst(str_replace(' ', '-', 'And a fifth one')),
    ],
];


require VIEWS . '/index.tpl.php';

