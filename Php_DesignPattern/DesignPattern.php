<?php

class Product
{
    public int $id;
    public string $designation;
    public string $univers;
    public int $price;
}

class ProductRepository
{
    public function save(Product $product)
    {
        $sqlQuery = "INSERT INTO product (ID, DESTINATION, UNIVERS, PRICE) 
                        VALUES ( ". $id .", ". $destination .", ". $univers .", ". $price. " )";

        sqlQuery($sqlQuery, $cnx);
    }
}

class Database
{
    public function sqlQuery(string $sqlQuery, \PDO $connexion)
    {
        $stmt = $connexion->createStatement($sqlQuery);
        $stmt->execute();
    }
}

?>