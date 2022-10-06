@extends(layout())
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

<div class="p-5 bg-dark text-white">
<div class="container-fluid">
        <div class="div position-absolute top-30 start-50 translate-middle m-4 ">
            <div class="container-md6">     
                <button type="button" class="btn btn-primary btn-lg btn-success"><a class="btn btn-sucess" href="\create"> Criar Atendimento</a></button>
                <button type="button" class="btn btn-primary btn-lg"><a class="btn btn-primary" href="\Eventos"> Meus Atendimentos</a></button>
            </div>
        </div>    
</div> 
</div>
@endsection