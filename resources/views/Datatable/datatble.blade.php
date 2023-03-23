@extends('layout')
@section('content')
    <h1>dalamdat</h1>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Remeber Token</th>
                <th>action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $i => $user)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->remember_token }}</td>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$user->id}}">
                        Launch demo modal
                    </button>
                </td>
                </tr>
                <x-modal id='{{$user->id}}' />
            @endforeach

        </tbody>
    </table>
    <!-- Button trigger modal -->
    

    <!-- Modal -->
    

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
