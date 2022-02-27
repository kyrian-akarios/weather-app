<?php

use PHPUnit\Framework\TestCase;

class MailTest extends TestCase{
    public function testMail(){
        $to = "mohammed4685@outlook.com";
        $message = "Test message!";
        $subject = "Test Subject";
        $this->assertTrue(mail($to, $subject, $message));
    }
}