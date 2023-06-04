<?php
include __DIR__ . '/../models/Animal.php';
include __DIR__ . '/../models/Category.php';
include __DIR__ . '/../models/Product.php';

$Products = [
    $a = new product('https://arcaplanet.vtexassets.com/arquivos/ids/270797-1800-1800/Monge-All-Breeds-Adult-Salmone-e-Riso-12Kg.jpg?v=1772301264&quality=1&width=1800&height=1800', '48,98', true, 'Monge All Breeds Adult Salmone e Riso', new Animal('dog', 'adult'), new category('food', 'crocchette')),
    $b = new product('https://arcaplanet.vtexassets.com/arquivos/ids/271838-1800-1800/400.jpg?v=1772301904&quality=1&width=1800&height=1800', '3,99', true, 'Monge Sterilised ricco di Pollo', new Animal('cat', 'adult'), new category('food', 'crocchette')),
    $c = new product('https://arcaplanet.vtexassets.com/arquivos/ids/257859-1800-1800/stuzzy-monoprotein-agnello-.jpg?v=1772305030&quality=1&width=1800&height=1800', '4,49', true, 'Stuzzy Dog Monoproteico Lattina', new Animal('dog', 'adult'), new category('food', 'umido')),
    $d = new product('https://arcaplanet.vtexassets.com/arquivos/ids/266561-1800-1800/felix-le-ghiottonerie-multipack-80x85g.jpg?v=1772304998&quality=1&width=1800&height=1800', '28,99', true, 'Felix Le Ghiottonerie Multipack 80X85G', new Animal('cat', 'adult'), new category('food', 'umido')),
    $e = new product('https://arcaplanet.vtexassets.com/arquivos/ids/275501-1800-1800/luna-e-teo-cuccia-angolare-colore-natural.jpg?v=1768090851&quality=1&width=1800&height=1800', '79,90', true, 'Cuccia per Cane Angolare in Similpelle Natural', new Animal('dog', 'all age'), new category('cuccia', 'morbida')),
    $f = new product('https://arcaplanet.vtexassets.com/arquivos/ids/265737-1800-1800/220273_PHO_PRO_DOG_CLIP_36352-1.jpg?v=1771228351&quality=1&width=1800&height=1800', '39,90', true, 'Cuccia Casetta Igloo in Sisal', new Animal('cat', 'all age'), new category('cuccia', 'casetta')),

]
    ?>