<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ingreso Usuario - CRUDLearn</title>
    </head>
    <body>
        <?php include ('topbar.php') ?>
        
        <center>
            <div style="margin-top: 20%;">
            <!-- Se condiciona si hay un usuario logeado ya -->
            <?php
                session_start();
                if($_SESSION['loged'] != null) {
                    // De estar logeado el sistema lo deslogea debido a que el boton estara como cerrar sesion
                    $_SESSION['loged'] = null;
                    echo "<h2> Has Deslogeado Exitosamente";
                } else {
                    // Por lo contrario se ejecuta el ingreso
                    // UsuarioDao sentences = new UsuarioDao();
                    // Usuario user1 = sentences.search(usuario1.getcorreo()); // Genera una busqueda segun el correo
                    // if(user1.getpassword().equals(usuario1.getpassword())) {
                        // Si la contraseña es correcta se registra en la sesion como usuario logeado
                        // session.setAttribute("userLoged", user1);
                    //     out.println("<h2> Se ha Iniciado la sesion del usuario "+(user1.getusername())+" con exito</h2>");
                    // } else {
                    //     // De equivocarse pues informa la falla
                    //     out.println("<h2> El ingreso ha Fallado por una contraseña erronea</h2");
                    // }
                }
            ?>
            <h3>Vuelve a inicio o a la lista de usuarios</h3> <br>
            <button type="button" class="btn btn-primary mb-3"><a href="./">Volver A Inicio</a></button>
            <button type="button" class="btn btn-primary mb-3"><a href="./ListarUsuario.php">Volver A Lista</a></button>
            </div>
        </center>
    </body>
</html>
