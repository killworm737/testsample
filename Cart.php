<?php
use PHPUnit\Framework\TestCase;

class Cart
{
    public function round_val()    
    {
        $decimal = $_SESSION['decimal'];
        return round($value,$decimal);
    }
}
