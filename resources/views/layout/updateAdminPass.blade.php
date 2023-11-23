@extends('layout.master')

@section('mainSection')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hi {{ Auth::guard('admin')->user()->name }}, Update your passowrd</h1>
          </div>          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="" method="POST">
            <div class="card-body">
              <div class="form-group">
                <label for="email">Email address</label>
                <input class="form-control" id="exampleInputEmail1" value="{{ Auth::guard('admin')->user()->email }}" readonly>
              </div>
              <div class="form-group">
                <label for="current_pass">Current Password</label>
                <input type="password" class="form-control" name="current_pass" id="current_pass" placeholder="Current Password">
              </div>
              <div class="form-group">
                <label for="new_pass">New Password</label>
                <input type="password" class="form-control" name="new_pass" id="new_pass" placeholder="New Password">
              </div> 
              <div class="form-group">
                <label for="confirm_pass">Confirm Password</label>
                <input type="password" class="form-control" name="confirm_pass" id="confirm_pass" placeholder="Confirm Password">
              </div>             
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection


 
 