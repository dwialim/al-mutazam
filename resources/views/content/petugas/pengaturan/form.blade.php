@extends('layout.master.main')

@push('style')
    <link href="{{asset('assets/plugins/datetimepicker/css/classic.css')}}" rel="stylesheet">
    <link href="{{asset('assets/plugins/datetimepicker/css/classic.date.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endpush

@section('content')
    <div class="page-content">
        @include('include.master.breadcrumb')
        
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="width: 100%; background-color:#ffffff">
                    <div class="card-header bg-card">	
                        <h5 class="text-card">{{$title}}</h5>
                    </div>
                    <div class="card-body">
                        <form class="row mb-3 formSave">
                            <div class="row mb-3">
                                <input type="hidden" name="id" id="id" value="{{!empty($data)?$data->id:''}}">
                                <div class="col-md-6">
                                    <label>Password Lama <small>*</small></label>
                                    <input type="text" class="form-control" autocomplete="off" name="password_lama" id="password_lama" value="{{!empty($data->lihat_password)?$data->lihat_password:''}}" required>
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label>Password Baru <small>*</small></label>
                                    <input type="text" class="form-control" autocomplete="off" name="password" id="password" placeholder="Password Baru" required>
                                </div>
                                <div class="col-md-6">
                                    <label>Ulangi Password Baru <small>*</small></label>
                                    <input type="text" class="form-control" autocomplete="off" name="ulangi_password" id="ulangi_password" placeholder="Ulangi Password Baru" required>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-sm button-custome btnSimpan">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
<script src="{{ url('assets/plugins/jquery-knob/jquery.knob.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $('.btnSimpan').click(()=>{
		var data = new FormData($('.formSave')[0])
		$('.btnSimpan').attr('disabled',true).html('<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>LOADING...')
        $.ajax({
            url: '{{route("savePengaturan")}}',
            type: 'POST',
            data: data,
            async: true,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data){
                if(data.code==200){
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: data.message,
                        showConfirmButton: false,
                        timer: 1200
                    })
                    location.reload()
                }else{
                    Swal.fire({
                        icon: 'warning',
                        title: 'Whoops',
                        text: data.message,
                        showConfirmButton: false,
                        timer: 1300,
                    })
                }
                $('.btnSimpan').attr('disabled',false).html('SIMPAN')
            }
        }).fail(()=>{
            Swal.fire({
                icon: 'error',
                title: 'Whoops..',
                text: 'Terjadi kesalahan silahkan ulangi kembali',
                showConfirmButton: false,
                timer: 1300,
            })
            $('.btnSimpan').attr('disabled',false).html('SIMPAN')
        })
	})
</script>
@endpush