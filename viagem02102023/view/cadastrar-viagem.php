<!doctype html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Viagens 10</title>
</head>
<body>


<body  class="text-center d-flex align-items-center" style="height: 100vh; background-image: url('../assets/images/tucano.jpg'); background-position: 20% 40%;">
  <section style=" margin: auto; width:500px; height:500px display:flex;">
    <form method="post" action="../controller/processar-cadastro-viagem.php" class="form-signin border rounded p-5" style="background-color:white; margin: auto; width:500px; height:500px display:flex; align-items:center; justify-content:center;">
      <h1 class="h3 mb-3 font-weight-normal">Cadastro de Viagem</h1>

      <label for="codviagem" class="sr-only"></label>
      <input type="text" id="codviagem" name="codviagem" placeholder="Digite o código da viagem" class="form-control mb-2" required>

      <label for="nome" class="sr-only"></label>
      <input type="text" id="nome" name="nome" placeholder="Digite o nome do país" class="form-control mb-2" required>
      
      <label for="datav" class="sr-only"></label>
      <input type="date" id="datav" name="datav" placeholder="Digite a data da viagem" class="form-control mb-2" required>

      <label for="preco" class="sr-only"></label>
      <input type="text" id="preco" name="preco" placeholder="Digite o preço da viagem" class="form-control mb-2" required>

      <label for="duracao" class="sr-only"></label>
      <input type="text" id="duracao" name="duracao" placeholder="Digite a duração da viagem" class="form-control mb-2" required>
      
      <label for="categoria" class="sr-only"></label>
      <input type="text" id="categoria" name="categoria" placeholder="Digite a categoria da viagem" class="form-control mb-2" required>
      
      <label for="img" class="sr-only"></label>
      <input type="file" id="img" name="img" placeholder="Faça upload de uma foto" class="form-control mb-2" required>

    
            <div style="height: 1vh;">
                <form action="cadastrar-usuario.php" method="post" style=" margin: auto; margin-top:50px; width:400px; height:500px display:flex; align-items:center; justify-content:center;">
                    <input type="submit" name="cadastro" class="btn btn-lg btn-primary btn-block" value="Cadastrar usuário" style="background-color:#00d8ff;" />
                </form>
            </div>
  </section>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

