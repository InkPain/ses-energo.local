<?php

include ($_SERVER['DOCUMENT_ROOT'] . '/lib/connectiondb.php');

function own_audit_list ($pdo) {
    $statement = $pdo->query("SELECT * FROM audit_posts ORDER BY `audit_posts`.`date` DESC");
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function own_buh_list ($pdo) {
    $statement = $pdo->query("SELECT * FROM buh_posts ORDER BY `buh_posts`.`date` DESC");
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function own_info_list ($pdo) {
    $statement = $pdo->query("SELECT * FROM info_posts ORDER BY `info_posts`.`date` DESC");
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function own_price_list ($pdo) {
    $statement = $pdo->query("SELECT * FROM price_posts ORDER BY `price_posts`.`date` DESC");
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function own_spend_list ($pdo) {
    $statement = $pdo->query("SELECT * FROM spend_posts ORDER BY `spend_posts`.`date` DESC");
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

?>