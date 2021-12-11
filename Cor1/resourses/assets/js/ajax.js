function log_in() {
    let NameUsers = $('#NameUsers').val().trim();
    let UserPasswords = $('#Passwords').val();
    if (NameUsers == '' || UserPasswords == '') {
        $('#errors').text('Логин и пароль обязательны для заполнения');
        $('#errors').show('blind',500);
        setTimeout(()=> $('#errors').hide('blind',500), 5000)
    } else {
        $.ajax({
            url:"login.php",
            type:"POST",
            data:{
                NameUsers:NameUsers,
                UserPasswords:UserPasswords,
                login_up:1
            },
            success: function(data){
                switch (data) {
                    case 'errorlogin':
                        $('#errors').text('Пользователя с таким логином не существует');
                        $('#errors').show('blind',500);
                        setTimeout(()=> $('#errors').hide('blind',500), 5000);
                        break;
                    case 'errorpass':
                        $('#errors').text('Пароль введен не верно');
                        $('#errors').show('blind',500);
                        setTimeout(()=> $('#errors').hide('blind',500), 5000);
                        break;
                    case 'suc':
                        location.replace('http://cor1');

                }
            }
        })
    }
};
function reg() {
    let NameUser = $('#NameUser').val().trim();
    if (!/^(\w+|[а-яёА-ЯЁ]+){5,20}$/.test(NameUser)){
        $('#loginerror').show('blind',100);
        return false;
    } else {
        $('#loginerror').hide('blind',100);
    }
    let NameFarm = $('#NameFarm').val().trim();
    if (!/^(\w+){5,20}$/.test(NameFarm)){
        $('#farmerror').show('blind',100);
        return false;
    }else {
        $('#farmerror').hide('blind',100);
    }
    let UserMail = $('#UserMail').val().trim();
    if (!/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/.test(UserMail)){
        $('#mailerror').show('blind',100);
        return false;
    }else {
        $('#mailerror').hide('blind',100);
    }
    let Password = $('#Password').val();
    if(Password.length < 6){
        $('#paserror').show('blind',100);
        return false;
    }else {
        $('#paserror').hide('blind',100);
    }
    if (NameUser == '' || Password == '' || NameFarm == '' || UserMail == '') {
        $('#errorss').text('Все поля обязательны для заполнения');
        $('#errorss').show('blind',500);
        setTimeout(()=> $('#errorss').hide('blind',500), 5000)
    } else {
        $.ajax({
            url:"login.php",
            type:"POST",
            data:{
                UserName:NameUser,
                FarmName:NameFarm,
                UserMail:UserMail,
                UserPassword:Password,
                sub:1
            },
            success: function(data){
                switch (data) {
                    case 'errorlogin':
                        $('#errorss').text('Пользователь с таким логином уже существует');
                        $('#errorss').show('blind',500);
                        setTimeout(()=> $('#errorss').hide('blind',500), 5000);
                        break;
                    case 'errorfarm':
                        $('#errorss').text('Пользователь с таким именем фермы уже существует');
                        $('#errorss').show('blind',500);
                        setTimeout(()=> $('#errorss').hide('blind',500), 5000);
                        break;
                    case 'errormail':
                        $('#errorss').text('Пользователь с такой почтой уже существует');
                        $('#errorss').show('blind',500);
                        setTimeout(()=> $('#errorss').hide('blind',500), 5000);
                        break;
                    case 'errorpass':
                        $('#errorss').text('Пароль введен не верно');
                        $('#errorss').show('blind',500);
                        setTimeout(()=> $('#errorss').hide('blind',500), 5000);
                        break;
                    case 'suc':
                        $('#errorss').text('Вы успешно зарегестрировались');
                        $('#errorss').show('blind',500);
                        setTimeout(()=> $('#errorss').hide('blind',500), 5000);
                        break;

                }
            }
        })
    }
}
