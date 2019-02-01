<?php 

class KercodeWar
{
    public static function weekday($number)
    {
        if ($number === 1) {
            return 'Sunday';
        }
        if ($number === 2) {
            return 'Monday';
        }
        if ($number === 3) {
            return 'Tuesday';
        }
        if ($number === 4) {
            return 'Wednesday';
        }
        if ($number === 5) {
            return 'Thursday';
        }
        if ($number === 6) {
            return 'Friday';
        }
        if ($number === 7) {
            return 'Saturday';
        } else {
            return 'Wrong, please enter a number between 1 and 7';
        }
    }
}