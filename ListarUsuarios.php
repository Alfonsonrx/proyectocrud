<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php include "topbar.php"; ?>
        
        
        <center>
            <div class="height-100 bg-light" style="width: 80%;">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">User</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mail</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Options</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--Tabla de Usuarios-->
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <!-- Muestra los botones que redirigen a editar o eliminar al usuario segun su id -->
                            <td><a href='#>'><i class='bx bx-pencil nav_icon'></i> Editar</a> </td>
                            <td><a href='#'><i class='bx bx-pencil nav_icon'></i> Eliminar</a> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </center>
    </body>
</html>