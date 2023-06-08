<?php
include __DIR__ . '/traits.php';
class product
{
    use priceAvv;

    public $imgUrl;
    public $name;
    public $animal;
    public $category;

    function __construct($imgUrl, $prezzo, $avviable, $name, Animal $animal, Category $category)
    {
        $this->imgUrl = $imgUrl;
        $this->prezzo = $prezzo;
        $this->avviable = $avviable;
        $this->name = $name;
        $this->animal = $animal;
        $this->category = $category;
    }
}
?>