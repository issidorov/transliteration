<?php

namespace issidorov\transliteration;

use Behat\Transliterator\Transliterator;

class Translit
{
    public static function text($text)
    {
        return Transliterator::utf8ToAscii($text);
    }
    
    public static function filename($filename)
    {
        $filename = Translit::text($filename);
        
        $filename = preg_replace('/[^a-z\.\d]/i', ' ', $filename);
        
        $filename = trim($filename);
        $filename = preg_replace('/\s+/', ' ', $filename);
        $filename = preg_replace('/\s\./', '.', $filename);
        $filename = preg_replace('/\.+/', '.', $filename);

        $filename = preg_replace('/\s/', '-', $filename);

        return $filename;
    }
}

