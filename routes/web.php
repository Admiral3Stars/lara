<?php

Route::get('/hello/{name}', function(string $name) { return "Hello, {$name}"; });

Route::get('/calc/{a}/{b}', function(int $a, int $b) { return "{$a} * {$b} = " . $a * $b; });
