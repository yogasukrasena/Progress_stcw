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
                  <h4 class="card-title">Input Kegiatan</h4>
                  <p class="card-description">
                    Masukan Kegiatan yang Sesuai dan Tepat
                  </p>
                  <form class="forms-sample" method="POST" action="{{ route('KegiatanIn.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      @if (session('alert'))
                        <div class="alert alert-success">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <strong>Sukses!!!</strong> {{ session('alert') }} <a href="" class="alert-link">Lanjutkan</a>.
                        </div>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Nama Kegiatan</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="namaKegiatan">
                    </div>                                                                                                
                    <div class="form-group">
                      <label for="exampleInputCity1">Tanggal Mulai</label>
                      <input type="date" class="form-control" id="exampleInputCity1" placeholder="Location" name="tanggalMulai">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputCity1">Tanggal Berakhir</label>
                      <input type="date" class="form-control" id="exampleInputCity1" placeholder="Location" name="tanggalBerakhir">
                    </div>                                       
                                                                       
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>       
          </div>
        </div>
      </div>
    </div>

@endsection