@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenido</div>

                <div class="panel-body"><center><img height="150" width="150" src="{{ asset('images/escudo.png') }}">
                    </br>
                    <strong>Colegio "Urdaneta y Campo Elías"</strong></center>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
