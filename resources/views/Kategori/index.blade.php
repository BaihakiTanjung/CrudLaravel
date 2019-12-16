@extends('layouts.main')

@section('content')
<div class="row">
  <div class="col-md">
    <!-- Table with panel -->
    <div class="card card-cascade narrower">

      <!--Card image-->
      <div
        class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

        <div>
          <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
            <i class="far fa-file-pdf"></i>
          </button>
          <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
            <i class="far fa-file-excel"></i>
          </button>
        </div>

        <a href="" class="white-text mx-3">Data Kategori</a>

        <div>
          <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2" data-toggle="modal"
            data-target="#modalSubscriptionForm">
            <i class="fas fa-plus mt-0"></i>
          </button>
          <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
            <i class="fas fa-info-circle mt-0"></i>
          </button>
        </div>

      </div>
      <!--/Card image-->

      <div class="px-4">

        <div class="table-wrapper">
          <!--Table-->
          <table id="dtBasicExample" class="table table-hover table-responsive-md">
            {{-- <table class="table table-hover mb-0"> --}}
            <thead>
              <tr>
                <th class="th-sm">No
                </th>
                <th class="th-sm">Nama
                </th>
                <th class="th-sm">Action
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tk as $k)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$k ->nama}}</td>
                <td>
                  {{-- <a class="btn peach-gradient btn-sm" data-myid="{{$k ->id}}" data-myname="{{$k->nama}}"
                  data-toggle="modal" data-target="#modalSubscriptionFormedit"><i class="fas fa-edit mr-1"></i>Edit</a>
                  <a href="#" class="btn purple-gradient btn-sm hapus" link="kategori" hapus-id="{{$k ->id}}"><i
                      class="fas fa-trash mr-1"></i>
                    Delete</a> --}}
                  <!-- Split button -->
                  <!--Dropdown primary-->
                  <div class="dropdown">

                    <!--Trigger-->
                    <button class="btn btn-primary dropdown-toggle btn-md" type="button" id="dropdownMenu1"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>


                    <!--Menu-->
                    <div class="dropdown-menu dropdown-primary">
                      <a class="dropdown-item" href="#" data-myid="{{$k ->id}}" data-myname="{{$k->nama}}"
                        data-toggle="modal" data-target="#modalSubscriptionFormshow">Show</a>
                      <a class="dropdown-item" href="#" data-myid="{{$k ->id}}" data-myname="{{$k->nama}}"
                        data-toggle="modal" data-target="#modalSubscriptionFormedit">Edit</a>
                      <a class="dropdown-item hapus" href="#" link="kategori" hapus-id="{{$k ->id}}">Delete</a>
                    </div>
                  </div>
                  <!--/Dropdown primary-->
                  {{-- <div class="btn-group">
                    <button type="button" class="btn blue-gradient btn-sm">Action</button>
                    <button type="button" class="btn btn-primary dropdown-toggle btn-sm" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Show</a>
                      <a class="dropdown-item" href="#" data-myid="{{$k ->id}}" data-myname="{{$k->nama}}"
                  data-toggle="modal" data-target="#modalSubscriptionFormedit">Edit</a>
                  <a class="dropdown-item hapus" href="#" link="kategori" hapus-id="{{$k ->id}}">Delete</a>
                  <div class="dropdown-divider"></div>
        </div>
      </div> --}}
      </td>
      </tr>
      @endforeach
      </tbody>
      </table>
      <!--Table-->
    </div>

  </div>

</div>
<!-- Table with panel -->




</div>
</div>

<div class="modal fade" id="modalSubscriptionFormshow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Detail Kategori</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-key prefix grey-text"></i>
          <input type="text" placeholder="{{time()}}" id="id" class="form-control validate" disabled>
          <label data-error="wrong" data-success="right" for="form3">Id</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-database prefix grey-text"></i>
          <input type="text" name="nama" placeholder="{{time()}}" id="nama" class="form-control validate" disabled>
          <label data-error="wrong" data-success="right" for="form2">Nama Kategori</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn blue-gradient waves-effect ml-auto" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{route('kategori.store')}}" method="POST">
      @csrf
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Tambah Kategori</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          <div class="md-form mb-5">
            <i class="fas fa-key prefix grey-text"></i>
            <input type="text" placeholder="{{time()}}" id="form3" class="form-control validate" disabled>
            <label data-error="wrong" data-success="right" for="form3">Id</label>
          </div>

          <div class="md-form mb-4">
            <i class="fas fa-database prefix grey-text"></i>
            <input type="text" name="nama" id="form2" class="form-control validate" autofocus>
            <label data-error="wrong" data-success="right" for="form2">Nama Kategori</label>
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn blue-gradient">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
        </div>
      </div>
    </form>
  </div>
</div>


<div class="modal fade" id="modalSubscriptionFormedit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="{{route('kategori.update', 'Update')}}" method="POST">
      @csrf
      @method('put')
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Edit Kategori</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body mx-3">
          {{-- <div class="md-form mb-5"> --}}
          {{-- <i class="fas fa-key prefix grey-text"></i> --}}
          <input type="hidden" id="id" name="id" class="form-control validate">
          {{-- <label data-error="wrong" data-success="right" for="form3">Id</label> --}}
          {{-- </div> --}}

          <div class="md-form mb-4">
            <i class="fas fa-database prefix grey-text"></i>
            <input type="text" name="nama" id="nama" class="form-control validate" autofocus>
            <label data-error="wrong" data-success="right" for="form2">Nama Kategori</label>
          </div>

        </div>
        <div class="modal-footer d-flex justify-content-center">
          <button type="submit" class="btn blue-gradient">Send <i class="fas fa-paper-plane-o ml-1"></i></button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection