
function loginDirect() {
    window.location.href = "/code/login/login.html";
}

function realizarRegistro(){

    let inputEma = document.getElementById('inputEma').value;
    let inputPass = document.getElementById('inputPass').value;

    if(validarRegistro(inputEma, inputPass) == false){
        console.log('registro inválido')
    }
    else{
        console.log('registro válido')
        inserirRegistro(inputEma, inputPass);
    }
}

function validarRegistro(inputEma, inputPass) {
    $.ajax({
        url: 'https://getpantry.cloud/apiv1/pantry/3b2cb07f-5375-46d8-981f-cf128ad64399/basket/Users'
    })
        .done(response => {
            if (inputEma != '' && inputPass != '') {
                for (let i = 0; i < response.lenght; i++) {
                    if (inputEma == response[i].email || inputPass == response[i].password) {
                        return false
                    }
                }
                return true
            }
            return false
        })
}

function inserirRegistro(email, password) {
    var settings = {
        "url": "https://getpantry.cloud/apiv1/pantry/YOUR_PANTRY_ID/basket/YOUR_BASKET_NAME",
        "method": "PUT",
        "timeout": 0,
        "headers": {
            "Content-Type": "application/json"
        },
        "data": JSON.stringify({
            "2":{
                "email": email,
                "password": password
            }
        }),
    };

    $.ajax(settings).done(function (response) {
        console.log(response);
        console.log("Sucess");
    });
}


$.ajax({
    url: 'https://getpantry.cloud/apiv1/pantry/3b2cb07f-5375-46d8-981f-cf128ad64399/basket/Users'
})
    .done(response => {
        console.log(response[1].email);
    })