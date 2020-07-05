@extends('layouts/master')
@section('content')  

  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Input Artikel</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form-horizontal"  action="/artikel" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="judul" placeholder="Judul" name="judul" maxlength="255">
          </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Tag</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="tag" placeholder="Tag" name="tag" maxlength="255">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">ISI</label>
            <div class="col-sm-10">
              <textarea rows="6" name="isi" id="isi" class="form-control" placeholder="Isi Artikel"></textarea>
            </div>
        </div>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
        <a href="/artikel" class="btn btn-primary btn-sm float-right" role="button">Cancel</a>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
@stop

