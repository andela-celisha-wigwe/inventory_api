<?php

namespace Tests;

use Artisan;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp() {
    	parent::setUp();

    	Artisan::call('migrate');

    	$this->truncateAll();
    }

    public function truncateAll() {
    	collect(['inventories'])->each(function ($table) {
    		\DB::table($table)->truncate();
    	});
    }
}
