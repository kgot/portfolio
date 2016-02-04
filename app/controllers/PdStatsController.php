<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pd;

class PdStatsController extends Controller {
    
    private $Pd;
    
    public function __construct() {
        $Pd = new Pd();
    }

    public function getData() {
         
        $pdstacks = new SplFixedArray(4);

//        foreach ($pdstacks as $pdstack) {
//            foreach ($skill_levels as $skill_level) {
//                foreach ($zerk_levels as $zerk_level) {
//                    $pdstats = calculateSpeed($skill_level, $zerk_level);
//                }
//            }
//        }

        return View::make('pdstats', array('pdstats' => $pdstacks));
    }

}
