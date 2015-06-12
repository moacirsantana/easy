function ValidaSenha(){
                var campo1 = document.getElementById('password').value;
                var campo2 = document.getElementById('confirmpassword').value;
                if ( campo1 == campo2 ) {
                    document.getElementById('validado').style.color = "green";
                    document.getElementById('validado').innerHTML = "As senhas coincidem!" ; 
                    document.getElementById('button').disabled = false;
                }
                else {
                    document.getElementById('validado').style.color = "rgba(150, 2, 2, 0.69)";
                    document.getElementById('validado').innerHTML = "As senhas nao coincidem!" ; 
                    document.getElementById('button').disabled = true;

                }
            }
  
function validaemail() {
            if (document.getElementById('email').value == ""){
            alert("O campo de e-mail deve ser preenchido.");
            document.getElementById('email').focus();
            return false;
            }
            else {
            arroba = document.getElementById('email').value.indexOf("@");
            ponto = document.getElementById('email').value.indexOf(".");
            tamanho = document.getElementById('email').value.length;
            if (!(arroba >= 2 && ponto >= 3 && tamanho >= 9)) {
            alert ("Digite um E-mail valido!");
            document.getElementById('email').focus();
            return false;
            }
            else {
            return true;
            }
            }
            }

