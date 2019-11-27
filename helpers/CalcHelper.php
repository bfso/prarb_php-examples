<?php
    function division($value1, $value2){
        if($value2 == 0){
            return 'Not Allowed';
        }
        return $value1 / $value2;
    }

    function sum($value1, $value2){
        return $value1 + $value2;
    }