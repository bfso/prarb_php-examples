<?php

namespace App\P1;

class Post3 {
    public static function handle($size) {
        $treeWith = $size;
        for($i = 0 ; $i <= $size ; $i++){
            $spaceWith = ($size - $treeWith) / 2;
            if($spaceWith * 2 >= $size){
                break;
            }
            $leaves = self::getChars($treeWith, "#");
            $spaces = self::getChars($spaceWith, "*");

            $tree[] = $spaces.$leaves.$spaces;
            $treeWith -= 2;
        }
        return array_reverse($tree);
    }

    public static function getChars($with, $char){
        $leaves = "";
        for($x = 1 ; $x <= $with ; $x++){
            $leaves .= $char;
        }
        return $leaves;
    }
}