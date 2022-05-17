<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d5ef93086f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style_category.css">
    <title>Headsets</title>
</head>
<body>
    <?php include("../views/layouts/header.php"); ?>
    <?php include("../views/layouts/menu.php"); ?>
    <div class="content">
        <div class="featured-photo">
            <img class="img-featured" src="https://picsum.photos/550/350" alt="Producto destacado">
        </div>
        <p class="featured-text">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste, quis aperiam quos, magnam totam aut quia explicabo minus laborum perferendis expedita vero! Quia earum, debitis impedit atque maxime vero ipsum?
        <br> <br>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione nulla distinctio eaque doloremque aut eius neque eligendi sapiente dicta, cupiditate, quia beatae ullam pariatur in amet aliquid tempora! Possimus, vel!
        <br> <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex veniam culpa dicta aliquid doloribus! Excepturi expedita magni est fuga voluptatem minima eveniet, cumque illum sapiente odio quas sunt, in asperiores?
        </p>
        <?php include("../views/layouts/ad.php"); ?>
    </div>
    <h2 class="title-products">PRODUCTOS</h2>
    <div class="list-products">
        <!-- <form class="product">
            <a href="../views/g300s.php"><img class="img-product" src="https://picsum.photos/300/150" alt="Imagen producto lista"></a>
            <div class="product-description">
                <a href="../views/g300s.php"><h2 class="name-product">Titulo del producto 1</h2></a>
                <ul class="list-feature">
                    <li class="featureitem">Caracteristíca 1</li>
                    <li class="featureitem">Caracteristíca 2</li>
                    <li class="featureitem">Caracteristíca 3</li>
                </ul>
            </div>
            <div class="price">
                <h1>12000</h1>
                <button><h3>AGREGAR AL CARRITO</h3></button>
            </div>
        </form> -->
        <!-- <form action="#" class="product">
            <a href="../views/g300s.php"><img class="img-product" src="https://picsum.photos/300/150" alt="Imagen producto lista"></a>
            <div class="product-description">
                <a href="../views/g300s.php"><h2 class="name-product">Titulo del producto 2</h2></a>
                <ul class="list-feature">
                    <li class="featureitem">Caracteristíca 1</li>
                    <li class="featureitem">Caracteristíca 2</li>
                    <li class="featureitem">Caracteristíca 3</li>
                </ul>
            </div>
            <div class="price">
                <h1>12000</h1>
                <button><h3>AGREGAR AL CARRITO</h3></button>
            </div>
        </form>
        <form action="#" class="product">
            <a href="../views/g300s.php"><img class="img-product" src="https://picsum.photos/300/150" alt="Imagen producto lista"></a>
            <div class="product-description">
                <a href="../views/g300s.php"><h2 class="name-product">Titulo del producto 3</h2></a>
                <ul class="list-feature">
                    <li class="featureitem">Caracteristíca 1</li>
                    <li class="featureitem">Caracteristíca 2</li>
                    <li class="featureitem">Caracteristíca 3</li>
                </ul>
            </div>
            <div class="price">
                <h1>12</h1>
                <button><h3>AGREGAR AL CARRITO</h3></button>
            </div>
        </form>
        <form action="#" class="product">
            <a href="../views/g300s.php"><img class="img-product" src="https://picsum.photos/300/150" alt="Imagen producto lista"></a>
            <div class="product-description">
                <a href="../views/g300s.php"><h2 class="name-product">Titulo del producto 4</h2></a>
                <ul class="list-feature">
                    <li class="featureitem">Caracteristíca 1</li>
                    <li class="featureitem">Caracteristíca 2</li>
                    <li class="featureitem">Caracteristíca 3</li>
                </ul>
            </div>
            <div class="price">
                <h1>12</h1>
                <button><h3>AGREGAR AL CARRITO</h3></button>
            </div>
        </form> -->
    </div>
    <!-- Formulario para base de datos -->
    <form action="../controllers/headsetsController.php" method="POST" id="form-product" class="form-container">
                    <!-- Se le puso text por el nombre de la columna de la db -->
                    <input type="hidden" name="_method" value="POST">
                    <label for="titulo">Titulo:</label>
                    <textarea name="titulo"></textarea>
                    <input type="hidden" name="_method" value="POST">
                    <label for="feature1">Caracteristíca 1:</label>
                    <textarea name="feature1"></textarea>
                    <input type="hidden" name="_method" value="POST">
                    <label for="feature2">Caracteristíca 2:</label>
                    <textarea name="feature2"></textarea>
                    <input type="hidden" name="_method" value="POST">
                    <label for="feature3">Caracteristíca 3:</label>
                    <textarea name="feature3"></textarea>
                    <input type="hidden" name="_method" value="POST">
                    <label for="price">Precio:</label>
                    <textarea name="price"></textarea>
                    <input type="hidden" name="_method" value="POST">
                    <label for="image">Imagen:</label>
                    <textarea name="image"></textarea>
                    <input type="hidden" name="_method" value="POST">
                    <label for="href">Href:</label>
                    <textarea name="href"></textarea>
                    <input type="submit" value="Agregar">
    </form>

    <div class="footer">
        <p class="methods-text">Aceptamos:</p>
        <img src="../11.png" alt="VISA">
        <img src="../12.png" alt="MASTERCARD">
        <img src="../13.png" alt="AMERICAN EXPRESS">
        <p class="contact-information">2022 DaebakGaming <br> <a class="email-webmaster" href="mailto:alanhernandezsand@gmail.com">Webmaster:alanhernandezsand@gmail.com</a></p>
    </div>
    
    <?php include("../views/layouts/modal_headsets.php"); include("../views/layouts/modal_delete_headsets.php");?>
    <script src="../assets/js/script_headsets.js"></script>
</body>
</html>