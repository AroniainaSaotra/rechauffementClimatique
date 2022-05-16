<?php 
include("connection.php");

function getRechauffement() {

    $sql="SELECT * FROM rechauffement";
    $req=mysqli_query(connect(),$sql);
    $result=$req->fetch_all(MYSQLI_ASSOC);
    //mysqli_free_result($req);    
    return $result;
}

function getImages() {

    $sql="SELECT * FROM rechauffement";
    $req=mysqli_query(connect(),$sql);
    $result=$req->fetch_all(MYSQLI_ASSOC);
    //mysqli_free_result($req);    
    return $result;
}

?>