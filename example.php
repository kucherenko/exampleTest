<?php

/**
 * Example class.
 *
 */
class Example {

    public function fx($x) {
        return $x + 1;
    }

    public function fy($y) {
        return $y + 5;
    }

    public function Z($x, $y)
    {
        return $this->fx($x) + $this->fy($y);
    }

    public function __toString() {
        echo "example object";
    }
    
    public function __construct() {
    
    }

}
