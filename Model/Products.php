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
        // Aggiunta Exception, che stampa questo messaggio in caso di prezzo = o < a 0
        if ($this->price <= 0) {
            throw new Exception("Prezzo non valido");
        }
        return $this->price;
    }

    public function getName()
    {
        if (empty($this->name)) {
            throw new Exception("Prodotto senza nome");
        }
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
