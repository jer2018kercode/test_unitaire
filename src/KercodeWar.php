<?php
use Symfony\Component\Yaml\Yaml;

class KercodeWar {
    public static function weekday($number, $lang='en') {
        if ($lang === 'fr') {
            $content = Yaml::parse(file_get_contents("fr.yml"));
        } else {
            $content = Yaml::parse(file_get_contents("en.yml"));
        }
        if ($number >= 1 && $number <= 7) {
            return $content['weekdays']['days'][$number - 1];
        } else {
            return $content['weekdays']['error'];
        }
    }
        
    public static function isWeekend($number) {
        if($number === 1) {
            return true;
        }
        if($number === 7) {
            return true;
        } else {
            return false;
          }
    }   
}

