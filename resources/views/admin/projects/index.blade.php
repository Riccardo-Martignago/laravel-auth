@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <a href="{{ route ('admin.project.show') }}" class="card-link">Progetto</a>
                <a href="{{ route ('admin.project.edit') }}" class="card-link">Aggiorna</a>
            </tr>
        </tbody>
    </table>
@endsection
