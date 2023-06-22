<br> 
@foreach ($Fold1 as $item)
<table class="table">
                           <tr>
                                <td>{{$item->title}}</td>
                            </tr>
                        </table> 
                        <table class="table">
                            <tr>
                                <td class="col-sm-8"><b>Progress of supervision</b> <i>@livewire('supervision.fold.tombol_unfold')  
                                <td>
                                    <table>
                                        <span class="border-left">
                                            <b>Approval of Defense</b>
                                        </span>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><b>Applied Event</b></td>
                            </tr>
                        </table>
@endforeach