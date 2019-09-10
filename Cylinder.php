<?php
include_once "Circel.php";

class Cylinder extends Circel
{
    public $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    public function toString()
    {
        echo "Cylinder Radius: " . $this->getColor() . ", Color: " . $this->getColor() . ", Height: "
            . $this->getHeight();
    }

}