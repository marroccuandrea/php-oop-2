<?php
require_once 'Products.php';

class Food extends Products
{
    use Eco;
    public $weight;
    public $taste;

    public function __construct(string $_name, float $_price, string $_type, string $_image, string $_taste, float $_weight)
    {
        parent::__construct($_name, $_price, $_type, $_image);
        $this->weight = $_weight;
        $this->taste = $_taste;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function getTaste()
    {
        return $this->taste;
    }
}

trait Eco
{
    public function getEco()
    {
        return "Prodotti ecosostenibili";
    }
}
