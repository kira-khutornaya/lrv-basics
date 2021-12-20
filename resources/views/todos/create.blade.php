@extends('todos.app')

@section('content')

    <a href="{{ route('todo.index') }}" class="btn btn-outline-primary">Вернуться к списку дел</a>

    @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="mt-4" action="{{ route('todo.store') }}" method="post">
        @csrf

        <fieldset>
            <div class="mb-3">
                <label for="title" class="form-label">Название задачи</label>
                <input type="text" id="title" name="title" class="form-control" maxlength="150">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Описание задачи</label>
                <textarea class="form-control" name="description" id="description" maxlength="500"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </fieldset>
    </form>

@endsection
