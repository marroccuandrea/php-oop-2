<?php

class Products
{
    public $name;
    public $price;
    public $type;
    public $image;

    public function __construct(string $_name, float $_price, string $_type, string $_image)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->type = $_type;
        $this->image = $_image;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getImage()
    {
        return $this->image;
    }
}
