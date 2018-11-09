<html>
<body>
<form action="require_file.php" method="POST">
    <h1>About Me</h1><br>
    Text:<br>
    <input type="text" name="text" /><br>
    <input type="submit" />
</form>
<br>
<br>
<h1>Portfolio</h1>
<form action="create_portfolio.php" method="POST">
<h3>Add A New Project</h3><br>
Project Title<br>

        <input type="text" name="project_title" /><br>

Image<br>
        <input type="text" name="image" /><br>

URL<br>
        <input type="text" name="url" /><br>
    <input type="submit" />

    </form>

<form action="delete_portfolio.php" method="POST">
    <h3>Delete A Project</h3><br>
    Project Title<br>
    <input type="text" name="project_title" /><br>
    <input type="submit" />

</form>


</form>
</body>
</html>