// As respostas das questões Bônus estão ao final do código.

var clientes = [
  {
  'id': 1,
  'nome': 'Luis Santos Silveira',
  'idade': 18
  },
  {
  'id': 2,
  'nome': 'Ricardo Lopes Alves',
  'idade': 30
  },
  {
  'id': 3,
  'nome': 'Gustavo Silva Junior',
  'idade': 26
  }
];

var numero = "5(1)9-876-543-21";

// 01. Percorrndo o objeto clientes e exibidno o nome de cada cliente.
// Último Sobrenome: a função SPLIT separa cada palavra da string com o nome do cliente e a função POP seleciona o último argumento separado.
// Primeiro Nome: a função SPLIT separa cada palavra da string com o nome do cliente e o [0] seleciona o argumento na primeira posição.
clientes.forEach(cliente => {
    console.log(cliente.nome.split(" ").pop() + ", " + cliente.nome.split(" ")[0]);
  }
);


// 02. Formantando a variável 'numero'
// Inicialmente, utiliza-se o REPLACE para remover caracteres especial da variável, apenas deixando os números.
numero = numero.replace(/[^0-9]/g, '');

// Posteriomente, também utiliza-se o replace com para formatar o número utilizando o padrão indicado.
numero = numero.replace(/^([0-9]{2})([0-9]{1})([0-9]{4,5})([0-9]{4})$/, "($1) $2 $3-$4");

// O resultado é exibido.
console.log(numero);


/* Bônus:
a) A ordem dos print será: 'A função é: c'; 'A função é: d'.
b) Na função b, antes da chamada da função 'alertUser', o return é declarado, o que finaliza a execução da função b. 
  Dessa maneira, a mensagem 'A função é: b' nunca será exibida na execução do código. 
  Além disso, antes de chamar a função 'alertUser', a função 'a' espera até que as funções c e d sejam concluídas (a partir do uso do AWAIT). 
  No entanto, a função d nunca é resolvida (ausência do RESOLVE), o que resulta no 'alertUser' da função 'a' não sendo chamado. 
*/
