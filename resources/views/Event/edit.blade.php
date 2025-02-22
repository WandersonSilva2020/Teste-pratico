@include ('navbar')
@extends(layout())
@section('content')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<div class="container-fluid text-center m-2">
    <div class="container-fluid-col-md-6">
        <h1 style = "font-family:serif,Didot;"><b>Area de Administração</b></h1>
    </div>
</div>
<div class="container-fluid">
    <table class="table table-bordered table-hover mr-2 text-center">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Placa</th>
            <th scope="col-4">Renavam</th>
            <th scope="col">Modelo</th>
            <th scope="col">Marca</th>
            <th scope="col">Ano</th>
            <th scope="col">Criador do evento</th>
            <th scope="col-4">Propietario</th>
            <th scope="col">Ação</th>
            
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
                <td>{{$events->autor}}</td>
                <td>{{$events->propietario}}</td>
                <td>
                     <div class="col-md-12">
                        <form style="text-align: center; "  action="delete/{{$events->id}}" method="POST"> 
                         <a class="btn btn-success " href="/administracao/atualizar/{{$events->id}}"><ion-icon name="create-outline"></ion-icon></a> 
                           @csrf
                            @method('DELETE')
                            <button  type="submit" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></a>
                        </form>
                    </div>                
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection