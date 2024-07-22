@extends('Backend.app')
@section('style')
<link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
@endsection
@section('content')

<div class="container">

    <form action="{{route('category.post')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div>
                    <label for="">Category Name</label>
                </div>
                <input type="text" class="form-control" name="category_name" placeholder="category" id="">
            </div>

            <div class="col-md-6">
                <div>
                    <label for="">Upload Image</label>
                </div>
                <input type="file" class="form-control" name="category_image"  id="">
            </div>
            <div class="col-md-12 my-3">
                <div>
                    <textarea name="description" id="summernote" cols="30" rows="10"></textarea>
                </div>

        </div>
        <div class="float-right">

            <button class="btn btn-primary">Submit</button>
        </div>


    </form>

</div>

@endsection
@section('script')

<script src="/plugins/summernote/summernote-bs4.min.js"></script>
<script>
     $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
@endsection
