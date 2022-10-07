@extends(layout())
@section('content')
<div class="container border bg-white col-md-6">
    <div class="container-fluid text-center">
        <h1 class="m-2"><b>NOVO EVENTO<b></h1>
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
                            <input type="text" required class="form form-control" id="placa" name="placa" placeholder="Insira a placa do veiculo"> 
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
@endsection