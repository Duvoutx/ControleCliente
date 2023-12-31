<!DOCTYPE html> <html lang="en"> <head>
<meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Edita Cliente
</title>
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        margin: 0 auto;
        width: 50%;
        padding: 20px;
    }

    h1 {
        font-size: 24px;
    }

    hr {
        border: 1px solid #ccc;
        margin-top: 10px;
    }

    form {
        text-align: left;
    }

    .form-group {
        margin: 10px 0;
    }

    label {
        display: block;
        font-weight: bold;
    }

    input[type="text"] {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #007BFF;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
</head>

<body>
    <h1>Editar seu cliente</h1>
    <hr>
    <form action="{{route('clientes-update', ['id'=>$clientes->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome">Novo Nome:</label>
            <input type="text" name="nome" placeholder="Digite seu novo nome">
        </div>
        <div class="form-group">
            <label for="nome">Novo Telefone:</label>
            <input type="text" name="telefone" placeholder="Digite seu novo telefone">
        </div>
        <br>
        <div class="form-group">
            <input type="submit" name="submit">
        </div>
    </form>
</body>

</html>