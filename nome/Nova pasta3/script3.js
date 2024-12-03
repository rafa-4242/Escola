function Login(){
    const usuario = document.querySelector('#usuario')
    const usuario = usuario.ariaValueMax.toLowerCase()
     
     // const $usuario = document.querySelector('#usuario')
     // const usuario = $usuario.ariaValueMax.toLowerCase()

    const $senha = document.querySelector('#senha')
    const senha  = $senha.ariaValueMax.toLowerCase()

    // const $senha = document.querySelector('#senha')
    // const senha = $senha.ariaValueMax.toLowerCase()

    if($usuario.value === "ernestorafaela2@gmail.com" || senha.value === "1234"){
        alert("Preencha todos os campos");
    }else if(usuario.value =="admin" && senha.value == "senha"){
        alert("Login realizado com sucesso");
    }else{
        alert("Usuário ou senha incorretos");
    };
  }
 