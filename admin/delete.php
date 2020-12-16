<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/lib/connectiondb.php');

if (isset($_POST['delete_audit']) && $_POST['delete_audit'] == 'УДАЛИТЬ')
{
    $sth = $pdo->prepare('SELECT * FROM audit_posts WHERE id =:id');
    $id = filter_input(INPUT_POST, 'id');
    $sth->bindValue(':id', $id, PDO::PARAM_INT);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    $url=$result[0]['url'];

    if(file_exists('../'.$url)){
        unlink('../'.$url);
    }

    $sql  = 'DELETE FROM audit_posts WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $id = filter_input(INPUT_POST, 'id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $success = $stmt->execute();
}
if (isset($_POST['delete_buh']) && $_POST['delete_buh'] == 'УДАЛИТЬ')
{
    $sth = $pdo->prepare('SELECT * FROM buh_posts WHERE id =:id');
    $id = filter_input(INPUT_POST, 'id');
    $sth->bindValue(':id', $id, PDO::PARAM_INT);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    $url=$result[0]['url'];

    if(file_exists('../'.$url)){
        unlink('../'.$url);
    }

    $sql  = 'DELETE FROM buh_posts WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $id = filter_input(INPUT_POST, 'id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $success = $stmt->execute();
}
if (isset($_POST['delete_info']) && $_POST['delete_info'] == 'УДАЛИТЬ')
{
    $sth = $pdo->prepare('SELECT * FROM info_posts WHERE id =:id');
    $id = filter_input(INPUT_POST, 'id');
    $sth->bindValue(':id', $id, PDO::PARAM_INT);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    $url=$result[0]['url'];

    if(file_exists('../'.$url)){
        unlink('../'.$url);
    }

    $sql  = 'DELETE FROM info_posts WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $id = filter_input(INPUT_POST, 'id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $success = $stmt->execute();
}
if (isset($_POST['delete_spend']) && $_POST['delete_spend'] == 'УДАЛИТЬ')
{
    $sth = $pdo->prepare('SELECT * FROM spend_posts WHERE id =:id');
    $id = filter_input(INPUT_POST, 'id');
    $sth->bindValue(':id', $id, PDO::PARAM_INT);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    $url=$result[0]['url'];

    if(file_exists('../'.$url)){
        unlink('../'.$url);
    }

    $sql  = 'DELETE FROM spend_posts WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $id = filter_input(INPUT_POST, 'id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $success = $stmt->execute();
}
if (isset($_POST['delete_price']) && $_POST['delete_price'] == 'УДАЛИТЬ')
{
    $sth = $pdo->prepare('SELECT * FROM price_posts WHERE id =:id');
    $id = filter_input(INPUT_POST, 'id');
    $sth->bindValue(':id', $id, PDO::PARAM_INT);
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_ASSOC);
    $url=$result[0]['url'];

    if(file_exists('../'.$url)){
        unlink('../'.$url);
    }

    $sql  = 'DELETE FROM price_posts WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $id = filter_input(INPUT_POST, 'id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $success = $stmt->execute();
}
header("Location: index.php");
