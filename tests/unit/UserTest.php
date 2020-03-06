<?php

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testThatWeCanGetTheFirstName()
    {
        $user = new User();
        
        $user->setFirstName('Johannes');
        
        $this->assertEquals($user->getFirstName(), 'Johannes');
    }
    
    public function testThatWeCanGetTheLastName()
    {
        $user = new User();
        
        $user->setLastName('Boskabouter');
        
        $this->assertEquals($user->getLastName(), 'Boskabouter');
    }
    
    public function testFullNameIsReturned()
    {
        $user = new User();
        
        $user->setFirstName('Johannes');
        $user->setLastName('Boskabouter');
        
        $this->assertEquals($user->getFullName(), 'Johannes Boskabouter');
    }
    
    public function testFirstAndLastNameAreTrimmed()
    {
        $user = new User();
        $user->setFirstName('Johannes     ');
        $user->setLastName('       Boskabouter');
        
        $this->assertEquals($user->getFirstName(), 'Johannes');
        $this->assertEquals($user->getLastName(), 'Boskabouter');
    }
}