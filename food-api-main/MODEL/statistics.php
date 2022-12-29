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

    function getBestCustomers(){
        $mysql = "select u.name as 'Nome', u.surname as 'Cognome', count(o.id) as 'Numero ordini'
        from `order` o 
        inner join `user` u on u.id = o.`user` 
        inner join status s on s.id = o.status 
        where s.id != 3
        group by u.id 
        order by count(o.id) desc;";

        $stmt = $this->conn->query($mysql);

        return $stmt;
    }

    function getMonthlyTurnover(){
        $mysql = "select p.name as 'Prodotto', month(o.created) as 'Mese', sum(po.quantity * p2.price) as 'Incasso mensile'
        from `order` o 
        inner join pickup p ON p.id = o.pickup 
        inner join product_order po on po.`order` = o.id 
        inner join product p2 on p2.id = po.product 
        group by p.id, month(o.created)
        order by sum(po.quantity * p2.price) desc;";
        
        $stmt = $this->conn->query($mysql);

        return $stmt;
    }

    function getMostFavouriteProducts(){
        $mysql = "select p.id as 'ID_Prodotto', p.name as 'Nome', count(f.product) as 'n_utenti like it' 
        from product p 
        inner join favourite f ON f.product = p.id 
        group by p.id 
        order by count(f.product) desc;";

        $stmt = $this->conn->query($mysql);

        return $stmt;
    }
}

?>