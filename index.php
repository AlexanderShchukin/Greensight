<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greensight</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="d-none">Данные пользователя введены неверно</h1>
        <br>
        <form id='form'>
            <input type="text" id="userName" name="userName" placeholder="Имя:" class="form-control"><br>
            <input type="text" id="userSurname" name="userSurname" placeholder="Фамилия:" class="form-control"><br>
            <input type="E-mail" id="Email" name="email" placeholder="E-mail:" class="form-control"><br>
            <input type="password" id="password" name="password" placeholder="Пароль:" class="form-control"><br>
            <input type="password" id="controlPassword" name="passwordControl" placeholder="Подтвердите пароль:" class="form-control"><br>
            <button type="button" name="button" id="formSendBtn" class="btn btn-success">Отправить</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>