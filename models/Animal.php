<?php
class Animal
{
    public $spece;
    public $taglia;

    function __construct($spece, $taglia)
    {
        $this->spece = $spece;
        $this->taglia = $taglia;
    }
}
?>