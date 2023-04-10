@extends('layouts.app')

@section('content')
    <h1>Список, удаление и добавление</h1>

    <form method="get" action="/create">
        <div class="form-group">
            <label for="exampleFormControlInput1">Имя</label>
            <input required class="form-control" name='name' id="exampleFormControlInput1" placeholder="Имя человека">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Описание</label>
            <textarea required class="form-control" name='description' id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="margin: 10px 0 50px">Добавить</button>
    </form>



    <div class="cards">
        @foreach ($peoples as $people)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $people['name'] }}</h5>
                    <p class="card-text">{{ $people['description'] }}</p>
                    <div class="card-buttons">
                        <a href="delete/{{ $people['id'] }}" class="btn btn-danger">Удалить</a>
                        <a href="edit/{{ $people['id'] }}" class="btn btn-primary">Изменить</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>


    <style>
        .cards {
            width: 100%;
            background-color: rgba(0, 0, 0, .1);
            border-radius: 10px;
            display: grid;
            gap: 20px;
            padding: 10px;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        }

        .card {
            width: auto;
        }

        .card-buttons {
            width: 100%;
            display: flex;
            gap: 10px;
        }
    </style>
@endsection
