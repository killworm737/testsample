<?php
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public $cart;
    public function setUp(){
        $this -> cart = new Cart();
    }    
    public function test_one()    
    {
        $value = 100.11111;
        $round_val = $this->cart->round_val($value);
        $this->assertEmpty($round_val);
    }
   
    public function tearDown(){
        //測試結束時結束物件
        $this -> cart = null;
    }    
}
