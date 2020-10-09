<?php
namespace App\K2;

use App\Exceptions\UndefinedOffsetException;

class ExtractPartOfStringAdvanced {
    /**
     * @param $title
     * @return mixed
     * @throws UndefinedOffsetException
     */
    public static function handle($title) {
        $parts = explode(".", $title);
        if (!isset($parts[2])) {
            throw new UndefinedOffsetException();
        }

        $result = $parts[2];

        $result = str_replace('BE','BERN',$result);
        $result = str_replace('ZH','ZÜRICH',$result);
        $result = str_replace('1','',$result);
        $result = str_replace('-','',$result);
        $result = str_replace('Mo','-Montag',$result);

        return $result;
    }
}