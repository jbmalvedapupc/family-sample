@extends('welcome')

@section('header')
<h1>{{ $family->family_name }}</h1>   
@endsection

@section('content')
<label for="">Father: {{ $family->father }}</label>
<label for="">Mother: {{ $family->mother }}</label>
<button class="btn btn-secondary" id="add_field_button">Add Child</button>
<form action="{{ route('families.store', $family) }}" method="POST">
    @csrf
    <div id="input_fields_wrap">
        
    </div>
    <button class="btn btn-primary">Save</button>
</form>

@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        var wrapper = $("#input_fields_wrap"); //Fields wrapper
        var add_button = $("#add_field_button"); //Add button ID
        
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
                $(wrapper).append('<div class="form-group"><input class="form-control" type="text" name="child_name[]"/></div>'); //add input box
        });
    });
</script>
@endsection