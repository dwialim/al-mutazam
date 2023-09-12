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
                <form method='post' action="{{ route('sekolah.uks.updateUks') }}" enctype='multipart/form-data'>
                    <div class="row mb-2">
                        <label for="">Gambar</label>
                        <input type="file" name="gambar" id="gambar" class="form-control" onchange="loadFilePhoto(event)">
                    </div>
                    <div class="row mb-2">
                        <i>Ukuran tinggi maksmal 300px</i><br>
                        <?php
                        if(empty($data)){
                            ?>
                            <img id="preview-photo" src="{{url('uploads/default.jpg')}}" style="width: 50%;height: 300px">
                            <?php
                        }else{
                            ?>
                            <img id="preview-photo" src="{{url('uploads/identitas/'.$identity->foto_uks)}}" style="width: 50%;height: 300px">
                            <?php
                        }
                        ?>
                    </div>
                    <div class="row">
                        <textarea id="editor1" name="uks" rows="40" cols="100">{!! $data->uks !!}</textarea>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <input type="submit" name="edit" class="btn btn-primary btn-block" value="Simpan">
                <input type="reset" class="btn btn-warning btn-block" value="Reset">
            </div>
        </div>
	</div>
@endsection

@push('script')
<script src="{{url('assets/plugins/jquery-knob/jquery.knob.js')}}"></script>
<script src="{!! url('assets/js/ckeditor1/ckeditor.js') !!}"></script>
<script src="{!! url('assets/js/ckeditor1/adapters/jquery.js') !!}"></script>
<script type="text/javascript">
    function loadFilePhoto(event) {
        var image = URL.createObjectURL(event.target.files[0]);
            $('#preview-photo').fadeOut(function(){
                $(this).attr('src', image).fadeIn().css({
                    '-webkit-animation' : 'showSlowlyElement 700ms',
                    'animation'         : 'showSlowlyElement 700ms'
                });
            });
    };
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
</script>
@endpush