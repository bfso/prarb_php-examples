<?php
namespace App\K2;

class MonthsInAnArrayWithAConstantErrorMessage {
    const ERROR_MESSAGE = "You have to pass a number from 1 to 12";
    public static function handle($monthNumber) {
        if($monthNumber < 1 || $monthNumber > 12){
            return self::ERROR_MESSAGE;
        }
        if(!is_numeric($monthNumber)){
            return self::ERROR_MESSAGE;
        }
        $months = [
                'January',
                'February',
                'March',
                'Avril',
                'May',
                'June',
                'July',
                'August',
                'September',
                'October',
                'November',
                'December',
        ];

        return $months[$monthNumber-1];
    }
}