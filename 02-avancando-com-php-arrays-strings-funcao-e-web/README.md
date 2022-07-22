# PHP: Avançando com PHP: Arrays, Strings, Função e Web

## Aula 01 - Trabalhando com arrays
* [agrupa vários valores](#)
* [também é chamado de vetor ou lista (isso depende da linguagem ou plataforma)](#)
* [usa-se [] ou array() para declarar um novo array](#)
* [acessa um elemento usamos os [], dentro dos [] vem a posição do elemento](#)
* [possui um índice que por padrão começa com 0 (zero)](#)
* [para acessar todos os elementos podemos usar uma estrutura de repetição](#)
* [para saber quantos elementos um array tem existe a função count()](#)

## Aula 02 - Arrays associativos
* [um array associativo sempre define elementos composto por uma chave e um valor: a associação entre chave e valor é feito com =>, a chave funciona como um índice explicito, o valor pode ser um valor primitivo ou outro array, a chave deve ser do tipo inteiro ou string, todos os outros tipos o PHP tenta converter](#)
* [um array associativo também é chamado de mapa ou dicionário](#)
* [podemos combinar um array simples e array associativo para definir estruturas mais complexas](#)
* [o laço foreach oferece uma forma mais expressiva de iteração: no foreach podemos acessar o índice e o valor do elemento da iteração](#)
* [arrays podem crescer e podemos adicionar novos elementos](#)
* [em arrays simples, com índice numérico, basta usar [] para adicionar um elemento no final (por exemplo, $lista[] = 12;)](#)

## Aula 03 - Criando funções
* [uma função encapsula uma funcionalidade/um código](#)
* [uma função usa a palavra chave function, possui um nome, pode ter parâmetros, tem um corpo e pode ter um retorno](#)
* [para chamar uma função usamos o nome dela passando o valor dos parâmetros](#)
* [uma função pode especificar os tipos na declaração do parâmetro (a partir da versão 7), como também o tipo do retorno](#)

## Aula 04 - Interpolação e Require
* [para acessar um valor de um array associativo dentro de string devemos omitir as aspas da chave, por exemplo "$conta[titular]"](#)
* [alternativamente podemos usar chaves em volta do array, por exemplo: "{$conta['titular']}"](#)
* [Também vimos que um código PHP pode ser separado em vários arquivos e orquestrar a execução podem usar include, require e require_once](#)
* [include não dá erro (apenas avisa) se o arquivo não existe, require dá erro](#)
* [require_once garante que o arquivo será incluído apenas uma vez](#)
* [E_NOTICE, PHP dá um aviso mas "se vira" e continua com a execução](#)
* [E_ERROR, PHP dá erro e para a execução do programa](#)

## Aula 05 - Referências e mais listas
* [](#)
* [](#)
* [](#)
* [](#)
* [](#)
* [](#)
* [](#)