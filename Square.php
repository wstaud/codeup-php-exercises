<?php
require_once __DIR__ . '/Rectangle.php';

class Square extends Rectangle {

    public function perimeter() {
        $perimeter = $this->height * 4;

        return $perimeter;
    }

}

?>