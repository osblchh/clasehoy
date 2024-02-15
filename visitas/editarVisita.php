<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Modificar Visita</h1>
   
    <form action="procesarEditarVisita.php?paciente=<?php echo $_GET['paciente'] ?>&importe=<?php echo $_GET['importe'] ?>" method="post">
        <label for="paciente">Paciente</label>
        <input type="text" name="paciente" value="<?php echo $_GET['paciente'] ?>">
        <br>
        <label for="importe">Importe</label>
        <input type="text" name="importe" value="<?php echo $_GET['importe'] ?>">
        <br>
        <label for="fecha">Fecha</label>
        <input type="text" name="fecha" value="<?php echo $_GET['fecha'] ?>">
        <br>
        <label for="pagado">Pagado</label>
        <input type="text" name="pagado" value="<?php echo $_GET['pagado'] ?>">
        <br>
        <input type="submit" value="Modificar">
    </form>
</body>
</html>