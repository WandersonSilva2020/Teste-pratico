<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<div class="container col-md-6">
<h1>Cadastro de Veiculo Conlcuido com sucesso</h1>
<h1>
    A id do evento cadastrado: {{$events->id}}<br>
    A placa do veiculo cadastrado: {{$events->placa}}<br>
    O renavam Cadastrado: {{$events->renavam}}<br>
    O Propietario do Veiculo: {{$events->autor}}<br>
    O email do usuario que cadastrou o veiculo:{{$userMail}}<br>
</h1>
</div>
<h2></h2>