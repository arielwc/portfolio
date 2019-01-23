<?php

$project_title= $_POST['project_title'];
$image = $_POST['image'];
$url = $_POST['url'];


$query = $db->prepare("INSERT INTO `portfolio` (`project_title`, `image`, `url`) VALUES (:project_title, :image, :url);");

$query->bindParam('');
$query->execute();

?>



<html>
<br>
<br>
<h1>Portfolio</h1>
Project One:<br>
        <form action="" method="POST">
            <input type="text" name="text" /><br>
            <input type="submit" />
        </form>
Project Two:<br>
        <form action="" method="POST">
            <input type="text" name="text" /><br>
            <input type="submit" />
        </form>
Project Three:<br>
        <form action="" method="POST">
            <input type="text" name="text" /><br>
            <input type="submit" />
        </form>
Project Four:<br>
        <form action="" method="POST">
            <input type="text" name="text" /><br>
            <input type="submit" />
        </form>
Project Five:<br>
        <form action="" method="POST">
            <input type="text" name="text" /><br>
            <input type="submit" />
        </form>
Project Six:<br>
        <form action="" method="POST">
            <input type="text" name="text" /><br>
            <input type="submit" />
        </form>
</html>