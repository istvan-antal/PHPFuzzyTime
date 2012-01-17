<?php
class FuzzyTime {
    public static function format($diff) {
        $breakpoints = array(
            1 => array('second', 'seconds'),
            60 => array('minute', 'minutes'),
            3600 => array('hour', 'hours'),
            86400 => array('day', 'days'),
        );
        
        $text = '';
        
        $keys = array_keys($breakpoints);
        
        $prev_value = 0;
        
        do {
            $value = array_pop($keys);
            $unit = $breakpoints[$value];
            
            $units = $diff;
            if ($prev_value) {
                $units %= $prev_value;
            }
            
            $units /= $value;
            $units = floor(abs($units));
            
            if ($units) {
                $text .= $units.' '.$unit[($units > 1) ? 1 : 0].' ';
            }
            
            $prev_value = $value;
            
        } while (count($keys));
        
        if ($diff < 0) {
            $text .= 'before';
        } else {
            $text .= 'ago';
        }
        
        return $text;
    }
}