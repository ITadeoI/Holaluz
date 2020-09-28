<?php

namespace App\Algorithms\Php;


class Matrices
{
    public function getMatrixMax($matrix)
    {
        $highest = [];
        foreach ($matrix as $array) {
            $highest[] = max($array);
        }

        return max($highest);
    }
}