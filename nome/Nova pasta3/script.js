function logar(){
    //RECEBER DADOS
    email = document.querySelector('#email').value;
    senha = document.querySelector('#senha').value;

    //VERIFICAR DADOS
    if(!email || !senha){
        return alert('complete o campo');
    }
    //enviaros dados
    axios.post('api/users/logar',{
        email, senha
    }).then(response)