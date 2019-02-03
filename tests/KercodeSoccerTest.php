<?php
use Symfony\Component\Yaml\Yaml;
require('./src/KercodeSoccer.php');

class SoccerTest {
    const POINTS = [
        1 => 3,
        2 => 0,
        3 => 1
    ];

    public function testSoccer() {
        foreach (self::POINTS as $key=> $value) {
            $this->assertEquals($value, KercodeWar::sport($key));
        }
    }
}