@extends('layout.master.main')

@push('style')
<style>
	.card-title {
		margin-top: 40px;
	}
</style>
@endpush

@section('content')
<div class="page-content">
    @include('include.master.breadcrumb')
    
    <div class="card">
        <div class="card-header bg-card">
            <h5 class="text-card">{{$title}}</h5>
        </div>
        <div class="card-body">
            <div class="row">
                @if(session('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger" id="error-alert">
                        {{ session('error') }}
                    </div>
                @endif
                <form method='post' action="{{ route('sekolah.visimisi.updateVisimisi') }}" enctype='multipart/form-data'>
                    {{ csrf_field() }}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                        <div class="form-group mb-3">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <textarea id="editor1" name="visimisi" rows="40" cols="100" class="form-control">{!! $identity->vm !!}</textarea>
                            </div>
                        </div>
                        <div class='clearfix' style='padding-bottom:2px;'></div><hr>
                    </div> <!-- col-lg-6 -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <input type="submit" name="edit" class="btn btn-primary btn-block" value="Simpan">
                        <input type="reset" class="btn btn-warning btn-block" value="Reset">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script src="{{url('assets/plugins/jquery-knob/jquery.knob.js')}}"></script>
<script src="{{url('assets/js/ckeditor1/ckeditor.js') }}"></script>
<script src="{{url('assets/js/ckeditor1/adapters/jquery.js') }}"></script>
<script type="text/javascript">
$( 'textarea#editor1' ).ckeditor({width:'100%', height: '150px', toolbar: [
    { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: ['NewPage', 'Preview', 'Print', '-', 'Templates' ] },
    { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
    { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll', '-'] },
    { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
    { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
    { name: 'tools', items: [ 'Maximize' ] },
    '/',
    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
    { name: 'styles', items: [ 'Font', 'FontSize' ] },
    { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] },
    CKEDITOR.env.isCompatible = true,
]});
// Menghilangkan flash message setelah 3 detik
setTimeout(function() {
    $('#success-alert').fadeOut('slow');
}, 3000);
setTimeout(function() {
    $('#error-alert').fadeOut('slow');
}, 3000);
</script>
@endpush