<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d5ef93086f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/style_category.css">
    <title>CD'S</title>
</head>
<body>
    <?php include("../views/layouts/header.php"); ?>
    <?php include("../views/layouts/menu.php"); ?>
    <div class="content">
        <div class="featured-photo">
            <img class="img-featured" src="../images/formulaoflove_2.png" alt="Producto destacado">
        </div>
        <p class="featured-text">
        En la categoría de CD’s encontraras una gran variedad de álbumes que te ofrecerán una increíble experiencia en al escuchar las canciones de tus artistas favoritos. <br> El producto destacado de esta semana es nada más y nada menos que el CD de Twice gracias al gran éxito que tuvo en los últimos días con The Feels además de que es su tercer álbum completo.
        </p>
        <?php include("../views/layouts/ad.php"); ?>
    </div>
    <h2 class="title-products">PRODUCTOS</h2>
    <div class="list-products">
        
    </div>
    <!-- Formulario para base de datos -->
    <?php
        // session_start();
        if($_SESSION["type"] !== "normal") {//Si no es normal
            echo  "<form action=\"../controllers/discosController.php\" method=\"POST\" id=\"form-product\" class=\"form-container\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"_method\" value=\"POST\">
            <input type=\"hidden\" name=\"_type\" value=\"discos\">
            <label for=\"titulo\">Titulo:</label>
            <textarea name=\"titulo\" required></textarea>
            <input type=\"hidden\" name=\"_method\" value=\"POST\">
            <label for=\"feature1\">Caracteristíca 1:</label>
            <textarea name=\"feature1\" required></textarea>
            <input type=\"hidden\" name=\"_method\" value=\"POST\">
            <label for=\"feature2\">Caracteristíca 2:</label>
            <textarea name=\"feature2\" required></textarea>
            <input type=\"hidden\" name=\"_method\" value=\"POST\">
            <label for=\"feature3\">Caracteristíca 3:</label>
            <textarea name=\"feature3\" required></textarea>
            <input type=\"hidden\" name=\"_method\" value=\"POST\">
            <label for=\"price\">Precio:</label>
            <textarea name=\"price\" required></textarea>
            <input type=\"hidden\" name=\"_method\" value=\"POST\">
            <label for=\"image\">Imagen:</label>
            <input type=\"file\" name=\"image\" required>
            <input type=\"submit\" value=\"Agregar\">
</form>";                
        }
    ?>

    <div class="footer">
        <p class="methods-text">Aceptamos:</p>
        <img src="../images/11.png" alt="VISA">
        <img src="../images/12.png" alt="MASTERCARD">
        <img src="../images/13.png" alt="AMERICAN EXPRESS">
        <p class="contact-information">2022 DaebakGaming <br> <a class="email-webmaster" href="mailto:alanhernandezsand@gmail.com">Webmaster:alanhernandezsand@gmail.com</a></p>
    </div>
    
    <?php include("../views/layouts/modal_discos.php"); include("../views/layouts/modal_delete_discos.php");?>
    <?php
        if($_SESSION["type"] !== "normal"){
            echo "<script src=\"../assets/js/script_discos.js\"></script>";//Admin
        }
        else{
            echo "<script src=\"../assets/js/script_discos_noadmin.js\"></script>";//No admin
        }
    ?>
</body>
</html>