@extends('welcome')

@section('header')
<h1>{{ $family->family_name }}</h1>   
@endsection

@section('content')
<label for="">Father: {{ $family->father }}</label>
<label for="">Mother: {{ $family->mother }}</label>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Add Child
</button>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($family->children as $child)
            <tr>
                <td>{{ $child->id }}</td>
                <td>{{ $child->child_name }}</td>
                <td>
                    <a href="#">Delete</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center">NO DATA</td>
            </tr>
        @endforelse
    </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{ route('families.store', $family) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="">Child Name:</label>
                    <input type="text" name="child_name">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
  
@endsection

@section('scripts')
<script>

</script>
@endsection