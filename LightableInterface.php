<?php


interface LightableInterface
{

    public function switchOn(bool $light): bool;

    public function switchOff(bool $light): bool;
}