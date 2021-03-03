
@section('scripts')
<script>
$(document).ready(function(){
    $("form[name='formAddProduct']").submit(function(e) {
    var inputData = new FormData($(this)[0]);
    e.preventDefault();
    $.ajax({
        url: '{{ url('/test/save-basic-info') }}',
        type: 'POST',
        data: inputData,
        async: false,
        success: function( message ) {
            console.log(message);
        },
        error: function( data ) {
            console.log(data);
        }
    });

    return false;
    });
});
</script>
@endsection


{!! Form::open(['url' => '/test/save-basic-info', 'autocomplete' => 'off', 'name' => 'formAddProduct', 'files' => true]) !!}
    <input type="file" class="form-control-file" name="transcript">
    <div class="form-group row justify-content-end">
        <button type="submit" class="btn btn-primary save_edu_qual">Save</button>
    </div>
{!! Form::close() !!}