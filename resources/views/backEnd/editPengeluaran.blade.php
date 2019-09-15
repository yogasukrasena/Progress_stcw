@extends('layoutEnd.app')
@section('title','Input Artikel')
@section('content')  

  <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Input Pengeluaran</h4>
                  <p class="card-description">
                    Masukan Dana Masuk yang Sesuai dan Tepat
                  </p>
                  @foreach($Pengeluaran as $data)
                  <form class="forms-sample" method="POST" action="{{ route('PengeluaranIn.update', $data->id) }}" >
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                      @if (session('alert'))
                        <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <strong>Sukses!!!</strong> {{ session('alert') }} <a href="" class="alert-link">Lanjutkan</a>.
                        </div>
                      @endif
                    </div>                    
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Barang/Jasa</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Barang/Jasa" name="namaBarang" value="{{ $data->nama_barang_jasa }}">
                    </div>                                                                                                
                    <div class="form-group">
                      <label for="exampleInputCity1">Harga/Nominal</label>
                      <input type="number" class="form-control" id="exampleInputCity1" placeholder="Rp.xxxx" name="harga" value="{{ $data->nominal }}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Sumber Dana</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Sumber Dana" name="sumberDana" value="{{ $data->keperluan }}">
                    </div>                                         
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                  @endforeach
                </div>
              </div>
            </div>       
          </div>
        </div>
      </div>
    </div>

@endsection