<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Empresarial</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        table, th, td {
            border: 1px solid #dcdcdc;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: grey;
            color: white;
            font-weight: bold;
        }

        a {
            display: inline-block;
            background-color: #007BFF;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            margin-right: 10px;
            border-radius: 5px;
            transition: background-color 0.2s;
        }

        a:hover {
            background-color: #0056b3;
        }

        form {
            display: inline-block;
            margin-right: 10px;
        }

        button {
            background-color: #FF4136;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        button:hover {
            background-color: #D30000;
        }

        a.add-button {
            background-color: #4CAF50;
        }

        a.add-button:hover {
            background-color: #45a148;
        }

        a.add-button {
            background-color: #4CAF50;
        }

        a.add-button:hover {
            background-color: #45a148;
        }
    </style>
</head>

<body>
    <h1>Agenda Empresarial</h1>
    <hr>
    <table>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <th>{{ $cliente->id }}</th>
                <th>{{ $cliente->nome }}</th>
                <th>{{ $cliente->telefone }}</th>
                <th>
                    <a href="{{ route('clientes-edit', ['id'=>$cliente->id]) }}">Editar</a>
                    <form action="{{ route('clientes-destroy', ['id'=>$cliente->id]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Deletar</button>
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a class="add-button" href="listaClientes/criaCliente">Adicionar Novo Cliente</a>
</body>

</html>
