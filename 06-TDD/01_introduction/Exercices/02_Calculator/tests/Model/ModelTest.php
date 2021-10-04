<?php

use PHPUnit\Framework\TestCase;

use App\Calculator;
use App\Model\Add;
use App\Model\Divisor;
use App\Model\Number;
use App\Model\NumberString;

class ModelTest Extends TestCase
{
    protected Add $add;
    protected Divisor $divisor;
    protected Number $a;
    protected Number $b;
    protected NumberString $r;

    public function setUp():void
    {
        $this->a = new Number(10.0);
        $this->b = new Number(2.0);
    }

    public function testAdd()
    {
        $this->r = new NumberString(12.0);
        $this->add = new Add();
        $this->assertEquals( $this->r, $this->add->add( $this->a, $this->b ) );
    }

    // public function testDivisor()
    // {
    //     $this->r = new NumberString(5.0);
    //     $this->divisor = new Divisor($this->a, $this->b );
    //     $this->assertEquals( $this->r, $this->divisor );
    // }

    // public function testExceptionDivisor()
    // {

    // }
}