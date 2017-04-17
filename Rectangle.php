<?php

class Rectangle {

    private $height;
    private $width;

    public function __construct($height, $width) {
        $this->setHeight($height);
        $this->setWidth($width);
    }

    protected function setHeight($height) {
        $this->height = $height;
    }

    protected function setWidth($width) {
        $this->width = $width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getWidth() {
        return $this->width;
    }

    public function area() { 
        $area = $this->getHeight() * $this->getWidth();

        return $area;
    }

    public function perimeter() {
        return ($this->getHeight() * 2) + ($this->getWidth() * 2);
    }

    
}

?>
