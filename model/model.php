<?php


function getUsers(){
    $dbh = callPDO();
    try{
        $query ='SELECT * FROM users';
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

function getAllNews(){
    $dbh = callPDO();
    try{
        $query ='SELECT * FROM news INNER JOIN users ON news.user_id = users.id ORDER BY date  ';
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
function getAllSnowTypes(){
    $dbh = callPDO();
    try{
        $query ='SELECT  snowtypes.model,snowtypes.brand, count(snows.id) as nbsnowssnowtypes, snowtypes.photo FROM snowtypes INNER JOIN snows on snowtype_id = snowtypes.id  group by snowtypes.id ORDER by snowtypes.brand,snowtypes.model';
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
function getSnow($id){
    $dbh = callPDO();
    try{
        $query ='SELECT  * FROM snowtypes ';
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