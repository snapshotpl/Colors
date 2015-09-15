<?php

final class RgbModel
{
    private $red;
    private $green;
    private $blue;

    public function __construct(RgbModelColor $red, RgbModelColor $green, RgbModelColor $blue)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    public function getRed()
    {
        return $this->red;
    }

    public function getGreen()
    {
        return $this->green;
    }

    public function getBlue()
    {
        return $this->blue;
    }

    public function isEqual(RgbModel $object)
    {
        return $this->getRed()->isEqual($object->getRed())
           && $this->getGreen()->isEqual($object->getGreen())
           && $this->getBlue()->isEqual($object->getBlue());
    }

    public function mix(RgbModel $another)
    {
        $red = $this->getRed()->mix($another->getRed());
        $green = $this->getGreen()->mix($another->getGreen());
        $blue = $this->getBlue()->mix($another->getBlue());

        return new self($red, $green, $blue);
    }
}