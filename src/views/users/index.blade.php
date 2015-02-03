@extends('firecat::layouts.admin')

@section('content')

<h1 class="page-header">Users</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Email</th>
            <th>Display Name</th>
            <th></th><!--edit-->
            <th></th><!--delete-->
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->email }}</td>
            <td>{{ $user->display_name }}</td>
            <td>{{ link_to_route('admin.users.edit', 'Edit', $user->id) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop
