<?php

namespace App\K2;

use App\Exceptions\UndefinedOffsetException;

class ExtractPartOfStringBasic {
    /**
     * @param $title
     * @return mixed
     * @throws UndefinedOffsetException
     */
    public static function handle($title) {
        // Separate a string by the delimiter "."
        // Return the fifth element
        // ("a.b.c.d.e.f" → "e")
        // In case the is no fifth element; return a UndefinedOffsetException
        $parts = explode(".", $title);
        if (!isset($parts[4])) {
            throw new UndefinedOffsetException();
        }
        return $parts[4];
    }
}