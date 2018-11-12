<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
</head>
<body>
    <h1>vista usuario</h1>


    <form action="<?php echo base_url();?>cusuario/guardar"  method="POST">
        <table>
            <tr>
                <td><label>Ingrese su Nick:</label></td>
                <td><input type="text" name="txtNick"></td>
            </tr>

             <tr>
                <td><label>Ingrese su contraseña</label></td>
                <td><input type="password" name="txtConstraseña"></td>
            </tr>

            <tr>
                <td><label>Ingrese sus Nombres:</label></td>
                <td><input type="text" name="txtNombres"></td>
            </tr>

            <tr>
                <td><label>Ingrese sus Apellidos:</label></td>
                <td><input type="text" name="txtApellidos"></td>
            </tr>

            <tr>
                <td><label>Ingrese su Correo:</label></td>
                <td><input type="email" name="txtCorreo"></td>
            </tr>

            <tr>
                <td><label>Ingrese su Teléfono:</label></td>
                <td><input type="text" name="txtTelefono"></td>
            </tr>
            
            <tr>
                <td><label>Ingrese su Direccón de Casa:</label></td>
                <td><input type="text" name="txtDireccion"></td>
            </tr>

              <tr>
                <td><label>Ingrese su Cédula:</label></td>
                <td><input type="text" name="txtCedula"></td>
            </tr>

             <!-- Enviar el formulario a la base de datos -->
             <tr>
                <td colspan=2><input type="submit" value="Guardar" ></td>
            </tr>
            
                
        </table>

        <a href="<?php echo base_url();?>clogin">Ingresar al sistema</a>

    
    
    </form>


</body>
</html>