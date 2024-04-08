<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crochet Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>     

                                          <!-- ---------------------------------- HEADER PRIMER PARTE DE LA PAGINA ---------------------------------------- -->
    <header class="header">
        <div class="menu container" >
               <a href="#" class="logo">Crochet🧶</a>
               <input type="checkbox" id="menu">
               <label for="menu">
                <img src="images/menú.png"  width="22px" class="menu-icono" alt="menu">
               </label>
               <nav class="navbar ">
                <ul>
                   <li><a href="#">Inicio</a></li>
                   <li><a href="#nosotros">Nosotros</a></li>
                   <li><a href="#servicios">Servicios</a></li>
                   <li><a href="#contacto">Contacto</a></li>
                </ul>
               </nav>    
         </div>
         <section class="header-content container" id="inicio">
             <div class="header-txt">
                <h1>Crochet Inc</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora repellendus ipsam nesciunt adipisci nihil est consequuntur tenetur? Delectus alias molestiae, placeat similique vitae, ratione praesentium assumenda aut veritatis distinctio ipsam!
                Id optio enim tenetur voluptates, earum ab ipsam a delectus!</p>
                <a href="#" class="btn-1">Informacion</a>
             </div>
              
             <div class="header-img">
                <img src="images/coneja.png" alt="">
             </div>
         </section>
    </header>
  <section  class="about container">
       <picture class="about-img">
        <img src="images/spiderman.png" alt="">
       </picture>
    <article class="about-txt" id="nosotros">
        <h2>Nosotros</h2> 
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, mollitia nihil corporis at pr. </p> 
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, mollitia nihil corporis at pr. </p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, mollitia nihil corporis at pr. </p>
        <a href="#" class="btn-1">Informacion</a>
    </article>
  </section> 



                                  <!-- -------------------------------------- IMAGENES DE NUSTRO PRODUCTO ----------------------------------  -->

    
    <section class="galeria" >
        <img  class="img-galeria"   src="images/familia-tigre.jpg" alt="img de tigres ">
        <img  class="img-galeria"   src="images/llama.jpg" alt="img de llama">
        <img  class="img-galeria"   src="images/tigre.jpg" alt="img de tigre">
        <img  class="img-galeria"   src="images/carpincho.png" alt="img de carpincho">
        <img  class="img-galeria"   src="images/oso.jpg" alt="img de oso">
        <img  class="img-galeria"   src="images/harry-potter.png" alt="img de harry potter">
        <img  class="img-galeria"   src="images/sonajero.png" alt="sonajeros de elefantes">
        <img  class="img-galeria"   src="images/sonajeros.png" alt="sonajeros de crochet">
  
    </section>
                                    <!-- ----------------------------------  SERVIVICIOS    --------------------------------------  -->
  <main class="servicios  " id="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">
             <div class="servicio1">
                <i class="fa-solid fa-truck-fast"></i>
                <h3>Envios En Las 24 HS</h3>
             </div>

             <div class="servicio1">
                <i class="fa-solid fa-credit-card"></i>
                <h3>Todos los medios de pago</h3>
             </div>
             <div class="servicio1">
                <i class=" fa-solid fa-bullhorn"></i>
                <h3>Descuentos en tu compras</h3>
             </div>
        </div>
  </main>

                            <!-- ------------------------------------ FORMULARIO ----------------------------------------------- -->
  <section class="formulario container" id="contacto">
    <form method="post">
        <h2> Su Consulta</h2>
        <div class="input-group">
            <div class="input-container">
                <input type="text" name="name" placeholder="Nombre y Apellido">
                <i class="fa-solid fa-user"></i>
            </div>
       
            <div class="input-container">
                <input type="tel" name="phone" placeholder="Numero de Telefono">
                <i class="fa-solid fa-phone"></i>
            </div>
        
            <div class="input-container">
                <input type="email" name="email" placeholder="Correo">
                <i class="fa-solid fa-envelope"></i>
            </div>
 
            <div class="input-container">
              <textarea name="message" placeholder="Su Consulta" ></textarea>
            </div>
            
            <input type="submit" name="send" class="btn" onClick="myFunction()">
        </div>
    </form>
  </section>


                       <!-- -------------------------------- FOOTER  --------------------------  -->
  <footer class="footer">

    <div class="footer-content container">
      
    <article class="link">
        <a href="#" class="logo">Crochet🧶</a>
    </article>
   
    <article class="link">
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
    </article> 
    </div>
  </footer>


<?php 
    include("send.php")

?>
<script>
    function myFunction(){
        window.location.href="http://localhost/pagina-php"
    }
</script>

</body>
</html>