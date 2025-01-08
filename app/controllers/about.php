<?php

$title = 'My Blog:: About';

$post = '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquam cum, deleniti dolorem dolores enim eum inventore
    laudantium nobis officia omnis quidem rerum sapiente sed similique soluta tempora, veniam vero.</p>
    <p>Alias aperiam architecto asperiores autem blanditiis, dicta dolores eligendi explicabo facere incidunt nam nulla porro quae quo
    tenetur voluptate voluptatem. Cumque excepturi itaque labore nobis quo. Aut corporis nisi veniam!</p>
    <p>Consectetur culpa doloribus ex fuga maxime quia quibusdam repellendus tempore unde vero. Animi autem blanditiis culpa, cum dicta
    dignissimos doloremque dolores excepturi hic itaque, laudantium mollitia tempora, vel veniam voluptatum?</p>';

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

require VIEWS . '/about.tpl.php';