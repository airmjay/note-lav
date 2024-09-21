<x-app-layout>
<Div class="h3 mb-2">ADD NOTE</Div>
{{html()->form('POST')->route('note.store')->open()}}
{{html()->label('Enter Your Note')}}
{{html()->textarea('note')->class('form form-control')->rows('15')}}
{{html()->submit('Add Post')->class('btn btn-sm  btn-primary mt-2')}}
{{html()->form()->close()}}
</x-app-layout>

