class Pessoa {
    constructor(nome, idade) {
        this.nome = nome;
        this.idade = idade;
    }

    saudar() {
        return `${this.nome}`;
    }
}

// Cria uma instância da classe Pessoa
const pessoa = new Pessoa('Monique Emídio de Oliveira');

//O objeto document representa o conteúdo da página web que está sendo exibida
//O método getElementById é um método do objeto document. Ele é usado para selecionar um elemento HTML pelo seu atributo id.

// Seleciona o elemento HTML onde a mensagem será exibida
const elementoMensagem = document.getElementById('mensagem');

// Atualiza o conteúdo do parágrafo com a mensagem
elementoMensagem.innerHTML += pessoa.saudar();
