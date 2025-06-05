<?php

/**
 * Month class.
 * Provides functionality for getting month names by their number.
 */
class Month {
    
    /**
     * Returns month name by its number (1-12)
     * 
     * @param int $number Month number (1-12)
     * @return string Month name
     */
    public function getNameByNumber($number) {
        $months = array(
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
        );
        
        return isset($months[$number]) ? $months[$number] : '';
    }
}