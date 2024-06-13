<?php
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style5.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>L-GantCode</title>

</head>
<body>
    <header>
     <div class="nav container">
        <i class='bx bx-menu' id="menu-icon"></i>
        <a href="#"class="logo">L-Gant<span>Code</span></a>

        <ul class="navbar">
            <li><a href="principal" class="active">principal</a></li>
            <li> <a href="index2.php">Registro</a></li>
            <li> <a href="servicios.html">Servicios</a></li>

        </ul>
           <i class='bx bx-search' id="search-icon"></i>
            <!--nn
           <i class= 'bx bx-user' id="user-icon"></i>
           -->
           
          
          
        <div class="search-box container">
            <input  type="search" name="" id="" placeholder="Buscar">
        </div>
                           
     </div>   

     <!--MENUU DESPLAZABLEEE-->
     <div id="sidemenu" class="menu-collapsed">
        <!--header-->
        <div id="header">
            <div id="title"><span>L-GantCode</span></div>
            <div id="menu-btn">
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
                <div class="btn-hamburger"></div>
            </div>
        </div>
        <!--perfil-->
        <div id="profile">
            <div id="photo"><img src="img/user3r.jpg" alt=""></div>
            
           <!--<div id="name"><span>echo $_SESSION["name"]." ". $_SESSION["lastname"]</span></div>--->
            <?php
            
        // echo $_SESSION["name"]." ". $_SESSION["lastname"];

           ?>
        </div>
        <!--ITEMS-->
        <div id="menu-items">
            <div class="item">
                <div class="icon"><a href="subir.html"><img src="img/nube.png" alt=""></a></div>
                <div class="title"><span><a href="subir2.php">Publicar Proyecto</a></span></div>
            </div>
            <div class="item separator">

            </div>
            <div class="item">
                <div class="icon"><a href="sesion.php.html"><img src="img/user5.png" alt=""></a></div>
                <div class="title"><span><a href="sesion.html">Sesion</a></span></div>
            </div>
            <div class="item separator">
                
            </div>
            <div class="item">
                <div class="icon"><a href="controlador/controladorcerrar.php"><img src="img/salir.png" alt=""></a></div>
                <div a class="title"><span><a href="controlador/controladorcerrar.php">salir</a></span></div>
            </div>
        </div>
    </div>
    <script>
        const btn = document.querySelector('#menu-btn');
        const menu = document.querySelector('#sidemenu');
        btn.addEventListener('click', e => {
            menu.classList.toggle("menu-expanded");
            menu.classList.toggle("menu-collapsed");
            document.querySelector('body').classList.toggle('body-expanded');
        });
    </script>


    </header>
                <!-- MENUUUUUU-->

    <section class="home" id="home">
        <div class="home-text">
            <h1>El Hogar De Los <br> Proyectos <span> Expandete ya!</span></h1>
            <p>¡Bienvenido a nuestra galería de proyectos de software! <br> Explora nuestra colección de proyectos innovadores y creativos<br>Que reflejan nuestro compromiso con la excelencia técnica y la <span>creatividad</span></p>
            <!--boton-->
            <a href="index2.php" class="btn">Registrate</a>
        </div>
    </section>

    <section class="proyecto" id="proyecto">

        <div class="heading">
            <span>Servicios mas Populares </span>
            <h2>Te Ayudamos A Progresar Sin Costo Alguno</h2>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Est ipsam veritatis error at ratione maxime corporis</P>
        </div>

        <div class="proyect-container container">

            <div class="box">
                <img src="img/img1.jpg" alt="">
                <h2> Scrum master</h2>
            </div>

            <div class="box">
                <img src="img/img2.jpg" alt="">
                <h2>Testeo de Sistemas </h2>
            </div>

            <div class="box">
                <img src="img/img3.jpg" alt="">
                <h2>Paginas web FullStack</h2>
            </div>

            <div class="box">
                <img src="img/img4.jpg" alt="">
                <h2> Desarrollo de Apps</h2>
            </div>

            <div class="box">
                <img src="img/img5.jpg" alt="">
                <h2> CiberSeguridad</h2>
            </div>

            <div class="box">
                <img src="img/img7.jpg" alt="">
                <h2> Software Developer</h2>
            </div>

        </div>
    </section>
    <!--noso-->

    <section class="about container" id="about">
        <div class="about-img">
         <img src="img/nosotros.jpg" alt="">

        </div>
        
        <div class="about-text">
            <span>Acerca de nosotros</span>
            <h2>Somos Un equipo de jovenes <br>Que No quieren reprobar </h2>
            <p>Esta pagina es un proyecto de jovenes provenientes de la <br>Universidad Politecnica de Tapachula  </p>

            <a href="https://www.uptapachula.edu.mx/" class="btn">Inscribete!</a>
        </div>
    </section>

    <section class="Blog" id="Blog">

        <div class="heading">
           <span>Blog & Noticias</span>
           <h2>Excelencia En Calidad y Venta</h2>
           <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cumque possimus nam porro? Aspernat</p>
        </div>
           <!--   -->
       <div class="blog-container">
   
           <div class="box">
               <img src="img/img1.jpg" alt="">
               <span>Marzo 3 2024</span>
               <h3>Expertos en Conseguir un coche perfecto a tus necesidades</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod dignissimos ex nostrum perspiciatis. Error nam temporibus harum doloribus, eius distinctio</p>
               <a href="#" class="blog-btn">Leer Mas<i class='bx bx-right-arrow-alt'></i></a>
           </div>
   
           <div class="box">
               <img src="img/img4.jpg" alt="">
               <span>Marzo 5 2024</span>
               <h3>Actualizaciones siempre</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod dignissimos ex nostrum perspiciatis. Error nam temporibus harum doloribus, eius distinctio</p>
               <a href="#" class="blog-btn">Leer Mas<i class='bx bx-right-arrow-alt'></i></a>
           </div>
   
           <div class="box">
               <img src="img/img3.jpg" alt="">
               <span>Marzo 3 2024</span>
               <h3>Expertos en Conseguir un coche perfecto a tus necesidades</h3>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod dignissimos ex nostrum perspiciatis. Error nam temporibus harum doloribus, eius distinctio</p>
               <a href="#" class="blog-btn">Leer Mas<i class='bx bx-right-arrow-alt'></i></a>
           </div>
        </div>
       </section>
       <!--foter-->
       <section class="footer">
        <div class="footer-container container">
           <div class="footer-box">
               <a href="#" class="logo">L-Gant<span>Code</span></a>
               <div class="social">
                   <a href="#"><i class='bx bxl-facebook'></i></a>
                   <a href="#"><i class='bx bxl-instagram'></i></a>
                   <a href="#"><i class='bx bxl-twiter'></i></i></a>
                   <a href="#"><i class='bx bxl-youtube'></i></a>
               </div>
           </div>
           <div class="footer-box">
               <h3>Pagina</h3>
               <a href="#">principal</a>
               <a href="#">Nosotros</a>
               <a href="#">Categorias</a>
               <a href="#">Sesion</a>
           </div>
   
           <div class="footer-box">
               <h3>Contacto</h3>
               <p>Mexico</p>
               <p>United States</p>
           </div>
         </div>
       </section>
       <!--copiright-->
       <div class="copyright">
           <p>&#169; Software"2A"-Todos Los Derechos Reservados</p>
       </div>

    <script src="main.js"></script>



    
</body>
</html>