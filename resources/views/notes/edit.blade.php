<x-app-layout>

<Div class="h3 mb-2">EDIT NOTE</Div>
{{html()->form('PUT', '/note/'.$note->id)->open()}}
{{html()->label('Enter Your Note')}}
{{html()->textarea('note', $note->note)->class('form form-control')->rows('15')}}
{{html()->hidden('_method', 'PUT')}}
{{html()->submit('Save Edit')->class('btn btn-sm  btn-primary mt-2')}}
{{html()->form()->close()}}
</x-app-layout>

