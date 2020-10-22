<?php
   ob_start();
   session_start();
?>

<html lang = "en">
   
   <head>
      <title>Tutorialspoint.com</title>
      <link href = "css/main.css" rel = "stylesheet">
      
      
   </head>
	
   <body class="bodys">
      
      <h2>Login</h2> 
      <div class = "container inicio">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'juan@gmail.com' && 
                  $_POST['password'] == 'juan') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'juan@gmail.com';
                  header('Location:menu.php');
                  
                  echo 'Correcto';
               }else {
                  $msg = 'Usuario/Contraseña Incorrectos';
               }
            }
         ?>
      </div> 
      
      <div class = "container">
      
         <form class = "inicio" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "cabezera"><?php echo $msg; ?></h4>
            <input type = "text" class = "control" 
               name = "username" placeholder = "username = juan@gmail.com" 
               required autofocus></br>
            <input type = "password" class = "control"
               name = "password" placeholder = "password = juan" required>
            <button type = "submit" 
               name = "login" type ="submit" value = "Log in">Login</button>

         </form>
			
         
      </div> 
      
   </body>
</html>