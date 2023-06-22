<div>
    @if($tombolA !=true)
    <div class='row'>
        <div class='col-sm-12'>
            <x-adminlte-button wire:click="tombol_Enable" class="btn-sm" label="Click here to fold/unfold" icon="fas fa-adjust"/>
        </div>
    </div>
    @else
        @livewire('supervision.fold.tombol')
    @endif
    <br>
</div>