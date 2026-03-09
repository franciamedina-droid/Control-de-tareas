<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="Imagen/Tarea.png" type="image/png">

<title>Control-de-tareas</title>
</head>

<body>

<header>
<h1>Administracion</h1>
</header>

<section>

<h2>Registro</h2>

<form action="Guardar.php" method="POST" autocomplete="off">

<div>
<label>Codigo:</label>
<input type="text" name="Codigo" required>
</div>

<div>
<label>Tarea:</label>
<input type="text" name="Tarea" required>
</div>

<div>
<label>Asignacion:</label>
<textarea name="Asignacion"></textarea>
</div>

<div>
<label>Docente:</label>
<input type="text" name="Docente">
</div>

<div>
<label>Fecha de Entrega:</label>
<input type="date" name="Fecha_Entrega">
</div>

<div>
<label>Observaciones:</label>
<textarea name="Observaciones"></textarea>
</div>

<br>

<input type="submit" value="Guardar">

</form>

</section>

<footer>
<p>Derechos Reservados &copy; 2004-2026</p>
</footer>

</body>
</html>