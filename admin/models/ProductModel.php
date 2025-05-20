<?php

class ProductModel{
  private $conn;

  public function __construct() {
    $this->conn = connectDB();
  }

  public function get_list(){
          $sql = "SELECT id, category_id, name, description, price, stock_quantity, image_url FROM products";
      $data = $this->conn->prepare($sql);
      $data->execute();
      return $data->fetchAll(PDO::FETCH_ASSOC);
  }
}