<?php

declare(strict_types=1);
//for generateNextOrderNumber function call to respect type hint strictly (so they will not be cast to another type and will be returned as integer)

namespace App\Services;

use App\Models\Order;

class OrderService
{
    public function submitOrder(array $data): Order
    {
        return Order::create(array_merge($data, [
            'order_number' => $this->generateNextOrderNumber(),
        ]));
    }

    private function generateNextOrderNumber(): int
    {
        $lastOrder = Order::latest()->first();
        $orderNumber = empty($lastOrder) ? date('Ymd') . 1 : $lastOrder->order_number + 1;

        return (int)$orderNumber;
    }
}
