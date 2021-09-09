@extends('admin.admin_master')

@section('content')

<div class="content-wrapper">
    <div class="container-full">


        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Update Fee Categoy</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">


                            <form action="{{url('setups/update/fee/'.$data->id)}}" method="post" >
                                @csrf
                                <div class="row">
                                    <div class="col-6">



                                     
                                        <div class="form-group">
                                            <h5>Fee Categoy Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="feeName" class="form-control" required
                                                    data-validation-required-message="This field is required" value="{{$data->feeName}}" > </div>

                                        </div>




                                    </div>
                                    
                                </div>



                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit"></input>
                                </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>

    </div>
</div>

@endsection
