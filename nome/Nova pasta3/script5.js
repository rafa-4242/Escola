//criando um array vazio
var numeros=[];

//adicionando itens ao array
numeros.push(5);

//acessando posição de array
console.log(numeros[0]);

//usando array map 
const numeros=[1,2,3,4,5];
const dobrados=numeros.map(numero=>numero *2);
console.log(dobrados);

//usando forEach
let notas=[8,9,7];
notas.forEach((nota,index,array)=> array[index]=nota+1);
console.log(notas);