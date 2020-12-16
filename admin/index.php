<?php
$ip = $_SERVER['REMOTE_ADDR'];

if($ip != '127.0.0.1' && $ip != '89.175.118.58'){
    header("Location: " . $_SERVER['DOCUMENT_ROOT']);
}
else{
include ($_SERVER['DOCUMENT_ROOT'] . '/functions.php');


$audit_list = own_audit_list($pdo);
$buh_list = own_buh_list($pdo);
$info_list = own_info_list($pdo);
$price_list = own_price_list($pdo);
$spend_list = own_spend_list($pdo);

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../assets/scripts/slick.min.js" type="text/javascript"></script>
    <script src="../assets/scripts/scripts.js" type="text/javascript"></script>
    <script src="../assets/scripts/menu.js" type="text/javascript"></script>
    <script src="../assets/scripts/accordion.js" type="text/javascript"></script>

    <!-- Styles -->
    <link href="../assets/styles/fonts.css" rel="stylesheet" type="text/css">
    <link href="../assets/styles/admin.css" rel="stylesheet" type="text/css">
    <link href="../assets/styles/main.css" rel="stylesheet" type="text/css">

    <title>Современные Энергетические Системы</title>
</head>

<!-- body site -->

<body>
    <!-- Content -->
    <div class="content">
        <!-- info-content -->
        <a name="info"></a>
        <div class="info_main">
            <div class="info_content">
                <div class="accordion_item">
                    <div class="accordion-item__trigger">
                        Раскрытие информации
                    </div>
                    <div class="accordion-item__content" style="display: block;">
                        <div class="accordion_item">
                            <div class="accordion-item__trigger">
                                Аудит
                            </div>
                            <div class="accordion-item__content">
                                <?php
                                    foreach ($audit_list as $row => $value) {
                                ?>
                                    <form method="POST" action="delete.php">
                                        <a href="../<?php echo $value['url'] ?>" target="_blanck"><?php echo $value['name'] ?></a>
                                        <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                                        <input class="btn" type="submit" name="delete_audit" value="УДАЛИТЬ"><br>
                                    </form>
                                <?php } ?>
                                <br><br><br>
                                <form method="POST" action="upload.php" enctype="multipart/form-data">
                                    <div class="add_new">
                                        Добавить новый документ:
                                        <input type="file" name="uploadedFile" required />
                                        <input class="user_input" name="name" type="text" placeholder="Имя отображаемое на сайте" required /><br><br>
                                        Дата документа:<input type="date" name="date" value="2018-07-01">
                                    </div>
                                    <input class="btn" type="submit" name="uploadBtn_audit" value="Сохранить"/>
                                </form>
                            </div>
                        </div>
                        <div class="accordion_item">
                            <div class="accordion-item__trigger">
                                Бухгалтерская отчетность
                            </div>
                            <div class="accordion-item__content">
                                <?php
                                    foreach ($buh_list as $row => $value) {
                                ?>
                                    <form method="POST" action="delete.php">
                                        <a href="../<?php echo $value['url'] ?>" target="_blanck"><?php echo $value['name'] ?></a>
                                        <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                                        <input class="btn" type="submit" name="delete_buh" value="УДАЛИТЬ"><br>
                                    </form>
                                <?php } ?>
                                <br><br><br>
                                <form method="POST" action="upload.php" enctype="multipart/form-data">
                                    <div class="add_new">
                                        Добавить новый документ:
                                        <input type="file" name="uploadedFile" required />
                                        <input class="user_input" name="name" type="text" placeholder="Имя отображаемое на сайте" required /><br><br>
                                        Дата документа:<input type="date" name="date" value="2018-07-01">
                                    </div>
                                    <input class="btn" type="submit" name="uploadBtn_buh" value="Сохранить"/>
                                </form>
                            </div>
                        </div>
                        <div class="accordion_item">
                            <div class="accordion-item__trigger">
                                Структура и объем затрат
                            </div>
                            <div class="accordion-item__content">
                                <?php
                                    foreach ($spend_list as $row => $value) {
                                ?>
                                    <form method="POST" action="delete.php">
                                        <a href="../<?php echo $value['url'] ?>" target="_blanck"><?php echo $value['name'] ?></a>
                                        <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                                        <input class="btn" type="submit" name="delete_spend" value="УДАЛИТЬ"><br>
                                    </form>
                                <?php } ?>
                                <br><br><br>
                                <form method="POST" action="upload.php" enctype="multipart/form-data">
                                    <div class="add_new">
                                        Добавить новый документ:
                                        <input type="file" name="uploadedFile" required />
                                        <input class="user_input" name="name" type="text" placeholder="Имя отображаемое на сайте" required /><br><br>
                                        Дата документа:<input type="date" name="date" value="2018-07-01">
                                    </div>
                                    <input class="btn" type="submit" name="uploadBtn_spend" value="Сохранить"/>
                                </form>
                            </div>
                        </div>
                        <div class="accordion_item">
                            <div class="accordion-item__trigger">
                                Информация об объеме фактического полезного отпуска электроэнергии и мощности
                            </div>
                            <div class="accordion-item__content">
                                <?php
                                    foreach ($info_list as $row => $value) {
                                ?>
                                    <form method="POST" action="delete.php">
                                        <a href="../<?php echo $value['url'] ?>" target="_blanck"><?php echo $value['name'] ?></a>
                                        <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
                                        <input class="btn" type="submit" name="delete_info" value="УДАЛИТЬ"><br>
                                    </form>
                                <?php } ?>
                                <br><br><br>
                                <form method="POST" action="upload.php" enctype="multipart/form-data">
                                    <div class="add_new">
                                        Добавить новый документ:
                                        <input type="file" name="uploadedFile" required />
                                        <input class="user_input" name="name" type="text" placeholder="Имя отображаемое на сайте" required /><br><br>
                                        Дата документа:<input type="date" name="date" value="2018-07-01">
                                    </div>
                                    <input class="btn" type="submit" name="uploadBtn_info" value="Сохранить"/>
                                </form>
                            </div>
                        </div>
                        <div class="accordion_item">
                            <div class="accordion-item__trigger">
                                Цена на электрическую энергию
                            </div>
                            <div class="accordion-item__content">
                                <?php
                                    foreach ($price_list as $row => $value) {
                                ?>
                                    <form method="POST" action="delete.php">
                                        <a href="../<?php echo $value['url'] ?>" target="_blanck"><?php echo $value['name'] ?></a>
                                        <input type="hidden" name = "id" value="<?php echo $value['id'] ?>">
                                        <input class="btn" type="submit" name="delete_price" value="УДАЛИТЬ"><br>
                                    </form>
                                <?php } ?>
                                <br><br><br>
                                <form method="POST" action="upload.php" enctype="multipart/form-data">
                                    <div class="add_new">
                                        Добавить новый документ:
                                        <input type="file" name="uploadedFile" required />
                                        <input class="user_input" name="name" type="text" placeholder="Имя отображаемое на сайте" required /><br><br>
                                        Дата документа:<input type="date" name="date" value="2018-07-01">
                                    </div>
                                    <input class="btn" type="submit" name="uploadBtn_price" value="Сохранить"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    </div>
    </div>
</body>

</html>
<?php } ?>