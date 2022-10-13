@include('navbar')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<div class="container border bg-white col-md-6">
    <div class="container-fluid text-center">
        <h1 class="m-2"><b>NOVO VEICULO<b></h1>
    </div>

    <form action="/create" method="POST">
        @csrf
        <h1><u>Identificação do Veiculo</u></h1>
        <div class="container m-2 border border-dark rounded">
            
            <div class="container-fluid m-2">
                <div class="form-group">
                    <div class="row mt-2">
                        <div class="col-3">
                            <label for="placa"><h4>Placa do Veiculo</h4></label>
                        </div>
                        <div class="col-sm ">
                            <input type="text" required class="form form-control" id="placa" maxlength="7" minlength="7" name="placa" pattern="[a-z\s]{3}[0-9]{4}$" placeholder="Insira a placa do veiculo 'Sem o hifem'"> 
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row mt-2">
                        <div class="col-3">
                            <label for="renavam"><h4>Renavam</h4></label>
                        </div>
                        <div class="col-sm ">
                            <input type="text"  required class="form form-control" id="renavam" name="renavam" placeholder="Insira o Renavam do veiculo"> 
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row mt-2">
                        <div class="col-3">
                            <label for="modelo"><h4>Modelo</h4></label>
                        </div>
                        <div class="col-sm">
                            <input type="text"  required class="form form-control" id="modelo" name="modelo" placeholder="Insira o Modelo do veiculo"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mt-2">
                            <div class="col-3">
                                <label for="marca"><h4>Marca</h4></label>
                            </div>
                            <div class="col-sm ">
                                <input type="text" required class="form form-control" name="marca" id="marca" placeholder="Insira a marca do veiculo"> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mt-2">
                            <div class="col-3">
                                <label for="ano"><h4>Ano do Veiculo</h4></label>
                            </div>
                            <div class="col-sm ">
                                <input type="number" required max="2022" min="1" class="form form-control" name="ano" id="ano" placeholder="Insira o ano do Veiculo"> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1><u>Identificação do Propietario</u></h1>
                <div class="form-group">
                    <div class="container m-2 border border-dark rounded">
                        <div class="row mt-2">
                            <div class="col-3">
                                <label for="propietario"><h4>Propietario</h4></label>
                            </div>
                            <div class="col-sm ">
                                <input type="text" required class="form form-control" name="propietario" id="propietario" placeholder="Informe o nome do propietario"> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right"> 
                    <input class="btn btn-success m-2" type="submit"  placeholder="Salvar" >
                </div>
        </div>     
    </form>
</div>
