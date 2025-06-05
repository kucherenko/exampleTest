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

/**
 * Month class.
 */
class Month {
    
    public function __construct() {
    
    }
    
    /**
     * Get the name of the month by its number
     * 
     * @param int $monthNumber The month number (1-12)
     * @return string The name of the month
     */
    public function getNameByNumber($monthNumber) {
        $months = [
            1 => 'Январь',
            2 => 'Февраль',
            3 => 'Март',
            4 => 'Апрель',
            5 => 'Май',
            6 => 'Июнь',
            7 => 'Июль',
            8 => 'Август',
            9 => 'Сентябрь',
            10 => 'Октябрь',
            11 => 'Ноябрь',
            12 => 'Декабрь',
        ];
        
        return isset($months[$monthNumber]) ? $months[$monthNumber] : '';
    }
}
