<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactenos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h2>Contactenos</h2>
    <!-- hay 2 metodos que se utilizan POST Y GET -->
    <form name="frm" method="GET" action="mostrardatos.php">
        <div class="elemento">
             <labe>Nombre: </label>
             <input type="text" name="nombre" size="30">
        </div>
        <div class="elemento">
             <labe>Apellido: </label>
             <input type="text" name="apellido" size="30">
        </div>
        <div class="elemento">
             <labe>Direccion: </label>
             <input type="text" name="direccion" size="30">
        </div>
        <div class="elemento">
             <labe>Telefono: </label>
             <input type="text" name="telefono" size="30">
        </div>
        <div class="elemento">
             <labe>Correo: </label>
             <input type="email" name="correo" size="30">
        </div>
        <div class="elemento">
             <labe>Contraseña: </label>
             <input type="password" name="contrasena" size="6">
        </div>
        <div class="elemento">
             <labe>Lenguaje: </label>
             <select name="lenguaje">
                <option value="HTML">HTML</option>
                <option value="PHP">PHP</option>
                <option value="ASP">ASP</option>
                <option value="VB">Visual Basic</option>
                <option value="Java">Java</option>
        </div>
        <div class="elemento">
            <input type="submit" value="Envar">
            <input type="reset" value="Limpiar">
        </div>

    
</body>
</html>