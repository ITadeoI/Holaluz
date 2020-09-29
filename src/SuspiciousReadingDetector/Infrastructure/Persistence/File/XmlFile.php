<?php

namespace App\SuspiciousReadingDetector\Infrastructure\Persistence\File;


use App\Controller\File\SuspiciousReadingDetector\FileManage;
use SimpleXMLElement;

class XmlFile implements FileManage
{
    public function loadFile(string $path, string $fileName): string
    {
        $data = new SimpleXMLElement($path . DIRECTORY_SEPARATOR . $fileName, 0 , true);
        if (!$data) throw new \FileNotFoundException('Problems loading file in path: ' . $path . DIRECTORY_SEPARATOR . $fileName);

        return $data;
    }
}