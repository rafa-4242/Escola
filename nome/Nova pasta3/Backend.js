// Conceitos: Objeto, concatenação, string
let pessoa = {
    nome: "Rafala",
    idade: 20,
    saudacao: function() {
        console.log("Olá, meu nome é " + this.nome + " e eu tenho " + this.idade + " anos");
    }
};

pessoa.saudacao();

//Usando o construtor object
let carro = new Object();
bicicleta.marca = ["Shimano", "SRAM", "Campagnolo"];
bicicleta.modelo = ["ross-country", "Bikes de Trail ", "Bikes de downhill"];
bicicleta.ano = 2020;

console.log(bicicleta.marca[2]);

//Definindo classes com ES6 usando funções construtoras
class Animal {
    constructor(tipo, som) {
        this.tipo = tipo;
        this.som = som;
    }

    fazerSom() {
        console.log(this.som);
    }
}

let galinha = new Animal("galinha", "cocó");
let calopsita = new Animal("calopsita", "piu piu");

galinha.fazerSom();
calopsita.fazerSom(); 