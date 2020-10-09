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
        $parts = explode(".", $title);
        if (!isset($parts[4])) {
            throw new UndefinedOffsetException();
        }
        return $parts[4];
    }
}