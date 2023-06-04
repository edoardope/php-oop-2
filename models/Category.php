<?php
class category
{
    public $productType;
    public $secondCategory;

    function __construct($productType, $secondCategory)
    {
        $this->productType = $productType;
        $this->secondCategory = $secondCategory;
    }
}
?>