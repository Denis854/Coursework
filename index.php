<!DOCTYPE html>
<html lang="ru">
<head>
<?php
    require_once "functions/functions.php";
    $news = getNews (3, $_GET["id"]);
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
                for($i = 0; $i < count($news); $i++){
                     if($i == 0)
                         echo "<div id=\"bigArticle\">";
                     else
                         echo "<div class=\"article\">";
                         echo '<img src="/img/articles/'.$news[$i]["id"].'.jpg">  
                            <h2>'.$news[$i]["tittle"].'</h2> 
                            <p>'.$news[$i]["intro_text"].'</p> 
                            <a href="/article.php?id='.$news[$i]["id"].'">
                            <div>>></div>
                             </a>
                             </div>';
                     if($i == 0)
                         echo "<div class=\"clear\"><br></div>";
                }
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