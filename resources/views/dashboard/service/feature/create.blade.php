@extends('layouts.dashboard.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">اضافة  </h3>
                <div class="card-tools">
                    <a href="{{route('dashboard.service_feature.index')}}"> خضائص </a>
                    <a class="breadcrumb-item active">/ اضافة</a>
                </div>
              </div>
              @include('partials._errors')

              <form action="{{ route('dashboard.service_feature.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('post') }}

              <div class="card-body">
                <div class="form-group">
                  <label >الاسم</label>
                  <input type="text" name="name"  class="form-control">
                </div>
                <div class="form-group">
                  <label >الوصف</label>
                  <input type="text" name="description"  class="form-control">
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <div class="row">
            <div class="col-12">
                <input type="submit" value=" إضافة" class="btn btn-success float-right">
            </div>
        </div>
        </div>
        </form>
      </section>
    <!-- /.content -->
  </div>

</section><!-- end of content -->
@endsection