<div>
    @if($Fold1 !=true)
    <div class='row'>
        <div class='col-sm-12'>
            <x-adminlte-button wire:click="Fold_Enable" class="btn-sm" label="Click here to fold/unfold" icon="fas fa-adjust"/>
        </div>
    </div>
    @else
        @livewire('supervision.fold.add')
        @livewire('supervision.fold.tabel')
    @endif
    <br>
</div>