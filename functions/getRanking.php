<?php

    require_once ("inc-dbconnect.php");

    $dataRanking = $db->prepare("SELECT
	    id_user, SUM(points)
    FROM 
        ranking_users
    GROUP by 
        id_user
    ORDER BY 
        SUM(points) DESC LIMIT 3
    ");
    $dataRanking->execute();
    $dataRanking = $dataRanking->fetchAll(PDO::FETCH_ASSOC);
?>