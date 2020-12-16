<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/functions.php');


$audit_list = own_audit_list($pdo);
$buh_list = own_buh_list($pdo);
$info_list = own_info_list($pdo);
$price_list = own_price_list($pdo);
$spend_list = own_spend_list($pdo);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-cache">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/scripts/slick.min.js" type="text/javascript"></script>
    <script src="assets/scripts/scripts.js" type="text/javascript"></script>
    <script src="assets/scripts/menu.js" type="text/javascript"></script>
    <!-- <script src="assets/scripts/accordion.js" type="text/javascript"></script> -->

    <!-- Styles -->
    <link href="assets/styles/fonts.css" rel="stylesheet" type="text/css">
    <link href="assets/styles/main.css" rel="stylesheet" type="text/css">

    <title>Современные Энергетические Системы</title>
</head>

<!-- body site -->

<body>
    <!-- Header -->
    <div class="header">
        <div class="container">
            <div class="header_body">
                <!-- logo -->
                <div class="logo_header">
                    <div class="logo_img"></div>
                    <div class="logo_text">
                        <p>Современные</p>
                        <p>Энергетические</p>
                        <p>Системы</p>
                    </div>
                </div>
                <!-- Menu Burger -->
                <div class="header_burger">
                    <span></span>
                </div>
                <!-- Standart Menu -->
                <nav class="menu">
                    <ul class="menu_list">
                        <a href="index.html">
                            <li id="one">Главная</li>
                        </a>
                        <a href="index.html#about_us_block">
                            <li id="two">О нас</li>
                        </a>
                        <a href="info.html#info">
                            <li class="radius" id="three">Раскрытие информации</li>
                        </a>
                        <a href="index.html#contacts">
                            <li class="radius" id="three">Контакты</li>
                        </a>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <!-- Main block - This is lider -->
        <div class="slider_main">
            <div class="slider_item">
                <div class="slider_content">
                    <div class="div-topborders"></div>
                    <h4>Добро пожаловать на сайт компании ООО «Современные Энергетические Системы»<br></h4>
                    <h1>Комплексное энергоснабжение предприятий холдинга (оптовый и розничный рынок)</h1>
                    <div class="div-bottomborders"></div>
                </div>
                <img src="assets/img/1.jpg" alt="">
            </div>
            <div class="slider_item">
                <div class="slider_content">
                    <div class="div-topborders"></div>
                    <h4>Добро пожаловать на сайт компании ООО «Современные Энергетические Системы»<br></h4>
                    <h1>Формирование и реализация мероприятий по энергосбережению и повышению энергоэффективности</h1>
                    <div class="div-bottomborders"></div>
                </div>
                <img src="assets/img/2.jpg" alt="">
            </div>
            <div class="slider_item">
                <div class="slider_content">
                    <div class="div-topborders"></div>
                    <h4>Добро пожаловать на сайт компании ООО «Современные Энергетические Системы»<br></h4>
                    <h1>Анализ и оптимизация действующих условий энергоснабжения</h1>
                    <div class="div-bottomborders"></div>
                </div>
                <img src="assets/img/3.jpg" alt="">
            </div>
            <div class="slider_item">
                <div class="slider_content">
                    <div class="div-topborders"></div>
                    <h4>Добро пожаловать на сайт компании ООО «Современные Энергетические Системы»<br></h4>
                    <h1>Создание систем коммерческого учета электроэнергии (АИИС КУЭ)</h1>
                    <div class="div-bottomborders"></div>
                </div>
                <img src="assets/img/1.jpg" alt="">
            </div>
            <div class="slider_item">
                <div class="slider_content">
                    <div class="div-topborders"></div>
                    <h4>Добро пожаловать на сайт компании ООО «Современные Энергетические Системы»<br></h4>
                    <h1>Сопровождение процедуры выхода на оптовый рынок</h1>
                    <div class="div-bottomborders"></div>
                </div>
                <img src="assets/img/2.jpg" alt="">
            </div>
            <div class="slider_item">
                <div class="slider_content">
                    <div class="div-topborders"></div>
                    <h4>Добро пожаловать на сайт компании ООО «Современные Энергетические Системы»<br></h4>
                    <h1>Строительство и модернизация собственных генерирующих объектов</h1>
                    <div class="div-bottomborders"></div>
                </div>
                <img src="assets/img/3.jpg" alt="">
            </div>
        </div>
        <!-- info-content -->
        <div id="info"class="info_main">
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
                                    <div class="info_content_block"><a href="<?php echo $value['url'] ?>" target="_blanck"><?php echo $value['name'] ?></a></div>
                                <?php } ?>
                                
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
                                    <div class="info_content_block"><a href="<?php echo $value['url'] ?>" target="_blanck"><?php echo $value['name'] ?></a></div>
                                <?php } ?>
                                
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
                                    <div class="info_content_block"><a href="<?php echo $value['url'] ?>" target="_blanck"><?php echo $value['name'] ?></a></div>
                                <?php } ?>
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
                                    <div class="info_content_block"><a href="<?php echo $value['url'] ?>" target="_blanck"><?php echo $value['name'] ?></a></div>
                                <?php } ?>
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
                                    <div class="info_content_block"><a href="<?php echo $value['url'] ?>" target="_blanck"><?php echo $value['name'] ?></a></div>
                                <?php } ?>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="accordion_item">
                    <div class="accordion-item__trigger">
                        Сведения об организации
                    </div>
                    <div class="accordion-item__content">
                        <table>
                        <tbody>
                            <tr>
                                <td>
                                    Наименование:
                                </td>
                                <td>
                                    Общество с ограниченной ответственностью «Современные Энергетические Системы» Modern Energy Systems, LLC
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Сокращенное наименование:
                                </td>
                                <td>
                                    ООО «СЭС»
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Генеральный директор:
                                </td>
                                <td>
                                    Гуторов Михаил Юрьевич
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Главный бухгалтер:
                                </td>
                                <td>
                                    Трифонов Алексей Игоревич
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Адрес местонахождения:
                                </td>
                                <td>
                                    109651, г. Москва, ул. 8-я Текстильщиков, д.11, пом.I, ком.33, оф.213
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Почтовый адрес:
                                </td>
                                <td>
                                    109651, г. Москва, ул. 8-я Текстильщиков, д.11, пом.I, ком.33, оф.213
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ИНН:
                                </td>
                                <td>
                                    7723906470
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    КПП:
                                </td>
                                <td>
                                    772301001
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    ОГРН:
                                </td>
                                <td>
                                    1147746443240
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Расчетный счет:
                                </td>
                                <td>
                                    40702810238000023047
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Корреспондентский счет:
                                </td>
                                <td>
                                    30101810400000000225
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    Наименование банка:
                                </td>
                                <td>
                                    ПАО СБЕРБАНК г. Москва
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    Генеральный директор:
                                </td>
                                <td>
                                    Гуторов Михаил Юрьевич
                                </td>
                            </tr>    
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="footer">
        <div class="logo_footer">
            <img src="assets/img/ses-logo.svg" alt="">
        </div>
        <div class="footer_text">
            <p>"Средство массовой информации под названием "ses-energo.ru" зарегистрировано в Федеральной службе по
                надзору в сфере связи,<br>
                информационных технологий и массовых коммуникаций (Роскомнадзор), <br>
                о чем выдано свидетельство о регистрации средства массовой информации серия Эл № ФС77-69756 от 05 мая
                2017г.<br>
                Учредитель: ООО "СЭС", Главный редактор: Гуторов М.Ю., Телефон: +7 (499) 706 89 79, e-mail:
                info@ses-energo.ru"
            </p><br><br>
            <p class="marc">©2020 ses-energo, with Love by Ink Pain</p><br><br>
        </div>
    </div>
    </div>
    </div>
</body>

</html>