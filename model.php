<?php

require_once 'conn.php';

class players extends connections{

    function getAllPlayers(){    

        $result = $this->connection()->query("SELECT * FROM  player ");
        
        $players = [];
    
        while ($row = $result->fetch_assoc()){
            $players[] = $row;
        }
        
        return $players;
    }

}