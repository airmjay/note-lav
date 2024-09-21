<x-app-layout>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                {{-- <div class="card-header">{{ __('Dashboard') }}</div> --}}                    
                        <div class="py-12">
                            <div class="h4 text-center"> Note </div>
                            <a href="{{route('note.create')}}" class="ml-2 btn btn-default btn-sm mb-2
                             border-primary">Cretate Post</a>
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
                    
                        <div class="ml-2">  {{$notes->links()}} </div>
                        </div>  
                      
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
