<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body style="background-color: #112D4E;">
    <center>
        <div class="container d-flex justify-content-center flex-column">
            <div class="dropdown mb-5 mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#3F72AF;">
                    Egypt Cities
                </button>
                <ul class="dropdown-menu">
                    <?php $Cities =  getCities();
                    foreach ($Cities as $city) {
                    ?>
                        <li><a class="dropdown-item" href="?lon=<?php echo $city["coord"]["lon"]; ?>&lat=<?php echo $city["coord"]["lat"]; ?>"><?php echo $city["name"]; ?></a></li>
                    <?php
                    } ?>

                </ul>
            </div>
            <div>

                <?php $weather = getWeather();

                ?>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-title">
                            <h2><?php echo $weather["name"]; ?></h2>
                            <h3><?php echo date("Y/m/d") ?></h3>

                            <h6 class="card-subtitle mb-2 text-muted"> Temperature: <?php echo $weather["main"]["temp"]; ?></h6>
                        </div>
                        <h6 class="card-subtitle mb-2 text-muted"> humidity: <?php echo $weather["main"]["humidity"]; ?></h6>
                        <h6 class="card-subtitle mb-2 text-muted"> wind: <?php echo $weather["wind"]["speed"]; ?></h6>
                        <div>
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-weather/ilu1.webp" width="100px">
                        </div>
                    </div>
                </div>

            </div>




        </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>