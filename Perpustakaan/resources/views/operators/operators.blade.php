@extends('layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->

@include('sweet::alert')
<div class="page-breadcrumb">
  <div class="row">
      <div class="col-7 align-self-center">
          <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Operators</h4>
          <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb m-0 p-0">
                      <li class="breadcrumb-item text-muted">Data</li>
                      <li class="breadcrumb-item text-muted active" aria-current="page">Operators</li>
                  </ol>
              </nav>
          </div>
      </div>
  </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid" id="app">

  <div class="card">
    <div class="card-header"><a href="operators/create" class="btn btn-primary"><i class="fas fa-plus"></i> Add Operator</a></div>
    <div class="card-body">
      <div class="table-responsive">
      <table class="table table-hover" id="table-operators">
          <thead class="bg-primary text-white">
            <tr>
              <th scope="col" style="width: 7%">No</th>
              <th scope="col">Name</th>
              <th scope="col" style="width: 10%">Gender</th>
              <th scope="col" style="width: 10%">Role</th>
              <th scope="col">Profile Picture</th>
              <th scope="col" style="width: 8%">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($operators as $operator)
              <tr>
              <th scope="row">{{$loop->iteration}}</th>
                <td>{{$operator->name}}</td>
                <td>{{$operator->gender}}</td>
                <td>{{$operator->user->role}}</td>
                <td><img src="{{$operator->getAvatar()}}" class="img-fluid" style="width:80px" alt=""></td>
                <td class="d-flex justify-content-center">
                  <a class="btn btn-sm btn-secondary text-white" href="/operators/{{$operator->id}}"><i class="fas fa-info"></i></a>
                  <a class="btn btn-sm btn-success text-white" href="/operators/{{$operator->id}}/edit"><i class="far fa-edit"></i></a>
                  <form action="/operators/{{ $operator->id }}" id="form-delete-{{$operator->id}}" method="post" class="display-inline">
                    @method('delete')
                    @csrf
                    <button type="button" class="btn btn-sm btn-danger delete" data-id="{{$operator->id}}"><i class="far fa-trash-alt"></i></button>
                  </form>
              </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
  </div>
</div>
@endsection


@section('header')
<link href="{{url('vendor/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">    
<style>
  .swal-footer {
  text-align: center;
  }
</style>
@endsection

@section('footer')
  <script src="{{url('vendor/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script>
     $('#table-operators').DataTable();


    $('.delete').click(function(){
        const id = $(this).data('id');
      const form = $('#form-delete-'+id);
      Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.value) {
              return form.submit();
            }
        })  
    });
  </script>
@endsection