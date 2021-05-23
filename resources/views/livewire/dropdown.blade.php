<div>

<div class="row">

    <div class="col-md-3">
        <select wire:model="getuser"  class="form-control">
            <option value="" selected>Ver todos os utilizadores</option>
            @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    </div>


    @foreach( $user_data as $task)
    
    <h5>utilizador: {{ $task->name }}</h5>
    
    tarefas:
        @foreach ( $task->tasks as $tarefas)
            <li class="@if($tarefas->is_done) text-decoration-strike @endif">
                {{ $tarefas->name }}
            </li>
        @endforeach

        
    @endforeach
    

</div>
