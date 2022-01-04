<?php
class Gift{
    public string $Name;
    public float $Price;
    public string $Color;

    public function __construct($name, $price, $color)
    {
        $this->Name = $name;
        $this->Price = $price;
        $this->Color = $color;
    }
}