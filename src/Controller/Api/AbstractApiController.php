<?php


namespace App\Controller\Api;


use Symfony\Component\HttpFoundation\Request;

abstract class AbstractApiController
{
    public function getContentValue(Request $request, string $key = null)
    {
        $content = json_decode($request->getContent(), true);

        if (!is_array($content))
        {
            return '';
        }

        if ($key === null)
        {
            return $content;
        }

        return array_key_exists($key, $content) ? $content[$key] : '';
    }
}