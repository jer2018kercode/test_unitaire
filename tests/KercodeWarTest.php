<?php
require('./src/KercodeWar.php');

use PHPUnit\Framework\TestCase;

class KercodeWarTest extends TestCase {
    const WEEKDAYS = [
        1 =>'Sunday',
        2 =>'Monday',
        3 =>'Tuesday',
        4 =>'Wednesday',
        5 =>'Thursday',
        6 =>'Friday',
        7 =>'Saturday',
    ];
    
    const FRENCH_WEEKDAYS = [
        1 => 'Dimanche',
        2 => 'Lundi',
        3 => 'Mardi',
        4 => 'Mercredi',
        5 => 'Jeudi',
        6 => 'Vendredi',
        7 => 'Samedi'
      ];

    public function testWeekdays() {
        foreach (self::WEEKDAYS as $key=> $value) {
            $this->assertEquals($value, KercodeWar::weekday($key));
        }
    }

    public function testWithInvalidParam() {
        $this->assertEquals(
                'Wrong, please enter a number between 1 and 7',
                KercodeWar::weekday('plop')
        );
    }

    public function testNumberisWeekend() {
        foreach(self::WEEKDAYS as $key=> $value) {
            $res = ($value === 'Sunday' || $value === 'Saturday');
            $this->assertEquals($res, KercodeWar::isWeekend($key));
        }
    }        
}