<?php

Kirby::plugin(
    'omz13/whatever',
    [
    'root'     => dirname(__FILE__, 1),
    'fields' => [
      'whatever' => [
        'props' => [
          'message' => function (string $message) {
              return $message;
          }
        ]
      ]
    ]
    ]
);
