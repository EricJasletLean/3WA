<?php

use PHPUnit\Framework\TestCase;

use Cart\StorageMySQL;
use Cart\Product;

class StorageMySQLTest extends TestCase
{
    protected $storageMySQL;
    protected $pdo;
    protected $productOne;
      
    public function setUp(): void
    {
        $this->productOne = new Product('apple', 100);
        $this->pdo = new PDO("sqlite:".__DIR__."/fruittest.sql");
        $this->storageMySQL = new StorageMySQL($this->pdo);
    }

    public function testStorageMySQLTestStorageMySQLTestClass()
    {
        $this->assertInstanceOf(StorageMySQL::class, $this->storageMySQL);
    }

    public function testTotal()
    {
        $this->assertEquals(31.3 , $this->storageMySQL->total());
    }

    public function testsetValue()
    {
        $this->storageMySQL->setValue('apple', 10.5);

        $this->assertEquals(41.8 , $this->storageMySQL->total());
    }

    public function testReset()
    {
        $this->storageMySQL->reset();
        $this->assertEquals(0, $this->storageMySQL->total());
    }

    public function testGetStorage()
    {
        $storage = [
                'apple' => 10.5,
                'raspberry' => 13,
        ];
        $this->storageMySQL->reset();
        $this->storageMySQL->setValue('apple', 10.5);
        $this->storageMySQL->setValue('raspberry', 13);
        $this->assertEquals($storage, $this->storageMySQL->getStorage());

    }

    // restore
}