<!DOCTYPE html>
<html lang="ru">
<head>
<?php
    require_once "functions/functions.php";
    $news = getNews (1, $_GET["id"]);
    $title = $news["tittle"];
?>
    <meta charset="UTF-8">
    <title>Plastelin</title>
    <link href="/css/style.css" rel="stylesheet">
</head>
<body>
    <header>
        <div id="logo">
        <a href="/" title="На главную"> <span>П</span>ла<span>C</span>ти<span>Л</span>ин
        </a>
        </div>
        <div id="menuHead">
        <a href="/trener.php">
        <div style="margin-right: 5%">Наши тренера</div>
        </a>
        <a href="/request.php"><div>Обратная связь</div>
        </a>
        </div>
    </header>
    <div id="wrapper">
        <div id="leftCol">
        <?php
                    echo '<div id=\"bigArticle\">
                    <img src="/img/articles/'.$news["id"].'.jpg">   
                    <p>'.$news["full_text"].'</p> 
                </div>';
            
        ?>
        
        </div> 
        <div id="rightCol">
            <div class="banner">
            <a href="/request.php">
                <img src="/img/image2.jpg" alt="акции" title="акции">
            </div>
            <div class="banner">
            <a href="/request.php">
                <img src="/img/image3.jpg" alt="акции" title="акции">
            </div>

        </div> 
    </div>
    <footer>
        <div id="social">
           <a href="http://vk.com" title="Группа ВК" target="_blank"> <img src="/img/vk.png" alt="ВК" title="ВК">
           <a href="http://instagram.com" title="Инстаграмм страницца" target="_blank"> <img src="/img/instagram.png" alt="Инстаграм" title="Инстаграм">
           <a href="http://twitter.com" title="твиттер страница" target="_blank"> <img src="/img/twitter.png" alt="твиттер" title="твиттер">
        </div>
        <div id="rights">
            Все права защищены &copy; <?=date ('Y')?>
        </div>
    </footer>
    
</body>
</html>