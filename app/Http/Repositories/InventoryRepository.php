<?php

namespace App\Http\Repositories;

use namespace App\Contracts\RepositoryInterface;
use App\Inventory;

/**
* InventoryRepository
*/
class InventoryRepository implements RepositoryInterface
{
	public function create($data) {
		return Inventory::create($data);
	}
}