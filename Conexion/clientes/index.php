<html>
    <head>
        <title>Formulario de registro de informacion a una base de datos</title>
        <link rel="stylesheet" href="estilo.css">
    </head>

    <body>

        <CENTER>
        <h1>Formulario de clientes</h1>
        </CENTER>

        <form action="registroCLI.php" method="POST">
            <h2 class="form_titulo"> Ingresa tus datos: </h2>
            <div class="Contenedor_Inputs">

                <input type="text" name="nombre" placeholder="Nombre" class="chicos" required>
                <input type="text" name="telefono" placeholder="Telefono" class="chicos" required>
                <input type="text" name="correo" placeholder="Correo" class="largo" required>

                <!--BOTON REGISTRAR-->
                <input type="submit" value="Registrar" class="btn_enviar">

                <!--IMAGEN USUARIO-->
                <CENTER>
                <img width="360px" height="360px" src="USUARIO_png.png">
                </CENTER>

            </div>

        </form>

    </body>
</html>