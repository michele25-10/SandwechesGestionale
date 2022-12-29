<?php

class Statistics{

    protected $conn;
    public function __construct($db)
    {
        $this->conn = $db; 
    }
    function getBestSellingProduct(){
        $mysql = "select p.name as 'prodotto', sum(po.quantity) as 'numero venduti'
        from product p 
        inner join product_order po on po.product = p.id 
        group by p.id 
        order by sum(po.quantity) desc;";

        $stmt = $this->conn->query($mysql);

        return $stmt;
    }


}

?>