<!DOCTYPE html>
<html>
<body>

<?php

    $nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia'];

    $cliente1 = new stdClass();
    $cliente1->nome = $nomes[0];

    $cliente2 = new stdClass();
    $cliente2->nome = $nomes[1];

    $cliente3 = new stdClass();
    $cliente3->nome = $nomes[2];

    $arrayDeClientes = [$cliente1, $cliente2, $cliente3];

      // 01. Utilizando a variável $arrayDeClientes para acessar o nome do segundo cliente. (Guilherme Rosa)
      
    echo nl2br($arrayDeClientes[1]->nome."\n");

    $arrayDeNascimento = [
    	'Francisco Souza' => '10-12-1996',
        'Arthur Golveia' => '14-01-2000',
        'Guilherme Rosa' => '26-05-1985',
        'Marcelo Planalto' => '26-05-1985'
    ];
    
    // 02. Utilizando a estrutura de dados $arrayDeNascimento para adicionar na estrutura $arrayDeClientes a data de nascimento de cada cliente.
    
    //Criando e preenchendo uma array para armazenar os nomes dos clientes já cadastrados
    $nomesArray = [];
    
    foreach($arrayDeClientes as $cliente){
   		$nomesArray[] = $cliente->nome;
	}
    
    // Percorrendo cada valor na $arrayDeNascimento
    foreach($arrayDeNascimento as $key=>$value){
    	// Verificando a existência do nome selecionado ($key) nos nomes da $arrayDeClientes ($nomesArray)
    	if(in_array($key, $nomesArray)){
        	// Identificando o index do cliente com o nome selecionado
        	$index = array_search($key, $nomesArray);
            // Adicionando a data de nascimento ao cliente identificado
            $arrayDeClientes[$index]->nascimento = $value;
            
        // Caso o nome selecionado não esteja cadastrado nos nomes disponíveis na $arrayDeClientes
      	} else {
        	//Cria um novo cliente com os dados inseridos no $arrayDeNascimento e adiciona-o na $arrayDeClientes
        	$cliente4 = new stdClass();
            $cliente4->nome = $key;
            $cliente4->nascimento = $value;
            
          	$arrayDeClientes[] = $cliente4;
            
      	}
    }
        
    // 03. Utilizando a função usort para ordenar, pela data de nascimento dos clientes, a $arrayDeClientes. Como parâmetro de ordenamento foi utilizada uma outra função (dessa vez, criada manualmente) que retorna a comparação entre os valores inseridos na propriedade 'nascimento'
    usort($arrayDeClientes, function($cli1, $cli2) {
    	return strtotime($cli1->nascimento) - strtotime($cli2->nascimento);
	});    
    
    // Continuação do exercício 03. Exibindo a $arrayDeClientes resultante (já ordenada)
    foreach($arrayDeClientes as $cliente){
        echo nl2br("\n".$cliente->nome." nascido em ".$cliente->nascimento.".");
	}  
    
?>

</body>
</html>
