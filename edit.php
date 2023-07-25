<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edith</title>
</head>
<body>
    <h1>Edit and Update</h1>
    <?php
        include('mysql.php');
        $db = connect();

        $id = $_GET['id'];

        $sql = $db->query("SELECT * FROM travellers WHERE id = $id");
        $result = $sql->fetch();
    ?>

    <form action="update.php" method="post" enctype ="multipart/form-data">
        <input type="hidden" name="id" value = "<?= $result->id ?>"><br> <br>
        <input type="text" name="name" value = "<?= $result->name ?>"><br> <br>
        <select name="place">
            <option>Mountain</option>
            <option>Beach</option>
            <option>Pagoda</option>
            <option>Township</option>
        </select><br><br>
        <input type="file" name = "image">
        <button>update</button>
    </form>
</body>
</html>