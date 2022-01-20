    $('#Form-envio').submit(function(e){
        let pos={
            nombre:$('#texto').val(),
            pass:$('#contraseña').val(),
        };
        $.post('../logs_php/login.php', pos, function(response){
            console.log(response);
            if(response=="1"){
                window.location.pathname="mark 1.0/source/firma/Registro.php";
            }
            else{
                document.querySelector('.ale').style.display="flex";
                document.querySelector('.parrafo').style.fontSize="15px";
            }
        });
        e.preventDefault();
    });
