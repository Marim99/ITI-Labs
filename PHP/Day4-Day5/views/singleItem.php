<?php
#$id = (isset($_GET['id'])) ? (int)$_GET['id'] : 0;
$id = trim($_SERVER['REQUEST_URI'], '/Day4-Day5/index.php/products');
$current_item = $DB->get_item_by_id($id)[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>

</head>
<style>
    body {
        height: 100vh;
        background-color: #DFDFE0;
        opacity: 0.8;
        background-image: radial-gradient(#444cf7 0.4px, #DFDFE0 0.4px);
        background-size: 8px 8px;
    }

    small {
        color: #eee !important;
    }
</style>

<body>

    <div class="container d-flex  justify-content-center align-items-center h-100">
        <div class="card mb-3 text-bg-dark" style="max-width: 750px; height: 400px;">
            <div class="row" style="height:100%;">
                <div class=" col-md-6">
                    <img src="../../images/<?php echo $current_item['photo'] ?>" class='img-fluid rounded-start' alt="..." style="height:100%;" />
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <?php
                        echo "<h5 class='card-title font-monospace'>" . $current_item['product_name'] . "</h5>";
                        echo "<small class='font-monospace'>" . $current_item['date'] . "</small>";
                        echo  "<p class='card-text font-monospace'>" . $current_item['product_code'] . "</p>";
                        echo "<p class='card-text font-monospace'><small > Price: " . $current_item['list_price'] . "</small></p>";
                        echo "<p class='font-monospace'> Units In Stock : " . $current_item['units_in_stock'] . "</p>";
                        echo "<p class='font-monospace'> Rating : " . $current_item['rating'];
                        for ($i = 0; $i < (int)$current_item['rating']; $i++) {
                            echo ' ⭐';
                        }
                        "</p>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>