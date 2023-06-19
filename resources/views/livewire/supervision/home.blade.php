<div>
    @section('content')
    <div class="card">
        <div class="card-header">
            Research | Research supervise
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-4">
                     Search student name:
                </div>
            </div>
            <h2></h2>
            <div class="row">
                <div class="col-sm-3">
                    <x-adminlte-input wire:model="title" name="iLabel" placeholder="Enter name of student"/>
                </div>
            </div>
            <hr>
            <hr>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <b>Research Data</b>
               </div>
            </div>
            <h2></h2>
            {{-- Tabel --}}
            <div class="card">
                <div class="card-body">
                     
                    <table class="table">
                        <tr>
                            <td class="col-sm-1 font-size-lg">
                            @foreach($Fold as $item)
                                {{$loop->iteration}}
                            @endforeach</td>
                            <td class="col-sm-6 text-center">Nama Mahasiswa</td>
                            <td class="col-sm-4 text-left">
                                @foreach($Fold as $item)
                                    {{$item->research_code}}
                                @endforeach
                            </td>  
                        </tr>
                    </table>
                    <div align="right">
                        @livewire('supervision.fold.idx') 
                    </div> 
                </div>
            </div>
        
        </div>

        <div class="card-footer text-muted">
            @ArSys<i>2023</i>
        </div>
    </div>
    @endsection
</div>
