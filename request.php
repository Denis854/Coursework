<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Request</title>
    <link href="/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
            $(document).ready(function () {
                $("#done").click(function(){
                    $('#messageShow').hide();
                    var name = $("#name").val();
                    var email = $("#email").val();
                    var message = $("#message").val();
                    var fail = "";
                    if (name.length < 2) fail = "Имя слишком короткое";
                    else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0)
                        fail = "Введе некоректный Email";
                    else if(message.length < 15)
                        fail="Сообщение не менее 15 символов";
                    if(fail != ""){
                        $('#messageShow').html (fail + "<div class='clear'><br></div>");
                        $('#messageShow').show ();
                        return false;
                }
                $.ajax ({
                    url: '/feedback.php',
                    type: 'POST',
                    cache: false,
                    data: {'name': name, 'email': email,'message': message},
                    dataType: 'html',
                    success: function (data) {
                            $('#messageShow').html (data + "<div class='clear'><br></div>");
                            $('#messageShow').show ();
                        }
                     });
                });
            });
    </script>
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
            <input type="text" placeholder="Имя" id="name" name="name"><br />
            <input type="text" placeholder="Email" id="email" name="email"><br />
            <textarea name="message" id="message"placeholder="Введите сообщение"></textarea><br />
            <div id="messageShow"></div>
            <a href="/request.php">
            <input type="button" name="done" id="done" value="Отправить">
            
        </div> 
        <div id="rightCol">
            <div class="banner">
                <img src="/img/image2.jpg" alt="акции" title="акции">
            </div>
            <div class="banner">
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