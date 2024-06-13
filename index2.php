<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style2.css">
    <title>Formulario</title>
</head>


<body>



    <form action="send.php" method="POST" autocomplete="on" >  
        <h2> Bienvenido</h2>

    <div class="input-group">

        <div class="input-container">
            <input type = "text" name="name"   placeholder="Nombre" >
            <i class="fa-solid fa-user"></i>
        </div>

        <div class="input-container">
            <input type = "text" name="lastname" placeholder="Apellido">
            <i class="fa-solid fa-user"></i>
        </div>

        <div class="input-container">
            <input type = "email" name="email"  placeholder="Correo">
            <i class="fa-solid fa-envelope"></i>
        </div>

        <div class="input-container">
            <input type = "password" name="password"  placeholder="Contraseña">
            <i class="fa-solid fa-lock"></i>
        </div>

        <a href="#">Terminos y Condiciones</a>
        <input type="submit" name="send" class="btn" values= "Enviar">

        
     </div>
   </form>   

    
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>