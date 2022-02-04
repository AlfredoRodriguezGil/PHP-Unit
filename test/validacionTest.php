<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{
    public function test_email(){
        $email = Validate::email('i@rimorsoft.com');
        $this->assertTrue($email);

        $email = Validate::email('i@@rimorsoft.com');
        $this->assertFalse($email);
    }

    public function test_url(){
        $url = Validate::url('http://platzi.com');
        $this->assertTrue($url);

    }

    public function test_password(){
        $password = Validate::password('123456');
        $this->assertTrue($password);

    }
}