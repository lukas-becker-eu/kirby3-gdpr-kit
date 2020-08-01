<?php

return [
  'attr' => [
    'class'
  ],
  'html' => function($tag) {
    return '<a class="' . $tag->class . '" href="http://wikipedia.org">Wikipedia</a>';
  }
];
