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
        try {
            if ($this->productType == 'food') {
                return '<i class="fa-sharp fa-solid fa-bowl-food"></i>';
            } else if ($this->productType == 'cuccia') {
                return '<i class="fa-solid fa-bed-front"></i>';
            } else {
                throw new Exception("Prodotto non valido");
            }
        } catch (Exception $e) {
            // Handle the exception
            echo "c'è stato un errore nel assegnare l'icona al prodotto: " . $e->getMessage();
        }
    }
}
?>