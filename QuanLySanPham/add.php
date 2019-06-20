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
<table>
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>
    <form method="POST">
        <tr>
            <td><input name="name" type="text" "></td>
            <td><input name="phone" type="text" "></td>
            <td><input name="email" type="text" "></td>
            <td><a><button>Submit</button></a></td>
        </tr>
    </form>
    <?php
    include 'DBconnect.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $conn=new DBconnect();
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $conn->create($name,$phone,$email);
        header("location:index.php");
    }
    ?>


</body>
</html>