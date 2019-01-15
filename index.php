<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include "header.php";
    ?>

    <form>
        <input type="button" value="Här är min lista på filmer" onclick="window.location.href='list.php'">
        <br>
        <br>
        <input type="button" value="Kontaktinformation" onclick="window.location.href='contact.php'">
        <br>
        <br>
    </form>


<form action="details.php" method="post">
<select name="movie">
    <option selected="selected">Välj en film</option>

    <?php 
    require "functions.php";
    dropDownList();
    ?>

    </select>
    </form>

    <?php
        include "footer.php";
    ?>

</body>
</html>