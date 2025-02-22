@include('navbar')
@extends(layout())
@section('content')
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<!-- ion icon -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

      
    </ul>
  </div>
</nav>

<div class="container-fluid ">

  <h1 class="m-4"style = "font-family:serif,Didot;"><b> Bem Vindo {{$user}}</b></h1>

  <div class="container-fluid">
    <div class="row">
        <div class="col">
          <div class="d-grid gap-2 d-md-flex justify-content-start">
              <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <button type="button" class="btn btn-warning btn-lg m-2">Numero de veículos Registrados: {{$numeroDeEventos}}</button>
              </div>
              <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                  <button type="button" class="btn btn-primary btn-lg m-2">Seus Veículos registrados: {{$numeroMeusEventos}}</button>
              </div>
          </div>
      </div>
      <div class="col">
        <div class="d-grid gap-2 d-md-flex justify-content-end">
          <div class="btn-group" role="group" aria-label="Basic mixed styles example">
              <a class="btn btn-success btn-lg " href="/create"><ion-icon name="add-circle-outline"></ion-icon> Novo Registro de Veículo</a></button>
          </div>
        </div>
        </div>
    </div>
      
  </div>

  <div class="container-fluid text-centralize">
      <h1>Ultimos Veículos Adicionados:</h1>
  </div>
    
    <table class="table table-bordered table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Placa</th>
          <th scope="col">Renavam</th>
          <th scope="col">Modelo</th>
          <th scope="col">Marca</th>
          <th scope="col">Ano</th>
          <th scope="col">Propietario</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($event as $events)
        <tr>
          <td><b>{{$events->id}}<b></td>
          <td>{{$events->placa}}</td>
          <td>{{$events->renavam}}</td>
          <td>{{$events->modelo}}</td>
          <td>{{$events->marca}}</td>
          <td>{{$events->ano}}</td>
          <td>{{$events->propietario}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  
</div>
@endsection