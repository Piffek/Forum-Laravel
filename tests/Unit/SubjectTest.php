<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\SubjectServices;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\CategoriesController;

class SubjectTest extends TestCase
{
	public function testAddNewSubject()
	{
		$data = [
			'name' 		=> 'test2',
			'email'		=> 'test2@kwak.az.pl',
			'password'	=> bcrypt('test2'),
			'randomKey' => '123',
			'id_categories' => '1',
			'subject' => 'test', 
			'body' => 'testBody'
		];
		$subject = new SubjectServices();
		$subject->howAddDataToDB($data);
	}
}
