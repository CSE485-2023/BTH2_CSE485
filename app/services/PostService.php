<?php

include APP_ROOT.'/app/models/Post.php';

class PostService
{
    private $conn;

    public function __construct($connection)
    {
        $this->conn = $connection->getConn();
    }


    public function getAllPosts() {
        $sql = "SELECT p.id,title,message,name,first_name,last_name,status,created,updated FROM ".postTable ." AS p JOIN ".userTable." AS u ON p.user_id = u.id JOIN ".categoryTable." AS c ON c.id = p.category_id";
        $stmt = $this->conn->query($sql); // Sử dụng đối tượng kết nối PDO trong DB_connection

        $posts = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $post = new Post($row['id'], $row['title'], $row['message'], $row['name'], $row['first_name'].' '. $row['last_name'], $row['status'], $row['created'], $row['updated']);
            $posts[] = $post;
        }
        return $posts;
    }

    public function get($id) {
        $sql = "SELECT p.id,title,message,name,first_name,last_name,status,created,updated FROM ".postTable ." AS p JOIN ".userTable." AS u ON p.user_id = u.id JOIN ".categoryTable." AS c ON c.id = p.category_id WHERE p.id = $id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetch();

        return new Post($row['id'], $row['title'], $row['message'], $row['name'], $row['first_name'].' '. $row['last_name'], $row['status'], $row['created'], $row['updated']);


    }

    public function totalPost() {
        $sql = "SELECT COUNT(*) FROM ".postTable;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn();
    }



}