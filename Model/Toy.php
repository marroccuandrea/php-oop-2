<?php
require_once 'Products.php';

class Toy extends Products
{
    public $material;
    public $size;

    function __construct(string $_name, float $_price, string $_type, string $_image, string $_material, float $_size)
    {
        parent::__construct($_name, $_price, $_type, $_image);
        $this->material = $_material;
        $this->size = $_size;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function getSize()
    {
        return $this->size;
    }
}
