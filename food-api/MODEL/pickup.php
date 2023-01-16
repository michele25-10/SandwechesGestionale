<?php

spl_autoload_register(function ($class) {
    require __DIR__ . "/../COMMON/$class.php";
});

set_exception_handler("errorHandler::handleException");
set_error_handler("errorHandler::handleError");

class PickUp
{
    protected $conn;

    
    public function __construct($db)
    {
        $this->conn=$db;
    }

    /*private Connect $db;
    private PDO $conn;

    public function __construct()
    {
        $this->db = new Connect;
        $this->conn = $this->db->getConnection();
    }*/


    public function getArchivePickup()
    {
        // Da rivedere la query
        $sql = "SELECT id,name
            FROM pickup
            WHERE 1=1";

        return $this->conn->query($sql);

        /*$stmt = $this->conn->prepare($sql);

        return $stmt->execute();*/
    }

    public function addPickup($name){ 

        $sql = sprintf("INSERT INTO pickup (name)
        VALUES('%s');",
        $this->conn->real_escape_string($name));

        $result = $this->conn->query($sql);

        return $result;
    }

    public function getPickupId($name){
        $sql = "select p.id
                from pickup p
                where p.name = '".$name."';";

        $result = $this->conn->query($sql);
        var_dump($result); 
        return $result;
    }
}
