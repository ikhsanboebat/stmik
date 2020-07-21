@extends('layouts.dashboard')

@section('content')
@foreach ($errors->all() as $error)
    <script>
        Swal.fire(
         'Gagal',
         '{{ $error }}',
         'error'
        )
    </script>
@endforeach
@if(session('success'))
<script>
    Swal.fire(
     'Berhasil',
     '{{ session('success') }}',
     'success'
    )
</script>
@endif
<!-- Start right Content here -->

    <!-- Start content -->
    <div class="content">
        <div class="">
            <div class="page-header-title">
                <h4 class="page-title"><i class="mdi mdi-account-settings-variant"></i> Pengaturan</h4>
            </div>
        </div>
        <div class="page-content-wrapper ">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('pengaturan.ubahpassword.cont') }}" method="POST">
                                    @csrf
                                    <h4 class="m-b-30 m-t-0"><i class="mdi mdi-key-variant"></i> Ubah Password</h4>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="">Password Lama</label>
                                            <input id="current-password" type="password" class="form-control" placeholder="Masukan Password Lama anda" name="current_password" required>

                                            <label for="" class="mt-3">Password Baru</label>
                                            <input id="new-password" type="password" class="form-control" placeholder="Masukan Password Baru anda" name="new_password" required>

                                            <label for="" class="mt-3">Ketik Ulang Password Baru</label>
                                            <input id="new-password-confirm" type="password" class="form-control" placeholder="Masukan Kembali Password Baru anda" name="confirm_password" required>

                                            <button type="submit" class="btn btn-primary btn-block mt-3"> <i class="fas fa-recycle"></i> Ubah Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-b-30 m-t-0"> <i class="mdi mdi-history"></i> Riwayat Pergantian Password
                                </h4>
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Time</th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            @foreach ($history_pw as $his_pw)
                                                <tr>
                                                    <td>{{ isset($ia) ? ++$ia : $ia=1 }}</td>
                                                    <td>{{ $his_pw->history_timestamp }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div><!-- container-fluid -->


        </div> <!-- Page content Wrapper -->

    </div> <!-- content -->
@endsection