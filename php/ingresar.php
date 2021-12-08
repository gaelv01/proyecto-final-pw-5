<?php
include('conexion.php');
?>

<html>
<meta charset="UTF-8">

<body>
    <h1> Base de datos IMSS</h1>
    <form method="post" action="registrardatos.php">
        Nombre: <input type="text" id="nombre" name="nombre">
        Apellido Paterno: <input type="text" id="apellidop" name="apellidop" required>
        Apellido Materno <input type="text" id="apellidom" name="apellidom" required>
        Edad: <input type="number" id="edad" name="edad" required>
        Telefono: <input type="tel" id="telefono" name="telefono" required>
        Correo: <input type="email" id="correo" name="correo" required>
        Estatura: <input type="text" id="estatura" name="estatura" required>
        Peso: <input type="text" id="peso" name="peso" required>
        Tipo Sangre: <input type="text" id="sangre" name="sangre" required>
        Motivo: <input type="text" id="motivo" name="motivo" required>
        Fecha de la cita: <input type="date" id="fecha" name="fecha" required>
        Hora de la cita: <input type="time" id="hora" name="hora" required>

        <button type="submit" name="registar">Registrar</button>
        <button type="reset">Limpiar</button>
    </form>
</body>

</html>