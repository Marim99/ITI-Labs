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
        color: red !important;
    }
</style>

<body>

    <div class="container d-flex  justify-content-center align-items-center h-100">
        <div class="card mb-3 text-bg-dark p-3" style="width: 100%; ">
            <h1>Add Product 🚀</h1>
            <form method="post">
                <div class="form-group mt-1">
                    <label for="productCode">Product code <small>*</small></label>
                    <input type="text" class="form-control" id="productCode" name="PRODUCT_code" aria-describedby="emailHelp" placeholder="Enter Product code" required>
                </div>
                <div class="form-group mt-1">
                    <label for="productName">Product Name <small>*</small></label>
                    <input type="text" class="form-control" id="productName" name="product_name" aria-describedby="emailHelp" placeholder="Enter Product Name" required>
                </div>
                <div class="form-group mt-1">
                    <label for="productPrice">Price <small>*</small></label>
                    <input type="number" class="form-control" id="productPrice" name="list_price" placeholder="product Price" required>
                </div>
                <div class="form-group mt-1">
                    <label for="units_in_stock">units_in_stock <small>*</small></label>
                    <input type="number" class="form-control" id="units_in_stock" name="units_in_stock" placeholder="units_in_stock" required>
                </div>
                <div class="form-group mt-1">
                    <label for="reorder_level">reorder_level</label>
                    <input type="number" class="form-control" id="reorder_level" name="reorder_level" placeholder="reorder_level">
                </div>
                <div class="form-group mt-1">
                    <label for="category">category</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="category">
                </div>
                <div class="form-group mt-1">
                    <label for="Rating">Rating</label>
                    <input type="float" class="form-control" id="Rating" name="rating" placeholder="Rating">
                </div>

                <button type="submit" class="btn btn-primary mt-3">ADD</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>