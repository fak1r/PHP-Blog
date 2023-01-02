<?php
return (function() {
    $intGR0 = '[1-9]+\d*';
    $normURL = '[0-9aAzZ_-]+';
    $normDt = '\d{4}\-\d{2}\-\d{2}';
    return [
        [
            'test' => '/^\/?$/',    // \/? слеш в конце может быть или не быть
            'controller' => 'article/all'
        ],
        [
            'test' => '/^article\/add\/?$/',
            'controller' => 'article/add'
        ],
        [
            'test' => '/^contacts\/?$/',
            'controller' => 'contacts'
        ],
        [
            'test' => "/^article\/($intGR0)\/?$/",
            'controller' => 'article/article',
            'params' => ['id' => 1]
        ],
        [
            'test' => "/^article\/edit\/($intGR0)\/?$/",
            'controller' => 'article/edit',
            'params' => ['id' => 1]
        ],
        [
            'test' => "/^article\/delete\/($intGR0)\/?$/",
            'controller' => 'article/delete',
            'params' => ['id' => 1]
        ],
        [
            'test' => "/^cat\/($intGR0)\/?$/",
            'controller' => 'cats/cat',
            'params' => ['id' => 1]
        ],
        [
            'test' => "/^category\/all\/?$/",
            'controller' => 'cats/allcats',
            'params' => ['id' => 0]
        ],
        [
            'test' => "/^category\/add\/?$/",
            'controller' => 'cats/add',
            'params' => ['id' => 0]
        ],
        [
            'test' => "/^category\/edit\/($intGR0)\/?$/",
            'controller' => 'cats/edit',
            'params' => ['id' => 1]
        ],
        [
            'test' => "/^category\/delete\/($intGR0)\/?$/",
            'controller' => 'cats/delete',
            'params' => ['id' => 1]
        ],
        [
            'test' => "/^auth\/login\/?$/",
            'controller' => 'auth/login',
        ],
        [
            'test' => "/^auth\/logout\/?$/",
            'controller' => 'auth/logout',
        ],
        [
            'test' => "/^auth\/registration\/?$/",
            'controller' => 'auth/registration',
        ],
        [
            'test' => "/^logs\/?$/",
            'controller' => 'logs',
        ],
        [
            'test' => "/^logs\/($normDt\.txt\/?)$/",
            'controller' => 'logs',
            'params' => ['dt' => 1]
        ]
    ];
})();
