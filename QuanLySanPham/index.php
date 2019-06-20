<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php include 'DBconnect.php'?>

<table>
    <tr>
        <td>View Products</td>
    </tr>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Phone</td>
        <td>Email</td>
    </tr>
    <?php
    $conn= new DBconnect();
    $products=$conn->getAll();
        ?>
        <?php foreach ($products as $product) : ?>
        <tr>
            <td><?php echo $product['id'] ?></td>
            <td><?php echo $product['name'] ?></td>
            <td><?php echo $product['phone'] ?></td>
            <td><?php echo $product['email'] ?></td>
            <td><a href="edit.php?page=edit&id=<?php echo $product['id']?>"><button>Edit</button></a></td>
            <td><a href="delete.php?page=delete&id=<?php echo $product['id']?>"><button>Delete</button></a></td>
        </tr>
    <?php endforeach ?>
    <tr>
        <td><a href="add.php"><button>Create</button></a></td>
    </tr>
</table>

</body>
</html>
