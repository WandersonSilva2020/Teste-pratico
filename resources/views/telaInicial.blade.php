@extends(layout())
@section('content')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<!-- ion icon -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<div class="container-fluid ">

<h1 class="m-4">Bem vindo usúario</h1>

<div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="d-grid gap-2 d-md-flex justify-content-start">
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-warning btn-lg">Numero de eventos Criados: xxx</button>
            </div>
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                <button type="button" class="btn btn-primary btn-lg">Seus Eventos: xxx</button>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="d-grid gap-2 d-md-flex justify-content-end">
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <a class="btn btn-success btn-lg" href="/create"><ion-icon name="add-circle-outline"></ion-icon> Novo Evento</a></button>
        </div>
        </div>
      </div>

    
</div>

<div class="container-fluid text-centralize">
    <h1>Ultimos Eventos Criados:</h1>
</div>

<div class="container-fluid "> 
    <div class="card" style="width: 18rem;">     
        <div class="card-body">
            <h5 class="card-title">Nome do Evento</h5>
            <p class="card-text">Resumo do Evento:</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Categoria:</li>
            <li class="list-group-item">Cliente:</li>
            <li class="list-group-item">Atendido por:</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Vizualizar</a>
         </div>
    </div>
</div>
</div>
@endsection