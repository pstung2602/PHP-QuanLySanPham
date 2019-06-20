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
<?php include 'DBconnect.php' ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $id = $_GET['id'];
}
$conn = new DBconnect();
$products = $conn->getId($id);
?>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>
    <?php foreach ($products

    as $product) : ?>
    <form method="POST">
    <tr>
         <td><input name="id" type="text" value="<?php echo $product['id'] ?>"></td>
         <td><input name="name" type="text" value="<?php echo $product['name'] ?>"></td>
         <td><input name="phone" type="text" value="<?php echo $product['phone'] ?>"></td>
         <td><input name="email" type="text" value="<?php echo $product['email'] ?>"></td>
        <td><a><button>Submit</button></a></td>
    </tr>
    </form>
</table>

<?php endforeach ?>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $conn->edit($id,$name,$phone,$email);
    header("location:index.php");
}
?>


</body>
</html>