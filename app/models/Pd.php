<?php

namespace App\Models;

class Pd {

    private $skill_levels = ['0' => 0,
                            '1' => 10,
                            '2' => 15,
                            '3' => 20,
                            '4' => 25,
                            '5' => 30,
                            '6' => 35,
                            '7' => 40,
                            '8' => 45,
                            '9' => 50,
                            '10' => 55];
    
    private $zerk_levels = ['1' => 10,
                            '2' => 15,
                            '3' => 20,
                            '4' => 25,
                            '5' => 30,
                            '6' => 40,
                            '7' => 50,
                            '8' => 70];

    public function getSkill_levels() {
        return $this->skill_levels;
    }

    public function getZerk_levels() {
        return $this->zerk_levels;
    }

    public function setSkill_levels($skill_levels) {
        $this->skill_levels = $skill_levels;
    }

    public function setZerk_levels($zerk_levels) {
        $this->zerk_levels = $zerk_levels;
    }

}
