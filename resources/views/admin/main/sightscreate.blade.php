@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <form action="{{ route('sights_store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 mt-3 w-50">
                    <label for="name">Անուն</label>
                    <input type="text" class="form-control"  name="name">
                </div>
                <div class="mb-3 mt-3 w-50">
                    <label for="description">Նկարագրություն</label>
                    <textarea class="form-control" rows="5" id="comment" name="description"></textarea>
                </div>
                <div>
                <input type="file" id="image" name="image"><br><br>
                </div>
                <button type="submit" class="btn btn-primary">Ավելացնել</button>
            </form>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
