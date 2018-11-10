<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vista de Pacientes</title>
</head>
<body>
    <h1>Vista de Pacientes</h1>

    <form action="<?php echo base_url();?>cpaciente/guardar"  method="POST" >
        <table>
            <!-- Se registra el nombre del paciente -->
            <tr>
                <td><label >Nombre del Paciente:</label></td>
                <td><input type="text" name="txtNombre"></td>
            </tr>

            <!-- Se registra el apellido del paciente -->
            <tr>
                <td><label >Apellido del Paciente:</label></td>
                <td><input type="text" name="txtApellido"></td>
            </tr>

            <!-- Se registra la fecha de nacimiento del paciente -->
            <tr>
                <td><label >Fecha de Nacimiento del Paciente:</label></td>
                <td><input type="date" name="dateFechaNacimiento"></td>
            </tr>

            <!-- Se registra el tipo de sexo del paciente -->
            <tr>
                <td><label >Sexo del Paciente:</label></td>
                <td><input type="radio" name="rdbsexo" value="Masculino">Masculino</td>
                <td><input type="radio" name="rdbsexo" value="Femenino">Femenino</td>
            </tr>

            <!-- Se registra la dirección del paciente -->
            <tr>
                <td><label >Dirección del Paciente:</label></td>
                <td><input type="text" name="txtDireccion"></td>
            </tr>

            <!-- Se registra el estado civil del paciente -->
            <tr>
                <td><label >Estado Civil del Paciente:</label></td>
                <td><input type="radio" name="rdbestadocivil" value="Soltero">Soltero</td>
                <td><input type="radio" name="rdbestadocivil" value="Casado">Casado</td>
                <td><input type="radio" name="rdbestadocivil" value="Divorciado">Divorciado</td>
                <td><input type="radio" name="rdbestadocivil" value="UniónLibre">Unión Libre</td>
            </tr>

            <!-- Se registra la profesión del paciente -->
            <tr>
                <td><label >Profesión del Paciente:</label></td>
                <td><input type="text" name="txtProfesion"></td>
            </tr>

             <!-- Se registra el teléfono del paciente -->
             <tr>
                <td><label >Teléfono del Paciente:</label></td>
                <td><input type="text" name="txtTelefono"></td>
            </tr>

             <!-- Se registra la cédula del paciente -->
             <tr>
                <td><label >Cédula del Paciente:</label></td>
                <td><input type="text" name="txtCedula"></td>
            </tr>

            <!-- Se registra el médico de cabecer del paciente -->
            <tr>
                <td><label >Médico de Cabecera del Paciente:</label></td>
                <td><input type="text" name="txtMedicoCabecera"></td>
            </tr>


            <!-- Enviar el formulario a la base de datos -->
            <tr>
                <td colspan=2><input type="submit" value="Guardar" ></td>
            </tr>

        </table>

    </form>

</body>
</html>