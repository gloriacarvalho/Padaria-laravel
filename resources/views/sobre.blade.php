<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre Nós - Padaria Romeu & Julieta</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      color: #333;
    }

    /* ===== HEADER ===== */
    header {
      background: #fff;
      padding: 10px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 2px solid #ddd;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .logo img {
      width: 80px;
    }

    nav {
      display: flex;
      gap: 30px;
    }

    nav a {
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }

    nav a:hover {
      color: #b22222;
    }

    .search-box {
      display: flex;
      align-items: center;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 5px 10px;
      background: #fff;
    }

    .search-box input {
      border: none;
      outline: none;
      padding: 5px;
    }

    /* ===== SEÇÃO SOBRE ===== */
    .sobre {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      padding: 40px;
      background: #fff;
    }

    .sobre img {
      width: 500px;
      border-radius: 8px;
      margin-right: 30px;
    }

    .sobre-texto {
      flex: 1;
      background: #b22222;
      color: white;
      padding: 20px;
      border-radius: 8px;
    }

    .sobre-texto h1 {
      background:  #b22222;
      color: white;
      display: inline-block;
      padding: 8px 16px;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .sobre-texto p {
      line-height: 1.6;
      margin-bottom: 10px;
    }

    .sobre-texto ul {
      margin: 10px 0 20px 20px;
    }

    /* ===== GALERIA ===== */
    .galeria {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 10px;
      padding: 30px;
    }

    .galeria img {
      width: 100%;
      border-radius: 8px;
      object-fit: cover;
      height: 200px;
    }

    /* ===== FOOTER ===== */
    footer {
      text-align: center;
      padding: 15px;
      background: #b22222;
      color: white;
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <header>
    <div class="logo">
      <img src="img/logo.png" alt="Logo Padaria Romeu & Julieta">
    </div>
    <nav>
      <a href="#">Pães</a>
      <a href="#">Queijos e Derivados</a>
      <a href="#">Doces</a>
    </nav>
    <div class="search-box">
      <input type="text" placeholder="Pesquisar produtos">
    </div>
  </header>

 <!-- SEÇÃO SOBRE NÓS -->
 <section class="sobre">
  <img src="img2/Romeu e Julieta.png" alt="Fachada Padaria Romeu & Julieta">
  <div class="sobre-texto">
    <h1>SOBRE NÓS</h1>
    <p>A Padaria Romeu & Julieta nasceu com o propósito de trazer sabor e aconchego para o dia a dia dos nossos clientes.</p>
    <p>Localizada no coração do Rio de Janeiro, unimos tradição e modernidade em cada detalhe:</p>
    <ul>
      <li>Pães sempre fresquinhos, saindo do forno ao longo do dia.</li>
      <li>Doces e bolos preparados com receitas de família e muito carinho.</li>
      <li>Atendimento próximo, com aquele jeitinho acolhedor que faz todo mundo se sentir em casa.</li>
    </ul>
    <p>Mais do que uma padaria, somos um espaço de encontro, onde cada café da manhã e cada lanche da tarde se transformam em momentos especiais.</p>
    <p>Venha nos visitar e descubra por que a Padaria Romeu & Julieta é feita para você!</p>
  </div>
</section>
  <!-- GALERIA DE PRODUTOS -->
  <section class="galeria">
    <img src="img2/pão.jpg" alt="Pães fresquinhos">
    <img src="img2/pão doce.jpg" alt="Doces artesanais">
    <img src="img2/fachada.webp" alt="Interior da padaria">
  </section>

  <!-- FOOTER -->
  <footer>
    © 2025 Padaria Romeu & Julieta - Todos os direitos reservados
  </footer>

</body>
</html>
