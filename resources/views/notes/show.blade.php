<x-app-layout>
<div class="h4 text-center"> Note </div>
<ul class="list-group">
<li class="list-group-item">
  {{$note->note}} 
    <br>
    <div class="btn-group">
        <a href="{{route('note.edit', $note)}}" class="btn btn-success btn-sm btn-group-item">Edit</a> 
        {{html()->form('DELETE')->route('note.destroy', $note->id)->open()}}
        {{html()->submit('Delete')->class('btn btn-danger btn-sm  btn-group-item')}}
        {{html()->form()->close()}}
    </div>
</li>
</ul>
</x-app-layout>


