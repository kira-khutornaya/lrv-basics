@extends('todos.app')

@section('content')

    <a href="{{ route('todo.index') }}" class="btn btn-outline-primary">Вернуться к списку дел</a>

    <table class="table table-striped mt-4">
        <tbody>
            <tr>
                <th scope="row">ID</th>
                <td>{{ $todo['id'] }}</td>
            </tr>
            <tr>
                <th scope="row">Название</th>
                <td>{{ $todo['title'] }}</td>
            </tr>
            <tr>
                <th scope="row">Описание</th>
                <td>{{ $todo['description'] }}</td>
            </tr>
            <tr>
                <th scope="row">Создано</th>
                <td>{{ date('d.m.Y H:i', strtotime($todo['created_at'])) }}</td>
            </tr>
            <tr>
                <th scope="row">Обновлено</th>
                <td>{{ date('d.m.Y H:i', strtotime($todo['updated_at'])) }}</td>
            </tr>
        </tbody>
    </table>

@endsection
