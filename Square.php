<?php
require_once __DIR__ . '/Rectangle.php';

class Square extends Rectangle {

    public function __construct($height) {
        $this->height = $height;
    }

    public function perimeter() {
        $perimeter = $this->height * 4;

        return $perimeter;
    }

    public function area() {
        return $this->height * $this->height;
    }

}

?>