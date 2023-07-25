<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create new one</h1>

    <form action="insert.php" method="post" enctype ="multipart/form-data">
        <input type="text" name="name" placeholder = "name" ><br><br>
        <select name="place">
            <option>Mountain</option>
            <option>Beach</option>
            <option>Pagoda</option>
            <option>Township</option>
        </select><br><br>
        <input type="file" name = "image">
        <button>Add</button>
    </form>
</body>
</html>