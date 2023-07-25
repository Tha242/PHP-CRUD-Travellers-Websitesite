<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php CRUD</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
       
    <nav class="navbar sticky-top bg-body-tertiary">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Travellers Blog</span>
            <button class="btn d-flex  btn-outline-success" type="submit"><a class="text" href="new.php">Creat new one</a></button>
        </div>
    </nav>
    
    
    
    <?php

        //connect to database
        include('mysql.php');
        $db = connect();

        $sql = $db->query("SELECT * FROM travellers"); //fetch data from database   
        $results = $sql->fetchAll();


    ?>

<!-- Display data on website   -->

    <table id="table" class="table table-hover">
        
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Place to travel</th>
                <th scope="col">Image</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <?php foreach($results as $result) : ?>
        <tbody>
            <tr>
                <th scope="row"><?= $result->id ?></th>
                <td><?= $result->name ?></td>
                <td><?= $result->place ?></td>
                <td><img src = 'images/<?= $result->image ?>' width = '200px' height = '70px'></td>
                <td><a id = "tr" href="edit.php?id= <?= $result->id ?>">Edit</a></td>
                <td><a id = "tr" href="delete.php?id= <?= $result->id ?>">Delete</a></td>
            </tr>
                        
        </tbody>
        <?php endforeach ?> 
    </table>

    
    
</body>
</html>