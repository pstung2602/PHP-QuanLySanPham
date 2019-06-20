<?php

class DBconnect
{
    public $conn;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=my_database";
        $user = "root";
        $password = "Tunghuyen1!";
        $this->conn = new PDO($dsn, $user, $password);
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM `user_students`';
        return $this->conn->query($sql)->fetchAll();
    }

    public function getId($id)
    {
        $sql = "SELECT * FROM `user_students` WHERE id='$id'";
        return $this->conn->query($sql)->fetchAll();
    }

    public function create($name, $phone, $email)
    {
        $sql = "INSERT INTO `user_students`(`name`, `phone`, `email`) VALUES ('$name','$phone','$email')";
        return $this->conn->prepare($sql)->execute();
    }

    public function edit($id, $name, $phone, $email)
    {
        $sql = "UPDATE `user_students` SET `name`= '$name' ,`phone`='$phone',`email`='$email' WHERE id=$id";
        return $this->conn->prepare($sql)->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `user_students` WHERE id=$id";
        return $this->conn->prepare($sql)->execute();

    }
}
