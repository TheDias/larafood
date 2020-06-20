<?php

namespace App\Repositories\Contracts;

interface OrderRepositoryInterface
{
  public function createNewOrder(
    string $identify,
    float $total,
    string $status,
    int $tenant_id,
    string $comment = '',
    $clientId = '',
    $tableId = ''
  );

  public function getOrderByIdentify(string $identify);
  public function registerProductsByOrder(int $orderId, array $products);
  public function getOrdersByClientId(int $idClient);
}
