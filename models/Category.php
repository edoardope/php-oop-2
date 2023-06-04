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

    public function productIcon()
    {
        if ($this->productType == 'food') {
            return '<i class="fa-sharp fa-solid fa-bowl-food"></i>';
        } else if ($this->productType == 'cuccia') {
            return '<i class="fa-solid fa-bed-front"></i>';
        }
    }
}
?>