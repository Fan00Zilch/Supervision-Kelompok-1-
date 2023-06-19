@section('content')
<head>
    <title> Profile nama </title>
</head>
<div class="card">
  <div class="card-body">
    My Profile 
  </div>
</div>
<center>
  <picture>
    <img src="{{ public_path().'D:\Data\xampp\htdocs\ArSysPure\resources\views\livewire\menu\Glitch2_1.png'}}" width="200" height="200"/>
  </picture>
</center>
</p>
<div class="card">
    <div class="card-body">
        <table class="table">
              <tr>
                  <td align="right">Nama :</td>
                  <td>Iffan Nur Ilman Syarifudin</td>
              </tr>
              <tr>
                  <td align="right">NIM :</td>
                  <td>2007215</td>
              </tr>
              <tr>
                  <td align="right">Phone :</td>
                  <td>082295425318</td>
              </tr>
              <tr>
                  <td align="right">Email :</td>
                  <td>iffanurilman@upi.edu</td>
              </tr>
          </table> 
    </div>
  </div>

<!-- <picture>
  <img src="{{ public_path().'UOOG\97263210_p0.png'}}"style="width:auto;"/>
</picture> -->
@endsection('content')