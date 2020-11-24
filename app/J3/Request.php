<?php

namespace App\J3;

class Request {
    public $x = 5;
    public $y = 5;

    public function __construct() {
        $this->x();
        $this->y();
    }

    private function x() {
        if (isset($_GET['x'])) {
            $this->x = $_GET['x'];
        }
    }

    private function y() {
        if (isset($_GET['y'])) {
            $this->y = $_GET['y'];
        }
    }
}