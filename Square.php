<?php

class Square extends Rectangle {

    public function perimeter() {
        $perimeter = $this->height * 4;

        return $perimeter;
    }

}

?>