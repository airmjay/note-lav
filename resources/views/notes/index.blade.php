<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
<div class="py-12">
<div class="h4 text-center"> Note </div>
<a href="{{route('note.create')}}" class="btn btn-default btn-sm mb-2 border-primary">Cretate Post</a>
@if(count($notes) > 0)
<ul class="list-group">
@foreach ($notes as $note)
<li class="list-group-item">
   <a href='{{route('note.show', $note)}}'>  {{Str::words($note->note, 40)}} </a>
    <br>
    <div class="btn-group">
        <a href="{{route('note.edit', $note)}}" class="btn btn-success btn-sm btn-group-item">Edit</a> 
        <a href="{{route('note.destroy', $note)}}" class="btn btn-danger btn-sm btn-group-item">Delete</a>
    </div>
</li>

@endforeach

</ul>
@endif

{{$notes->links()}}
    </div>
</x-app-layout>

