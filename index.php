<?php
include __DIR__ . '/database/database.php';
// echo $Products[1]->imgUrl
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animal shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <section class="container-fluid p-5">
        <div class="row justify-content-around p-5">
            <?php foreach ($Products as $product) { ?>
                <div class="card mb-5" style="width: 18rem;">
                    <img src="<?php echo $product->imgUrl ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <?php echo $product->name ?>
                            </li>
                            <li class="list-group-item">
                                price:
                                <?php echo $product->prezzo . '$' ?>
                            </li>
                            <li class="list-group-item">
                                for:
                                <?php echo $product->animal->spece . ' ' . $product->animal->taglia ?>
                            </li>

                            <li class="list-group-item">
                                <?php echo $product->category->productIcon() . ' ' . $product->category->secondCategory ?>
                            </li>

                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>