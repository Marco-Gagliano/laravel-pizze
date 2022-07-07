@extends('layouts.app')

@section('content')
    <div class="container">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($pizze as $pizza)

                <tr>
                    <th scope="row">{{$pizza->id}}</th>
                    <td>{{$pizza->name}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route ('admin.pizzas.show', $pizza)}}">MOSTRA</a>
                        <a class="btn btn-warning mx-3" href="#">MODIFICA</a>
                        <a class="btn btn-danger" href="">CANCELLA</a>
                    </td>

                </tr>
                @endforeach

            </tbody>
          </table>
    </div>
@endsection
