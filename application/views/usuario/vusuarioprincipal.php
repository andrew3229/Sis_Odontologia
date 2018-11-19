<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista Medico</title>
</head>
<body>


    <h1>Bienvenido Doctor</h1>
    <?php echo $this->session->userdata( 'session_usuario_datos'); ?>   <!--Parametros para fijar los datos del medico en la pantalla principal -->
    <h1>Ingreso a la pantalla del medico</h1>

    <h1>Modificar datos del Medico</h1>
    <a href="<?php echo base_url();?>cusuario/actualizarDatos">Modificar datos del medico</a>

</body>
</html>