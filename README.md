# Manipulando Formulário <img width ='48px' src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" />

## Explicando alguns trechos:

````
$texto = isset($_POST['texto']) ? $_POST['texto'] : '';

````
é usada para garantir que a variável $texto sempre tenha um valor válido. Se o formulário ainda não foi enviado ou se o campo texto está vazio, a variável $texto será inicializada com uma string vazia, evitando erros ao tentar acessar um índice inexistente no array $_POST.

Isso é especialmente útil em scripts de processamento de formulários, onde você quer garantir que todas as variáveis esperadas estejam definidas antes de usá-las.

## Análise da Linha de Código

    isset($_POST['texto']):
   A função isset() verifica se uma variável está definida e não é null. Neste caso, está verificando se $_POST['texto'] está definida.
  $_POST é um array superglobal em PHP que contém dados enviados via método HTTP POST. O campo texto se refere ao nome do input no formulário HTML.

    ?:
    
  Este é o operador ternário. Ele é uma forma abreviada de escrever um if-else.
  A expressão antes do ? é a condição a ser avaliada.

    $_POST['texto']:
  Este é o valor que será atribuído à variável $texto se a condição isset($_POST['texto']) for verdadeira, ou seja, se o campo texto estiver definido e não for null.

    :
  Este é o separador entre a parte "verdadeira" e a parte "falsa" do operador ternário.

    '':
  Este é o valor que será atribuído à variável $texto se a condição isset($_POST['texto']) for falsa, ou seja, se o campo texto não estiver definido.

## Conceito por Trás da Linha de Código

O operador ternário é uma forma concisa de escrever uma expressão condicional que atribui um valor a uma variável com base em uma condição. A linha de código completa pode ser lida como:

  Se $_POST['texto'] estiver definida (isset($_POST['texto']) for verdadeiro), então atribua seu valor à variável $texto.
  Caso contrário, atribua uma string vazia ('') à variável $texto.

## Equivalente com Estrutura if-else

A mesma lógica poderia ser escrita usando uma estrutura if-else, que ficaria assim:

````
if (isset($_POST['texto'])) {
    $texto = $_POST['texto'];
} else {
    $texto = '';
}

````

## Vantagens do Operador Ternário

  * Concisão: O operador ternário permite escrever expressões condicionais em uma única linha, o que pode tornar o código mais conciso e legível.
    Clareza: Para condições simples, o operador ternário pode ser mais claro do que uma estrutura if-else completa.

````
$_SERVER['PHP_SELF']
````
Garante que o formulário seja enviado para o próprio script

````
<?php ... ?>
````

* Para consistência e clareza, todos os trechos PHP dentro do HTML devem usar <?php echo ... ?>.
Exemplo no forms:

````
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>
            <input type="text" name="texto" value="" size="10" required>
        </label><br><br>
        <input type="submit" value="Enviar">
    </form>
```





    
