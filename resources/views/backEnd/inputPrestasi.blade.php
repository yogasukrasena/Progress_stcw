@extends('layoutEnd.app')
@section('title','Input Prestasi')
@section('content')  

  <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Input Prestasi</h4>
                  <p class="card-description">
                    Masukan Prestasi yang Sesuai dan Tepat
                  </p>
                  <form class="forms-sample" method="POST" action="{{ route('PrestasiIn.store') }}" enctype="multipart/form-data">
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
                      <label for="exampleInputName1">Nama Prestasi</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="namaPrestasi">
                    </div>                                                                                                
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Juara Ke</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="juaraIn">
                        <option value="">Juara</option>
                        <option value="1">Juara 1</option>
                        <option value="2">Juara 2</option>
                        <option value="3">Juara 3</option>
                        <option value="4">Juara Harapan 1</option>
                        <option value="5">Juara Harapan 2</option>
                        <option value="6">Juara Harapan 3</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlSelect1">Tingkatan Juara</label>
                      <select class="form-control form-control-lg" id="exampleFormControlSelect1" name="tingkatIn">
                        <option value="">Tingkat Juara</option>
                        <option value="0">Desa</option>
                        <option value="1">Kecamatan</option>
                        <option value="2">Kabupaten</option>
                        <option value="3">Provinsi</option>
                        <option value="4">Nasional</option>
                        <option value="5">Internasional</option>
                      </select>
                    </div>                    
                    <div class="form-group">
                      <label>Foto-foto Prestasi</label>
                      <input type="file" name="fotoPrestasi[]" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Deskripsi</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="isiPrestasi"></textarea>
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