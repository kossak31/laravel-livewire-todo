@extends('layouts.app')

@section('content')
<div class="container">
   

    <h4 class="mt-5">Lista de Tarefas:</h4>

    @if (Auth::check())
        {{-- se existir login--}}
        @livewire('add-task')
        @livewire('tasks-list')
    
        @else
    
        {{-- se NAO existir login--}}
        @livewire('dropdown')
        
    @endif

</div>
@endsection