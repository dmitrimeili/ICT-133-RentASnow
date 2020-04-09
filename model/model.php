<?php


function getUsers()
{
    require ".const.php";
    $dbh = callPDO();
    try {
        $query = 'SELECT * FROM users';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getAllNews()
{
    require ".const.php";
    $dbh = callPDO();
    try {
        $query = 'SELECT * FROM news INNER JOIN users ON news.user_id = users.id ORDER BY date  ';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getAllSnowTypes()
{
    require ".const.php";
    $dbh = callPDO();
    try {
        $query = 'select * from snowtypes order by brand,model desc';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute();//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getSnowType($id)
{
    require ".const.php";
    $dbh = callPDO();
    try {
        $query = 'SELECT  * FROM snowtypes where id=:id';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute(['id' => $id]);//execute query
        $queryResult = $statement->fetch(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getRealSnow($id)
{
    require ".const.php";
    $dbh = callPDO();
    try {
        $query = 'SELECT  * FROM snows INNER JOIN snowtypes ON snowtype_id = snowtypes.id where snows.id=:id';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute(['id' => $id]);//execute query
        $queryResult = $statement->fetch(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

/**
 * Retourne la liste des snows d'un type donné
 * @param $id
 * @return mixed|null
 */
function getSnowsOfType($id)
{
    require ".const.php";
    $dbh = callPDO();
    try {
        $query = 'SELECT  * FROM snows where snowtype_id=:id';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute(['id' => $id]);//execute query
        $queryResult = $statement->fetchAll(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        return null;
    }
}

function getUserByEmail($email)
{
    require ".const.php";
    $dbh = callPDO();
    try {
        $query = 'SELECT  * FROM users where email=:email';
        $statement = $dbh->prepare($query);//prepare query
        $statement->execute(['email' => $email]);//execute query
        $queryResult = $statement->fetch(PDO::FETCH_ASSOC);//prepare result for client
        $dbh = null;
        if ($debug) var_dump($queryResult);
        return $queryResult;
    } catch (PDOException $e) {
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