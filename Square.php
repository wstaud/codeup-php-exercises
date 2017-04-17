<?php
require_once __DIR__ . '/Rectangle.php';

class Square extends Rectangle {

    public function __construct($height) {
        parent::__construct($height, $height);
    }

    public function perimeter() {
        $perimeter = $this->getHeight() * 4;

        return $perimeter;
    }

    public function area() {
        return $this->getHeight()* $this->getHeight();
    }

}

?>
