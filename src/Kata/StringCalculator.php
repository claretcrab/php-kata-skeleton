<?php

namespace Kata;

/**
 * Class StringCalculator
 * @package Kata
 */
class StringCalculator{
    public function add( $param ) {
        if ( empty($param) )
            return 0;

        $separator = '\\\n,';
        $definedSeparator = strpos($param, '//');

        if ( $definedSeparator === 0 ) {
            $separator .= $param[2];
            $param = substr($param, 5);
        }

        return array_sum( preg_split('/['.$separator.']+/', $param) );
    }
}