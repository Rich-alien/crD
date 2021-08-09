<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @import "./style.css" screen; /* style*/
    </style>
    <title>crD</title>
</head>
<body>
<!--button for open popup-->
<button class="button"
        onclick="openPopup()">
    Кликни
</button>
<!--popup with form, for push data to mail and crm-->
<div class="popup">
    <div class="popup__presentation">
        <h1 class="popup__presentation-title"
        >Получите набор файлов для руководителя:
        </h1>
        <img class="popup__presentation-path"
             src="./src/path.png"
             alt="path"/>
        <img class="popup__presentation-book"
             src="./src/file.png"
             alt="book"/>
    </div>
    <form action="./postData.php"
          method="post"
          class="popup__form">
        <img class="popup__form-cross"
             src="./src/icons/cross.svg"
             alt="cross"
             onclick="closePopup()"/>
        <div class="popup__form-input"
        >
            <div class="popup__form-label">Введите Email для получения файлов:</div>
            <input class="popup__form-email"
                   id="email"
                   name="email"
                   placeholder="Email"
                   type="email">
            <div class="popup__form-label">Введите телефон для подтверждения доступа:</div>
            <input class="popup__form-phone"
                   id="phone"
                   name="phone"
                   placeholder="+7 (000) 000-00-00"
                   type="number">
            <div>
                <button
                        class="button__save"
                        onclick="sendData()">Скачать файлы
                    <img class="popup__form-click"
                         src="./src/icons/cursor.svg"
                         alt="click"
                    />
                </button>
                <div class="popup__form-footer">
                    <h4 class="popup__form-bottom">PDF 4,7 MB</h4>
                    <h4 class="popup__form-bottom">DOC 0,8 MB</h4>
                    <h4 class="popup__form-bottom">XLS 1,2 MB</h4>
                </div>
            </div>
        </div>
    </form>
</div>


<script src="./popup.js"></script>
</body>
</html>
