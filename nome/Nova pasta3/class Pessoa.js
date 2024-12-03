class anime {
    constructor(nome, idade) {
        this.nome = nome;
        this.idade = idade;
    }

    saudar() {
        return `${this.nome}`;
    }
}

// Cria uma instância da classe Pessoa
const anime = new anime('Naruto');