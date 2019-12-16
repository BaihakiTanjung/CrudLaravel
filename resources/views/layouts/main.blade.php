<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Aplikasi Kosongan</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  {{-- Datatable css --}}
  <link href="{{asset('mdbpro/css/addons/datatables.min.css')}}" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="{{asset('mdbpro/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{asset('mdbpro/css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{asset('mdbpro/css/style.css')}}" rel="stylesheet">

</head>

<body class="fixed-sn blue-skin">
  @include('layouts.menu')
  @include('layouts.sidebar')
  <!--Main layout-->
  <main>

    <div class="container-fluid">

      @yield('content')

    </div>

  </main>
  <!--/Main layout-->
  @include('layouts.footer')

</body>

<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="{{asset('mdbpro/js/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('mdbpro/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('mdbpro/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('mdbpro/js/mdb.min.js')}}"></script>
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="{{asset('mdbpro/js/addons/datatables.min.js')}}"></script>
{{-- Custom Js --}}
<script type="text/javascript" src="{{asset('mdbpro/js/main.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.3.12/dist/sweetalert2.all.min.js"></script>

{{-- Js Random --}}

<script>
  $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>

<script>
  $('.hapus').click(function(){

  var hapus_id = $(this).attr('hapus-id'); 
      var link = $(this).attr('link');

  const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Apakah Kamu Yakin?',
  text: "Menghapus data dengan ID " + hapus_id + "!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Iya, Hapus sekarang!',
  cancelButtonText: 'Tidak, Tolak!',
  reverseButtons: false
}).then((result) => {
  if (result.value) {
    swalWithBootstrapButtons.fire(
      'Terhapus!',
      'Data sukses terhapus.',
      'success'
    )
    window.location = "/"+ link +"/"+ hapus_id +"/delete"
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Ditolak',
      'Data kamu tidak terhapus.',
      'error'
    )
  }
})
});
</script>

<script>
  $('#modalSubscriptionFormedit').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var id = button.data('myid') 
        var nama = button.data('myname') 
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #nama').val(nama);
  });
</script>
<script>
  $('#modalSubscriptionFormshow').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var id = button.data('myid') 
        var nama = button.data('myname') 
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #nama').val(nama);
  });
</script>

<script>
  toastr.options = {
      // "positionClass" : "md-toast-top-center"
    }
  @if(Session::has('sukses'))
    toastr.success('Data berhasil ditambah!!');  
  @endif
</script>
<script>
  toastr.options = {
      // "positionClass" : "md-toast-top-center"
    }
  @if(Session::has('suksesubah'))
    toastr.success('Data berhasil diubah!!');  
  @endif
</script>
<script>
  toastr.options = {
      // "positionClass" : "md-toast-top-center"
    }
  @if(Session::has('sukseshapus'))
    toastr.success('Data berhasil dihapus!!');  
  @endif
</script>



</html>