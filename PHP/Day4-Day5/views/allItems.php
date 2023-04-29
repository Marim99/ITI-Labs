<?php
$current_index = isset($_GET["next"]) && is_numeric($_GET["next"]) ? (int)$_GET["next"] : 0;
$rows_number = $DB->get_number_of_rows('items');
$next_index = $current_index + __RECORDS_PER_PAGE__ <= $rows_number ? $current_index + __RECORDS_PER_PAGE__ : $current_index;
$prev_index = ($current_index - __RECORDS_PER_PAGE__ > 0) ? $current_index - __RECORDS_PER_PAGE__ : 0;
if (isset($_GET['search'])) {
    $searchValue = $_GET['search'];
    $items = $DB->search("product_name", $searchValue);
} else {
    $items = $DB->get_all_items_paginated(array(), $current_index);
}

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
</style>

<body>
    <div>
        <div class="container mt-5">
            <div class="md-form active-cyan active-cyan-2 mb-3">
                <form action="">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="search">
                    <input type="submit" style="display: none;">
                </form>
            </div>
            <table class="table table-striped table-light">
                <thead class="">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Code</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Units_In_Stock</th>
                        <th scope="col">category</th>
                        <th scope="col">Rating⭐</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($items as $item) {
                        echo "<tr>";
                        echo "<th scope='row'>" . $item["id"] . "</th>";
                        echo "<td>" . $item["product_code"] . "</td>";
                        echo "<td>" . $item["product_name"] . "</td>";
                        echo "<td>" . $item["list_price"] . "</td>";
                        echo "<td>" . $item["units_in_stock"] . "</td>";
                        echo "<td>" . $item["category"] . "</td>";
                        echo "<td>" . $item["rating"] . "</td>";
                        echo "<td ><a style='text-decoration: none;' href='" . $_SERVER['PHP_SELF'] . "/products/" . $item['id'] . "'>view</a></td>";
                        echo "<td style='cursor: pointer;'><a style='text-decoration: none;' href='" . $_SERVER['PHP_SELF'] . '/delete/' . $item['id'] . "'>🗑️</a></td>";
                        echo "</tr>";
                    }
                    ?>
            </table>
            <div class=" d-flex justify-content-between">
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group " role="group" aria-label="Third group">
                        <a href="<?php echo $_SERVER["PHP_SELF"] . "?next=" . $prev_index; ?>"> <button type="button" class="btn btn-dark ms-2">Prev</button></a>
                    </div>
                    <div class="btn-group" role="group" aria-label="Third group">
                        <a href="<?php echo $_SERVER["PHP_SELF"] . "?next=" . $next_index; ?>"> <button type="button" class="btn btn-dark ms-2">Next</button></a>
                    </div>

                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                    <a href="<?php echo $_SERVER["PHP_SELF"] . "/addProduct" ?>"><button type="button" class="btn btn-danger ms-2" style="float: right;">ADD</button></a>
                </div>
            </div>



        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
<?php
