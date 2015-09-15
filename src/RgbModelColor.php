<?php

final class RgbModelColor
{
    protected $value;

    public function __construct($value)
    {
        if (is_int($value) && $value >= 0 && $value <= 255) {
            $this->value = $value;
        }
        throw new InvalidArgumentException('Invalid color value');
    }

    public function getValue()
    {
        return $this->value;
    }

    public function __toString()
    {
        return (string) $this->getValue();
    }

    public function isEqual(RgbModelColor $color)
    {
        return $this->getValue() === $color->getValue();
    }

    public function mix(RgbModelColor $b)
    {
        $value = (int) ($this->getValue() + $b->getValue()) / 2;

        return new self($value);
    }
}
