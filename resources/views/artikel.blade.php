@extends('layouts/master')

@section('content')  

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Artikel</h6>
    </div>
    <div class="card-body">
      <div>
        <a href="/artikel/create" class="btn btn-primary btn-sm" role="button" aria-disabled="true">Tambah Baru</a>
      </div>
        
        <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th >Opsi</th>
                <th>ID</th>
                <th>Judul</th>
                <th>Slug</th>
                <th>ISI</th>
                <th>Tag</th>
              </tr>
            </thead>
            <tbody>
                @foreach($data as $p)
                   <tr>
                       <td>
                           <a href="/artikel/{{$p->id}}/edit" class="btn btn-primary btn-sm" role="button">Edit</a>
                          <form action="/artikel/{{$p->id}}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" class="btn btn-danger">Hapus</button>
                          </form>
                       </td> 
                       <td>{{ $p->id }}</td>
                       <td>{{ $p->judul }}</td>
                       <td>{{ $p->slug }}</td>
                       <td>{{ $p->isi }}</td>
                       <td>{{ $p->tag }}</td>
                   </tr>
               @endforeach
               </tbody>
          </table>
        </div>
    </div>
</div>
@stop

@push('scripts')
  <!-- Page level plugins -->
<script src="{{asset('/sbadmin2/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/sbadmin2/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<link href="{{asset('/sbadmin2/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
  <!-- Page level custom scripts -->
<script src="{{asset('/sbadmin2/js/demo/datatables-demo.js')}}"></script>

<script>
    $(document).ready(function() {
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
} );
</script>
@endpush
