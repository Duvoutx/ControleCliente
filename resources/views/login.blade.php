<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

          <form action="{{ route('login') }}" method="POST">
    <div class="mb-md-5 mt-md-4 pb-5">
        <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
        <p class="text-white-50 mb-5">Entre com seu email e senha!</p>

        <div class="form-outline form-white mb-4">
            <input type="text" id="typeEmailX" name="email" class="form-control form-control-lg" />
            <label class="form-label" for="telefone">Email</label>
        </div>

        <div class="form-outline form-white mb-4">
            <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" />
            <label class="form-label" for="typePasswordX">Senha</label>
        </div>

        <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

        <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
    
</div>
</form>
            <div>
              <p class="mb-0">Não esta cadastrado? <a href="listaClientes/criaCliente" class="text-white-50 fw-bold">Cadastrar</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>