<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="minhaconta.css">

</head>
<body>
    <div class="principal">
    <header id="header">
        <a id="logo" href="salgados.html"><img src="img/seta.png" width="20px"></a>
        <nav id="nav">
          <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">Menu
            <span id="hamburger"></span>
          </button>
          <ul id="menu" role="menu">
            <li><a href="/">Minha Conta</a></li>
            <li><a href="principal.html">Produtos</a></li>
            <li><a href="sobrenos.html">Sobre nós</a></li>
            <li><a href="carrinho.html">Carrinho</a></li>
            <li><a href="fale_conosco.html">Fale conosco</a></li>
          </ul>
        </nav>
      </header>
      <script src="./script.js"></script>
    </div>

    <div class="div2">
        <div class="barra">
            
            <img src="img/logo.png" width="120px" class="logo">
            <img src="img/titulo1.png" width="180px" class="titulo">
        </div>
    </div>

    <div class="div3">
     <?php
         session_start();
        include ("conecta.php");
        $logado = $_SESSION["logado"];
        $letra = substr($logado, 0, 1);
        echo($letra);
 
        $comando = $pdo->prepare("SELECT * FROM cadastro where Email='$logado'");
        $resultado = $comando->execute();
            
        while( $linhas = $comando->fetch()){
                  
        $email = $_POST["Email"];
        $senha      = $_POST["Senha"];
        $nome    = $_POST["Nome"];
        $telefone    = $_POST["Telefone"];
        $data    = $_POST["Data"];
        $cep     = $_POST["Cep"];
        $rua     = $_POST["Rua"];
        $bairro     = $_POST["Bairro"];
        $numero    = $_POST["Numero"];
        $estado   = $_POST["Estado"];
        $complemento    = $_POST["Complemento"];
      }        
      ?>
          <div class="email">
          <?php
          echo("$logado");
          ?>
      </div>
    </div>
</body>
</html>