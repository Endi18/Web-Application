<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="style_index.css">
    <link rel="icon" type="image/png" href="./images/restaurant_logoo.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <script src="js_index.js">

    </script>

    <title>Cherry Restaurant</title>
</head>

<body>
    <?php include "header_user.php"; ?>


    <div class="slider">
        <figure>
            <div class="figure_div">
                <h2 class="figure_text1">Welcome to Cherry!<br>Bon Appetit!</h2>
                <img class="carousel_images" id="carousel1" src="./Images/photo12.png">
            </div>
            <div class="figure_div">
                <img class="carousel_images" src="./Images/photo15.png">
            </div>
            <div class="figure_div">
                <img class="carousel_images" src="./Images/photo3.png">
            </div>
            <div class="figure_div">
                <img class="carousel_images" src="./Images/photo6.png">
            </div>
            <div class="figure_div">
                <img class="carousel_images" src="./Images/photo16.png">
            </div>
        </figure>

    </div>

    <div class="quote">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <img class="img_chef" src="./Images/chef.png" width="100%">
                </div>

                <div class="col-md-6">
                    <h1 class="chef_text">Our Chef</h1>
                    <blockquote>"Good restaurant design is about achieving equilibrium between the food, service, and
                        design
                        - in effect, telling a complete story." </blockquote>
                    <h2>-----------------------------------------</h2>
                    <h5 class="chef_text_h5">Nicolas Appert</h2>
                </div>

            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="containercount">
                        <i class="fas fa-utensils"></i>
                        <span class="num" data-val="400">000</span>
                        <span class="text">Meals Delivered</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="containercount">
                        <i class="fas fa-smile-beam"></i>
                        <span class="num" data-val="340">000</span>
                        <span class="text">Happy Customers</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="containercount">
                        <i class="fas fa-list"></i>
                        <span class="num" data-val="225">000</span>
                        <span class="text">Menu Items</span>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="containercount">
                        <i class="fas fa-star"></i>
                        <span class="num" data-val="280">000</span>
                        <span class="text">Five Stars</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

	<?php include "footer.php"; ?>    

</body>

</html>