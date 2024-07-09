<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SushiBar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <header class="header">
    <div class="menu container">
        <a href="#" class="logo">logo</a>
        <input type="checkbox"  id="menu">

        <label for="menu">
            <img src="img/menu.png" class="menu-icono" alt="menu">
        </label>

        <nav class="navbar">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Servicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </div>

    <div class="header-content container">
        <div class="header-txt">
            <h1>El mejor menu que puedas elegir, está aquí</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing 
                elit. Recusandae soluta ducimus dignissimos quisquam 
                repudiandae autem ratione sunt voluptatibus quod, 
                minima eum distinctio itaque non quos obcaecati ipsum
                illum magni quis!</p>
            <a href="#" class="btn-1">Informacion</a>
        </div>
        <div class="header-img">
            <img src="img/right.png" alt="right">
        </div>
    </div>
 </header>   

<section class="popular">
    <img class="back-1" src="img/points-yellow.svg"  alt="">
    <img class="back-2" src="img/points-yellow.svg"  alt="">
    <img class="back-3" src="img/wave-yellow.svg"  alt="">
    <div class="popular-content container">
        <h2>Popular Menu</h2>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
            Magnam obcaecati, aut magni minima voluptates officia 
            explicabo dolorum quisquam veritatis natus autem, 
            laboriosam commodi nulla qui vero maxime vel dicta totam.
        </p>
        <div class="popular-pl">
            <div class="popular-1">
                <img src="img/popular1.png" alt="">
                <h3>lorem</h3>
                <p>Laboriosam commodi nulla qui vero maxime vel dicta totam.</p>
            </div>
            <div class="popular-1">
                <img src="img/popular2.png" alt="">
                <h3>lorem</h3>
                <p>Laboriosam commodi nulla qui vero maxime vel dicta totam.</p>
            </div>
            <div class="popular-1">
                <img src="img/popular3.png" alt="">
                <h3>lorem</h3>
                <p>Laboriosam commodi nulla qui vero maxime vel dicta totam.</p>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <img class="about-1" src="img/points-blue.svg" alt="">
    <div class="about-content container">
        <div class="about-img">
            <img src="img/left.png" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing 
                elit. Recusandae soluta ducimus dignissimos quisquam 
                repudiandae autem ratione sunt voluptatibus quod, 
                minima eum distinctio itaque non quos obcaecati ipsum
                illum magni quis!</p>
            <a href="#" class="btn-1">Informacion</a>
        </div>
    </div>
</section>

<section class="number">
    <img class="number-1" src="img/points-yellow.svg"  alt="">
    <div class="number-content container">
        <h2>Estadisticas</h2>
        <p>Lorem ipsum dolor sit amet consectetur, 
            adipisicing elit. Possimus quae ea a eaque quo, 
            necessitatibus hic animi reprehenderit nostrum 
            aut eum sunt quos nulla obcaecati nemo vero ab 
            sint facere.</p>
        <div class="number-box">
            <div class="number-circle">
                <h3>50</h3>
                <p>restaurantes</p>
            </div>
            <div class="number-circle">
                <h3>80</h3>
                <p>menús</p>
            </div>
            <div class="number-circle">
                <h3>100</h3>
                <p>chefs</p>
            </div>
        </div>
    </div>
</section>

<section class="contact">
    <div class="contact-content container">
        <h2>Escríbenos</h2>
        <p>Lorem ipsum dolor sit amet, consectetur 
            adipisicing elit. Veniam tempore cum 
            placeat atque! Laboriosam, ipsa aperiam 
            repudiandae sit odio quibusdam nobis quo 
            obcaecati deleniti eveniet, ipsum excepturi 
            itaque est sapiente?</p>
        <form method="post" action="send.php">
            <input type="email" name="email" placeholder="correo" required>
            <input type="submit" name="send" value="Enviar" class="btn-2">
        </form>
    </div>
</section>

<footer class="footer">
    <div class="footer-content container">
        <div class="link">
            <h3>lorem</h3>
            <ul>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
            </ul>
        </div>
        <div class="link">
            <h3>lorem</h3>
            <ul>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
            </ul>
        </div>
        <div class="link">
            <h3>lorem</h3>
            <ul>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
            </ul>
        </div>
        <div class="link">
            <h3>lorem</h3>
            <ul>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
                <li><a href="#">lorem</a></li>
            </ul>
        </div>
    </div>
</footer>
<?php
include("send.php");


?>
<script>
    function myFunction(){
        window.location.href="http://localhost/SushiBar"
    }
</script>
</body>
</html>
