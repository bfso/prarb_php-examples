<?php
namespace App\K2;

class MonthsInAnArrayWithAConstantErrorMessage {
    const ERROR_MESSAGE = "You have to pass a number from 1 to 12";
    public static function handle($monthNumber) {
        // Return the month based on a passed number
        //  e.g. if the monthNumber is 1 then return "January"

        // When the $monthNumber is bigger than 12 or smaller than 1 give back self::ERROR_MESSAGE
        // When the variable $monthNumber is not a integer give back self::ERROR_MESSAGE

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