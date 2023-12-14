<?php
include APP_ROOT.'/app/models/Category.php';

class CategoryService
{

    private $conn;

    public function __construct($connection)
    {
        $this->conn = $connection->getConn();
    }
    public function getAllCategories() {
        $sql = "SELECT * FROM {categoryTable}";
        $stmt ="";
    }

    public function totalCategory() {
        $sql = "SELECT COUNT(*) FROM ".categoryTable;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn();
    }


}