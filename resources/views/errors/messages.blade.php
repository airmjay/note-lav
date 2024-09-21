@if(count($errors) > 0)
@foreach ($errors->all() as $error)
    <div class="alert alert-sm alert-danger p-1 mt-2">{{$error}}</div>
@endforeach
@endif