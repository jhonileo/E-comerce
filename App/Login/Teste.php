<!DOCTYPE html>  <!-- Pagina de Login -->
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="/Public/Css/Teste.css">
    <link rel="shortcut icon" href="/Public/Img/logo.png">
</head>
<body>
    <div class="top-bar">
      <a href="/App/Inicio/Inicio.php">
        <div class="logo">
            <img src="/Public/Img/logo.png" alt="RR_Stilo_Fashion">
        </div>
      </a>
    </div>

    <div class="content">
        <div class="left-section">
            <h2>Fazer Login</h2>
          <p>Digite suas informações para fazer login</p>
            <form action="/App/Inicio/Inicio.php" method="POST">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha"><br>

                <button class="signup-button" type="submit">Entrar</button>
            </form>
        </div>

        <div class="right-section">
            <h2>Criar uma Conta</h2>
            <p>Se você ainda não possui uma conta, clique abaixo para se cadastrar:</p>
            <button class="signup-button" onclick="window.location.href='/App/Cadastro/Cadastro2.html'">Cadastrar</button>
        </div>
    </div>
  <br>
  <br>
  <br>
  <br>
    <div class="bottom-bar">
        <div class="footer-info">
            <p>© 2023 RR Estilo Fashion</p>
            <h4>Atendimento</h4>
          <h3> Roberta  | Fone: (61) 98384-7912</h3>
        </div>
       <div class="social">
        <a href="https://instagram.com/rr_stilofashion?igshid=MzRlODBiNWFlZA==">
        <img src="/Public/Img/instagram.png" alt="Instagram" width="50" height="50" >
    </a>
    <a href="">
        <img src="/Public/Img/whatsapp.png" alt="whatsapp" width="50" height="50" >
    </a>
       </div>
    </div>
</body>
</html>
