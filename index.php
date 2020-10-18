<?php
require 'db.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HH.ru</title>

</head>

<body>
    <div class="container">
        <div class="header">
            <div class="header-info">
                <div><span class='contacts'>
                        Телефон: (499) 340-94-71
                    </span>
                    </br>
                    <span class='email'>
                        Email: info@future-group.ru
                    </span>
                </div>
                <h1>Комментарии</h1>
            </div>
            <div class="header-logo">
                <img src="img/logo.png" alt="">
            </div>
        </div>
        <div class="comments">
            <?php
            $values = mysqli_query($connection, "SELECT * from `comments`");

            while ($value = mysqli_fetch_assoc($values)) {
                $nickname = $value['nickname'];
                $date = $value['date'];
                $comment = $value['comment'];
                echo '
                <div class="comment">
                <span class="nickname">' . $nickname . '</span>
                <span class="date">' . $date . '</span>
                </br>
                <div class="comment-text"><span>' . $comment . '</span></div>
                </div>
                ';
            }
            ?>
        </div>
        <div class="newcomment">
            <h1>Оставить комментарий</h1>
            <form method="POST" type="POST" action="addcomment.php">
                <div class="nick">
                    <label class="text">Ваше имя</label>
                    <input class="input" type="text" name="nickname" required>
                </div>
                <div class="comm">
                    <label class="text">Ваш комментарий</label>
                    <textarea class="input" name="comment" required></textarea>
                </div>
                <input class="button" type="submit" value="Отправить">
            </form>
        </div>
  <div class="footer">
        <div class="footer-logo">
            <img src="img/bot-logo.png" alt="">
        </div>
        <div class="footer-info">
            <div>
                <span class='contacts'>
                    Телефон: (499) 340-94-71
                </span>
                </br>
                <span class='email'>
                    Email: info@future-group.ru
                </span>
                </br>   
                <span class='adress'>
                Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1
                </span>
                </br>   
                <span class='rights'>
                © 2010 - 2014 Future. Все права защищены
                </span>
            </div>
            
        </div>
    </div>
    </div>
  
</body>

</html>