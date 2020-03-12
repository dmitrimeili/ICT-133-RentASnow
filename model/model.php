<?php



function getSnows(){
    return json_decode(file_get_contents('model/dataStorage/Snows.json'));
}
function getUsers(){
    return json_decode(file_get_contents('model/dataStorage/Users.json'));
}

function getAllNews(){
    $dbh = callPDO();
    try{
        $query ='SELECT * FROM news INNER JOIN users ON news.user_id = users.id';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    }catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}
function getAllSnows(){
    $dbh = callPDO();
    try{
        $query ='SELECT * FROM snows';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        return $queryResult;
    }catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function callPDO()
{
    require ".const.php";
    $dbh = new PDO('mysql:host=' . $dbhost . ';dbname=' . $dbname, $user, $pass);
    return $dbh;
}


?>