<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_product.css">
    <title>G300s</title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <a href="index_logged_in.html"><img class="img-logo" src="10.png" alt="LOGO"></a>
        </div>
        <div class="cart-icon">
            <a href="cart.html"><img class="img-cart" src="8.png" alt="Imagen carrito"></a>
        </div>
        <!-- <div class="profile-icon">
            <a href="login.html"><img class="img-profile" src="9.png" alt="Imagen perfil"></a>
        </div> -->
        <div class="logout-icon">
            <a href="index.html"><img class="img-logout" src="salida.png" alt="Imagen cierre sesion"></a>
        </div>
    </div>
    <div class="navigation-bar">
        <div class="boton-menu">
            <button id="boton">Menú</button>
        </div>
        <ul class="navigation-list">
            <li class="nav-item"> <a class="nav-link" href="index.html">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="headsets.html">Headsets</a></li>
            <li class="nav-item"><a class="nav-link" href="mouse_teclados.html">Mouse y teclados</a></li>
            <li class="nav-item"><a class="nav-link" href="microfonos.html">Microfonos</a></li>
            <li class="nav-item"><a class="nav-link" href="lightstick.html">Lightstick</a></li>
            <li class="nav-item"><a class="nav-link" href="discos.html">CD's</a></li>
            <li class="nav-item"><a class="nav-link" href="photocards.html">Photocards</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="product-photo">
            <img class="img-producto" src="https://picsum.photos/550/350" alt="Producto">
        </div>
        <div class="product-info">
            <p class="product-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste, quis aperiam quos, magnam totam aut quia explicabo minus laborum perferendis expedita vero! Quia earum, debitis impedit atque maxime vero ipsum?
                <br> <br>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione nulla distinctio eaque doloremque aut eius neque eligendi sapiente dicta, cupiditate, quia beatae ullam pariatur in amet aliquid tempora! Possimus, vel!
            </p>
            <div class="price-add">
                <span class="price-text">1000.00</span>
                <button class="add-to-cart">AGREGAR AL CARRITO</button>
            </div>
        </div>
        <div class="ad">
            <a href="https://los-taroleros.tebex.io/"><img class="img-ad" src="14.png" alt="Anuncio de LosTaroleros"></a>
        </div>
    </div>
    <h2 class="title-opinions">OPINIONES</h2>
    <div class="opinions">
        <div class="opinion-element">
            <h4 class="author-name">ALAN EDGARDO</h4>
            <p class="text-opinion"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quod repellendus asperiores id, consequatur similique sit laudantium, numquam nobis doloremque molestiae consectetur vitae culpa minus sint dolorem, esse perspiciatis illo.</p>
            <!-- <button class="delete-opinion">Eliminar opinión como administrador</button> -->
        </div>
        <div class="opinion-element">
            <h4 class="author-name">ALAN EDGARDO</h4>
            <p class="text-opinion"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio quod repellendus asperiores id, consequatur similique sit laudantium, numquam nobis doloremque molestiae consectetur vitae culpa minus sint dolorem, esse perspiciatis illo.</p>
            <!-- <button class="delete-opinion">Eliminar opinión como administrador</button> -->
        </div>
    </div>
    <div class="insert_opinion">
        <textarea class="field-opinion" name="comment" cols="80" rows="5" placeholder="Escribe tu opinión"></textarea>
        <button class="submit-opinion">PUBLICAR OPINIÓN</button>
    </div>
    <div class="footer">
        <p class="methods-text">Aceptamos:</p>
        <img src="11.png" alt="VISA">
        <img src="12.png" alt="MASTERCARD">
        <img src="13.png" alt="AMERICAN EXPRESS">
        <p class="contact-information">2022 DaebakGaming <br> <a class="email-webmaster" href="mailto:alanhernandezsand@gmail.com">Webmaster:alanhernandezsand@gmail.com</a></p>
    </div>
    <script src="script_product.js"></script>
</body>
</html>