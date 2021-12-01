<html>
    <head>
        <title>Formulario de registro de informacion a una base de datos</title>
        <link rel="stylesheet" href="estilo.css">
    </head>

    <body>

        <CENTER>
        <h1>Formulario de productos</h1>
        </CENTER>

        <form action="registro.php" method="POST">
            <h2 class="form_titulo"> Ingresa los datos del producto: </h2>
            <div class="Contenedor_Inputs">

                <input type="text" name="nombre" placeholder="Nombre" class="chicos" required>
                <input type="text" name="precio" placeholder="Precio" class="largo" required>
                <input type="text" name="direccion" placeholder="Direccion" class="chicos" required>
                <input type="text" name="tipodepago" placeholder="TipoDePago" class="largo" required>

                <!--BOTON REGISTRAR-->
                <input type="submit" value="Registrar" class="btn_enviar">

                <!--IMAGEN PRODUCTOS-->
                <CENTER>
                <img width="340px" height="340px" src="producto.png.png">
                </CENTER>

            </div>
        </form>

    </body>
</html>