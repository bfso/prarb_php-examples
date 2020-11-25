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
        // You need to extract some information out of a string
        // Here are the rules with the schema: ("Input string" → "Output string")
        // BE1 needs to be converted to BERN ("XO001.ARB1.BE1.HS20/21" → "BERN")
        // When there is a "-" between the city "BE" and a number "1". The minus must be removed first ("XO001.ARB1.BE-1.HS20/21" → "BERN")
        // Mo must be converted to "Montag" ("XO001.ARB1.BE-1-Mo.HS20/21" → "BERN-Montag")
        // When the number is higher than 1, the number must stay there ("XO001.ARB1.ZH2-Mo.HS20/21" → "ZÜRICH2-Montag")
        // ("XO001.ARB1.ZH5.HS20/21" → "ZÜRICH5")
        //
        // In case the is no third element; return a UndefinedOffsetException


    }
}