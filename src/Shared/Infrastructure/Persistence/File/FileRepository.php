<?php

namespace App\Shared\Infrastructure\Persistence\File;


use Symfony\Component\Filesystem\Exception\FileNotFoundException;

abstract class FileRepository
{
    public function loadFile(string $path, string $fileName): string
    {
        $data = file_get_contents($path . DIRECTORY_SEPARATOR . $fileName);

        if (!$data)
        {
            throw new FileNotFoundException('Problems loading file in path: ' . $path . DIRECTORY_SEPARATOR . $fileName);
        }

        return $data;
    }
}