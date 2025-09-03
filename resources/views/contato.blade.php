<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contato - Padaria RJ</title>
    <style>
        body {
            font-family: "Segoe UI", Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }
        header {
            background: #b22222;
            color: white;
            text-align: center;
            padding: 20px;
        }
        h1 {
            margin: 0;
        }
        form {
            background: #fff;
            max-width: 500px;
            margin: 40px auto;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
        }
        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
            color: #333;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }
        input:focus {
            border-color: #b22222;
            outline: none;
            box-shadow: 0 0 4px rgba(178,34,34,0.6);
        }
        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            background: #b22222;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }
        button:hover {
            background: #8b1a1a;
        }
    </style>
</head>
<body>
    <header>
        <h1>Entre em Contato</h1>
    </header>

    <form action="{{ route('contato.enviar') }}" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>

        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" required>

        <button type="submit">Enviar</button>
    </form>
</body>
</html> 