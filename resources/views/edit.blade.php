@extends('layouts.app')

@section('content')

<h1>Изменение</h1>

    <form method="app" action="/edit/{{$people['id']}}/now">
        <div class="form-group">
            <label for="exampleFormControlInput1">Имя</label>
            <input required class="form-control" name='name' id="exampleFormControlInput1" placeholder="Имя человека"
                value="{{ $people['name'] }}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Описание</label>
            <textarea  required class="form-control" name='description' id="exampleFormControlTextarea1" rows="3">{{ $people['description'] }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="margin: 10px 0 0">Изменить</button>
    </form>
@endsection
