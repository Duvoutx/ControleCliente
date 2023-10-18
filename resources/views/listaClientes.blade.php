<!DOCTYPE html> <html lang="en"> <head>
<meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>CRUD BASICO</title>
<style> table { width: 100%; border-collapse: collapse; } table, th, td { border: 1px solid black; } th, td { padding:
  8px; text-align: left; } a { display: inline-block; background-color: #007BFF; color: white; padding: 5px 10px;
  text-decoration: none; margin-right: 10px; border-radius: 5px; } a:hover { background-color: #0056b3; } form {
  display: inline-block; margin-right: 10px; } button { background-color: #FF4136; color: white; padding: 5px 10px;
  border: none; border-radius: 5px; cursor: pointer; } button:hover { background-color: #D30000; } </style>
  </head>

  <body>
    <h1>Listagem de Clientes</h1>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Telefone</th>
          <th scope="col">Comandos do chefe</th>
        </tr>
      </thead>
      <tbody>
        @foreach($clientes as $cliente)
        <tr>
          <th>{{ $cliente->id }}</th>
          <th>{{ $cliente->nome }}</th>
          <th>{{ $cliente->telefone }}</th>
          <th>
            <a href="{{ route('clientes-edit', ['id'=>$cliente->id])}}">Editar</a>
            <form action="{{ route('clientes-destroy', ['id'=>$cliente->id])}}" method="POST">
              @csrf
              @method('delete')
              <button type="subtmit">Deletar</buttor>
            </form>
          </th>

        </tr>
        @endforeach
      </tbody>
    </table>
    <a href="listaClientes/criaCliente">Cria Cliente</a>

  </body>

  </html>