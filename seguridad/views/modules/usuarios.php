<?php

session_start();

if(!$_SESSION["validar"]) {

    header("location:ingresar");

    exit();

}

?>

<h1>USUARIOS</h1>

    <table border="1">

        <thead>

            <tr>
                <th>Usuarios</th>
                <th>Contraseña</th>
                <th>Email</th>
                <th></th>
                <th></th>

            </tr>

        </thead>

        <tbody>

            <?php

            $vistaUsuario = new MvcController();
            $vistaUsuario-> vistaUsuariosController();
            $vistaUsuario-> borrarUsuarioController();

            ?>
                    <!-- Enlace para ir al formulario de inicio de sesión -->
                    <div class="card-footer text-center"> ¿el usuario esta correcto? <a href="home.php">Pagina inicial aqui</a>.

        </tbody>
            
    </table>

<?php

if(isset($_GET["action"])){

    if($_GET["action"] == "cambio"){

        echo "Cambio Exitoso";

    }
    

}

?>