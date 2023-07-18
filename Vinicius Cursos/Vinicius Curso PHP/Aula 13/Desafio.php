<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
<div class="testbox">
      <form action="DesafioExibir2.php" method='POST'>
        <h1>Cadastro de Cursos</h1>
        <p>Informe os seus dado corretamente:</p>
        <hr/>
        <div class="item">
          <p> Nome do curso </p>
          <input type="text" name='Nomecurso' placeholder="Nome" required/>
        </div>
        <div class="item">
          <p>Nome do Professor</p>
          <input type="text" name='Professor' placeholder="Nome" required/>
        </div>
        <div class="item">
          <p>Data de inicio</p>
          <input type="date" name='DataInicio' required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
          <p>Data de término</p>
          <input type="date" name='DataFim' required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="btn-block">
          <button type="submit" href="/">Enviar</button>
        </div>
      </form>
</div>    
</body>
</html>