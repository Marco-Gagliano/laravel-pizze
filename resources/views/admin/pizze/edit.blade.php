@extends('layouts.app')

@section('content')

    <div class="container">

        <form action="{{route ('admin.pizzas.update', $pizza)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
              <label for="name" class="form-label">Nome Pizza</label>
              <input    value="{{$pizza->name, old('name') }}"
                        type="text"
                        class="form-control"
                        name="name"
                        placeholder="Inserisci il nome della pizza"
                        id="name">
            </div>

            <div class="mb-4">
              <label for="description" class="form-label">Ingredienti</label>
              <input    value="{{$pizza->description, old('description') }}"
                        type="text"
                        class="form-control"
                        name="description"
                        placeholder="Inserire gli ingredienti"
                        id="description">
            </div>

            <div class="mb-4">
              <label for="price" class="form-label">Prezzo</label>
              <input    value="{{$pizza->price, old('price') }}"
                        type="text"
                        class="form-control"
                        name="price"
                        placeholder="Inserire il prezzo"
                        id="price">
            </div>

            <div class="mb-4">
              <label for="popularity" class="form-label">Voto Popolarità</label>
              <input    value="{{$pizza->popularity, old('popularity')}}"
                        type="text"
                        class="form-control"
                        name="popularity"
                        placeholder="Inserire il voto di popolarità"
                        id="popularity">
            </div>

            <div class="d-flex">
                <div>Vegetariana</div>

                <div class="form-check mb-4 mx-4">
                    <input value="sì" class="form-check-input" type="radio" name="isVegetarian" id="isVegetarian1">
                    <label class="form-check-label" for="isVegetarian">
                    Sì
                    </label>
                </div>

                <div class="form-check">
                    <input value="no" class="form-check-input" type="radio" name="isVegetarian" id="isVegetarian2" checked>
                    <label class="form-check-label" for="isVegetarian">
                    No
                    </label>
                </div>
            </div>


            <button type="submit" class="btn btn-success">Aggiorna</button>
          </form>

    </div>


@endsection

