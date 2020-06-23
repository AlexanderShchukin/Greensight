<?php

    //Создаем массив данных людей
    $Users = array(
        (0) => Array
            (
                (userName) => 'John',
                (userSurname) => 'Johnson',
                (userEmail) => 'John@email.com'
            ),

        (1) => Array
            (
                (userName) => 'Nick',
                (userSurname) => 'Nickson',
                (userEmail) => 'Nick@email.com'
            ),
        (2) => Array
            (
                (userName) => 'Rob',
                (userSurname) => 'Robson',
                (userEmail) => 'Rob@email.com'
            )   
    );


    //Получаем данные из формы
    $userName = $_POST['userName'];
    $userSurname = $_POST['userSurname'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    $userControlPassword = $_POST['userControlPassword'];

    //Проверяем наличие заданного E-mail в массиве
    $found_key = array_search($userEmail, array_column($Users, 'userEmail'));

    //Создаем сообщение для лога
    if($found_key){
        $textToLog = $userName.' '.$userSurname.' c E-mail: '.$userEmail.' прошел проверку и вошел в систему.';
        echo ('success');
    }
    else {
        $textToLog = $userName.' '.$userSurname.' c E-mail: '.$userEmail.' не был найден.';
        echo ('denied');
    }

    //Запись в файл
    $fileWriter = fopen('../Log.txt', 'a');
    $writeToFile = fwrite($fileWriter, $textToLog. PHP_EOL);

    fclose($fileWriter);

?>