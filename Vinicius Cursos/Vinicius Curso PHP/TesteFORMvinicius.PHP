<!DOCTYPE html>
<html>
    <head>
        <title> Documento Teste - Form</title>
    </head>
    <body bgcolor="yellow">
        <body> <!-- Determina o incio do corpo do documento  -->
        <h1> Cadastre-se ! </h1>
         <form method="POST" action='resultadoOperacaoFormVINI.php' target= '_blank'  >
            <input type= 'text' value='' name='nome' placeholder="Nome"> <br>
            <input type= 'text' value='' name='endereco' placeholder="Endereco"> <br>

            <input type='text' value='' name='bairro' placeholder="Bairro"> <br>
            <input type='text' value='' name='cidade' placeholder="Cidade"> <br>
            <input type='text' value='' name='estado' placeholder="Estado"> <br>
            <input type='text' value='' name='cep' placeholder="CEP"> <br>

            <input type= 'submit' value='Enviar'  >                   
         </form>   
    </body>
</html>