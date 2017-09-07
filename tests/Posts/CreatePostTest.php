<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreatePostTest extends TestCase
{
	use DatabaseTransactions;

	public function testCreatePost()
	{	
		$user = factory(\App\User::class)->create();

		$this->actingAs($user)
			 ->visit('/')
			 ->type('Dummy Post', 'content')
			 ->press('Post')
			 ->seeInDatabase('posts', ['content' => 'Dummy Post']);
	}

	public function testCreateEmptyPost()
	{ 
		$user = factory(\App\User::class)->create();

		$this->actingAs($user)
			 ->visit('/')
			 ->press('Post')
			 ->see('The content field is required');
	}
}