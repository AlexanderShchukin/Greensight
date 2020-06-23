$('#formSendBtn').on("click", function(){
    var userName = $('#userName').val().trim();
    var userSurname = $('#userSurname').val().trim();
    var userEmail = $('#Email').val().trim();
    var userPassword = $('#password').val().trim();
    var userControlPassword = $('#controlPassword').val().trim();

    if(userName == ''){
        alert('Вы не ввели имя');
        return false;
    } else if(userSurname == ''){
        alert('Вы не ввели фамилию');
        return false;
    } else if(userEmail == ''){
        alert('Вы не ввели адрес электронной почты');
        return false;
    } else if(userPassword == ''){
        alert('Вы не ввели пароль');
        return false;
    } else if(userControlPassword == ''){
        alert('Вы не ввели подтверждение пароля');
        return false;
    } else if(userPassword!=userControlPassword){
        alert('Пароли не совпадают');
        return false;
    }

    $.ajax({
        url: 'ajax/checkAuthorisationData.php',
        type: 'POST',
        cache: false,
        data: {
            'userName': userName, 
            'userSurname': userSurname, 
            'userEmail': userEmail,
            'userPassword': userPassword,
            'userControlPassword': userControlPassword
        },
        dataType: 'html',
        success: function(data){
            if (data == 'success'){
                $('form').addClass('d-none');
                $('.container').append('<h1>Пользователь зарегистрирован!</h1>');
            };

            if (data == 'denied'){
                $('h1').removeClass('d-none');
            };
        }
    })

});