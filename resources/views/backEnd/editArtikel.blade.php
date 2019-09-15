@extends('layoutEnd.app')
@section('title','Edit Artikel')
@section('content')  

  <div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Artikel</h4>
                  <p class="card-description">
                    Masukan Artikel yang Sesuai dan Tepat
                  </p>
                  @foreach($editArtikel as $data)
                  <form class="forms-sample" method="POST" action="{{ route('ArtikelIn.update', $data->id) }}">
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
                      <label for="exampleInputName1">Judul Artikel</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="judulArtikel" value="{{ $data->judul }}">
                    </div>  
                    <div class="form-group">
                      <label>Foto-foto Artikel </label>
                      <a href="{{ route('admin.editFotoArt', $data->id) }}" class="btn btn-dark btn-lg btn-block">Detail </a>
                    </div>                                    
                    <div class="form-group">
                      <label for="exampleInputCity1">Sumber Foto</label>
                      <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location" name="sumberFoto" value="{{ $data->sumber_foto }}">
                    </div>                    
                    <div class="form-group">
                      <label for="exampleTextarea1">Isi Artikel</label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="isiArtikel">{{ $data->isi_artikel }}</textarea>
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