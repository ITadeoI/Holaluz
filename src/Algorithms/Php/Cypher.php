<?php

namespace App\Algorithms\Php;


class Cypher
{
    private const LETTERS = ['A', 'a', 'B', 'b', 'E', 'e', 'I', 'i', 'O', 'o', 'S', 's'];
    private const CYPHER = [4, 4, 8, 8, 3, 3, 1, 1, 0, 0, 6, 6];

    public function cypherString(string $message)
    {
        return str_replace(self::LETTERS,self::CYPHER , $message);
    }
}