<?php

class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        return 'I am a human. My name is :'. $this->name;
    }
}