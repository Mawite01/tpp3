@extends('layout.master')
@section('content')
<div class="breadcrumbs">
      <div class="col-sm-4">
        <div class="page-header float-left">
          <div class="page-title">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li><a href="#">Dashboard</a></li>
              <li><a href="#">Table</a></li>
              <li class="active">Data table</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="content mt-3">
      <div class="animated fadeIn">
        <div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <strong class="card-title">Data Table</strong>
              </div>
              <div class="card-body">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($products as $d)
                    <tr>
                      <td>{{ $d->id }}</td>
                      <td>{{ $d->name }}</td>
                      <td>
                        @foreach ($d->productImages as $image)

                        <img src="{{ asset('assets/image/', $image->image)}}" alt="">
                        @endforeach
                      </td>
                      <td>
                        <a href="{{ route('products.edit', $d->id ) }}"> Edit</a>
                        <form action="{{ route('products.destroy', $d->id)}}" method="POST">
                          @csrf
                          <button>Delete</button>
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
      </div><!-- .animated -->
    </div><!-- .content -->
@endsection