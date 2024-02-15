<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Edit Visit</h1>
    <section><a href="index.php"><img width="30" height="30" src="https://img.icons8.com/plasticine/30/return.png" alt="return"/></a></section>
    <form action="processEditVisit.php?patient=<?php echo $_GET['patient'] ?>&money=<?php echo $_GET['money'] ?>" method="post">
        <label for="patient">Patient</label>
        <input type="text" name="patient" value="<?php echo $_GET['patient'] ?>">
        <br>
        <label for="money">Money</label>
        <input type="text" name="money" value="<?php echo $_GET['money'] ?>">
        <br>
        <label for="date">Date</label>
        <input type="text" name="date" value="<?php echo $_GET['date'] ?>">
        <br>
        <label for="isPaid">Is Paid?</label>
        <input type="text" name="isPaid" value="<?php echo $_GET['isPaid'] ?>">
        <br>
        <input type="submit" value="Edit">
    </form>
</body>
</html>