<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterUserTest extends TestCase
{
	use DatabaseTransactions;

	public function testRegisterUser()
	{
		$this->visit('/')
			 ->click('Register')
			 ->type('Mathew Hany', 'name')
			 ->type('mathew.hanybb@gmail.com', 'email')
			 ->type('password', 'password')
			 ->type('password', 'password_confirmation')
			 ->press('Register')
			 ->seeInDatabase('users', ['name' => 'Mathew Hany', 'email' => 'mathew.hanybb@gmail.com']);
	}

	public function testRegisterEmptyUser()
	{
		$this->visit('/')
			 ->click('Register')
			 ->press('Register')
			 ->see('The name field is required')
			 ->see('The email field is required')
			 ->see('The password field is required');
	}
}