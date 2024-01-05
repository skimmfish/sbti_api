@extends('layouts.header')
@section('content')

<form action="{{route('upload_excel')}}" method="POST" enctype="multipart/form-data">
@csrf
@method('POST')
<!--this simple form is for uploading and importing data into the DB for display on the frontend-->
<input type="file" name="import_f" class="form-control" />
<button name="upload_file" id="upload_excel" class="btn btn-primary">Upload</button>
</form>

@endsection
