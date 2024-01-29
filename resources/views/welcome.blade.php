@extends('layouts.master')
@section('content')
<h1 class="text-center mt-2">
    Műtárgy védelmi rendeszer
</h1>

<div class="container text-white mt-3">
    <div class="row">
        <div class="col-4">
            <div class="bg-success p-3 rounded text-center">
                Utolsó mérés:<br>
                {{$utolsoAdat->cm}} cm
            </div>
        </div>
        <div class="col-4">
            <div class="bg-danger  p-3 rounded text-center">
                Legközelebbi mérés:<br>
                {{$legkisebb}} cm
            </div>
        </div>
        <div class="col-4">
            <div class="bg-warning text-dark  p-3 rounded text-center">
                Riasztások száma:<br>
                {{$db}} db
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h2 class="mt-3">Utolsó 15 mérési adat:</h2>

    <table class="table table-hover table-warning table-striped table-bordered">
        <tr>
            <th>Sorszám</th>
            <th>Mért adat</th>
            <th>Mérés ideje</th>
            <th>Riasztás</th>
        </tr>
        @foreach ($utolsoAdatok as $item)
        <tr 
        @if ($item->riasztas=='1')
            class="table-danger"
        @endif
        >
            <td>#{{$item->t_id}}</td>
            <td>{{$item->cm}} cm</td>
            <td>{{$item->rogzitesi_ido}}</td>
            <td>{{$item->riasztas}}</td>
        </tr>
        @endforeach
        
    </table>

</div>



@endsection