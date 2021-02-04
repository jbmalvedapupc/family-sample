@extends('welcome')

@section('header')
<h1>Families</h1>   
@endsection

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Family Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($families as $family)
            <tr>
                <td>{{ $family->id }}</td>
                <td>{{ $family->family_name }}</td>
                <td>
                    <a href="{{ route('families.show', $family) }}">View</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection