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

        </div>

        <div class="card-footer text-muted">
            @ArSys<i>2023</i>
        </div>
    </div>
    @endsection
</div>
