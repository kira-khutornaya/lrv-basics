@extends('todos.app')

@section('content')

    <a href="{{ route('todo.create') }}" class="btn btn-primary">Создать новую задачу</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-4">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row mt-4">
        @foreach ($todos as $key => $value)
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $value['title'] }}</h5>
                        <p class="card-text">{{ $value['description'] }}</p>
                        <a href="{{ route('todo.show', $value['id']) }}" class="btn btn-outline-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
