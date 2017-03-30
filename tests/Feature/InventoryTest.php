<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InventoryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAPICanCreateNewInventory()
    {
        $response = $this->call('POST', '/api/v1/inventories', [
        	'name' => "Inventory 1",
        	'description' => "This is a new inventory"
        ]);

        $this->assertEquals(201, $response->status());

        $content = json_decode($response->getContent());
        $this->assertEquals("Inventory 1", $content->name);
        $this->assertEquals("This is a new inventory", $content->description);
    }

  //   public function testAPIWillNotAcceptBadData() {
		// $response = $this->post('/api/v1/inventories', [
		// 	'description' => "This is a new inventory"
		// ]);
  //   }
}
