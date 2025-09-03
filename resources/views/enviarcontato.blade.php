<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contato Recebido</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }
        header {
            background: #228b22;
            color: white;
            text-align: center;
            padding: 20px;
        }
        h1 {
            margin: 0;
        }
        .container {
            max-width: 500px;
            background: #fff;
            margin: 40px auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
        }
        p {
            font-size: 16px;
            margin: 15px 0;
            color: #333;
        }
        strong {
            color: #000;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background: #228b22;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            transition: 0.3s;
        }
        a:hover {
            background: #176917;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contato Recebido</h1>
    </header>

    <div class="container">
        <p><strong>Nome:</strong> {{ $nome }}</p>
        <p><strong>E-mail:</strong> {{ $email }}</p>
        <p><strong>Telefone:</strong> {{ $telefone }}</p>

        <a href="{{ route('contato.form') }}">Voltar ao formulário</a>
    </div>
</body>
</html>