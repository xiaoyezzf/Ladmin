<?php

namespace App\Repositories;

use App\Models\Order;

class OrderRepository {

	public function store($data)
	{
		return Order::create($data);
	}


	public function findOrderByTransId($transaction_id)
	{
		$result = Order::find($transaction_id);

		return $result;
	}
}