<?php
    function store($value){
        file_put_contents ( "numbers.txt" ,  $value,FILE_APPEND);
    }

    function read(){
        return file_get_contents("numbers.txt");
    }

    function clear(){
        file_put_contents ( "numbers.txt" ,  "");
    }