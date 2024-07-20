<?php

namespace App\GraphQL\Queries;

final class Greetings
{
    public function __invoke($_, array $args)
    {
        return 'Hello, Parvej';
    }
}
