<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\CategoriesController;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testVariableCategoryController()
    {
    	$categories = new CategoriesController();
    	$id = '1';
    	$categories->ShowCategory($id);

    }
}
