<?php

namespace App\SuspiciousReadingDetector\Infrastructure\Persistence\File;

use App\Shared\Infrastructure\Persistence\File\FileRepository;

class CsvFile implements FileMaanage
{
    public function loadFile(string $path, string $fileName): string
    {
        $data = file_get_contents($path . DIRECTORY_SEPARATOR . $fileName);
        if (!$data) throw new \FileNotFoundException('Problems loading file in path: ' . $path . DIRECTORY_SEPARATOR . $fileName);

        return $data;
    }
}