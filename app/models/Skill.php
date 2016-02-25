<?php

namespace App\Models;

class Skill {
    
    private $name;
    
    private $title;
    
    private $description;
    
    public function __construct($name, $title, $description) {
        $this->name = $name;
        $this->title = $title;
        $this->description = $description;
    }
    
    public function get_name() {
        return $this->name;
    }

    public function get_title() {
        return $this->title;
    }

    public function get_description() {
        return $this->description;
    }

    public function set_name($name) {
        $this->name = $name;
    }

    public function set_title($title) {
        $this->title = $title;
    }

    public function set_description($description) {
        $this->description = $description;
    }
}

