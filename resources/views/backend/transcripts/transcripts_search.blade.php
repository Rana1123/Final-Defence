@extends('admin.admin_master')

@section('content')

<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
            <div class="row">


                <div class="col-12">
                    <div class="box bb-3 border-warning">
                        <div class="box-header">
                            <h4 class="box-title">Student <strong>Result View</strong></h4>
                        </div>

                        <div class="box-body">

                            <form method="post" action="{{ route('report.marksheet.get') }}">
                                @csrf
                                <div class="row">

 
                                    <div class="col-md-3">

                                        <div class="form-group">
                                            <h5>Department <span class="text-danger"> </span></h5>
                                            <div class="controls">
                                                <select name="dep_id" id="id" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Select Department</option>
                                                    @foreach($dep as $department)
                                                    <option value="{{ $department->id }}">{{ $department->departmentName}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                    </div> <!-- End Col md 3 -->


                                    <div class="col-md-3">

                                        <div class="form-group">
                                            <h5>Roll Number</h5> <span class="text-danger"> </span></h5>
                                            <div class="controls">
                                            <input type="text" name="id_no" class="form-control" required
                                                    data-validation-required-message="This field is required"> </div>
                                            </div>
                                        </div>

                                    </div> <!-- End Col md 3 -->


                                  




                                    <div class="col-md-3">

                                    <input type="submit" class="btn btn-rounded btn-primary" value="Submit">

                                    </div> <!-- End Col md 3 -->
                                </div><!--  end row -->


                                <!--  ////////////////// Mark Entry table /////////////  -->


                               


                            </form>


                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
</div>








@endsection