@include('navbar')
@extends(layout())
@section('content')

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<div class="container-fluid">
    <h1 class="text-center m-4" style="font-family: serif; Didot"><b>Meus Eventos</b></h1>
</div>
    <div class="container-fluid mr-4">
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
            @foreach ($eventUser as $eventUsers)
            <tr>
                <td><b>{{$eventUsers->id}}<b></td>
                <td>{{$eventUsers->placa}}</td>
                <td>{{$eventUsers->renavam}}</td>
                <td>{{$eventUsers->modelo}}</td>
                <td>{{$eventUsers->marca}}</td>
                <td>{{$eventUsers->ano}}</td>
                <td>{{$eventUsers->propietario}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection