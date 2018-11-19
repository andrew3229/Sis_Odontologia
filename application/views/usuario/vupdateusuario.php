<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista Medico</title>
</head>
<body>
    

    <h1>Ingreso a la pantalla del medico</h1>
    <?php echo $this->session->userdata( 'session_usuario_apellido'); ?>   <!--Parametros para fijar los datos del medico en la pantalla principal -->
    <?php echo $this->session->userdata( 'session_usuario_id'); ?>
   <h2>Actualizar Datos</h2>

    <form action="<?php echo base_url();?>cusuario/actualizarDatos" method="POST">
        <input type="text" name="txtNick" placeholder="Nick del Medico"><br>
        <input type="text" name="txtNombre" placeholder="Nombre del Medico"> <br>
        <input type="text" name="txtApellido" placeholder="Apellido Medico">

        <td><input type="submit" value="Actualizar"></td>
    </form>


</body>
</html>