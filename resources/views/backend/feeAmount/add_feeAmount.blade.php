@extends('admin.admin_master')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper">
    <div class="container-full">


        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Fee Amount</h3>

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">


                            <form action="{{ route('store.fee.amount')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="add_item">

                                        


                                        <div class="form-group">
                                            <h5>Fee Category Select <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="fee_category_id" id="select" required
                                                    class="form-control">
                                                    <option value="" disabled="" selected="">Select Category</option>
                                                    @foreach($category as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->feeName}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5>Department Select <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="department_id[]" id="select" required
                                                            class="form-control">
                                                            <option value="" disabled="" selected="">Select Department
                                                            </option>
                                                            @foreach($department as $dep)
                                                            <option value="{{$dep->id}}">{{$dep->departmentName}}
                                                            </option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <h5>Batch Select <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="class_id[]" id="select" required
                                                            class="form-control">
                                                            <option value="" disabled="" selected="">Select Batch
                                                            </option>
                                                            @foreach($class as $cls)
                                                            <option value="{{$cls->id}}">{{$cls->className}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <h5>Amount:<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="amount[]" class="form-control" required
                                                            data-validation-required-message="This field is required">
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-2" style="padding-top:25px;">
                                                <span class="btn btn-success addeventmore">
                                                    <i class="fa fa-plus-circle"></i>
                                                </span>

                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <!-- /.End Row -->

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


<div style="visibility:hidden;">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
            <div class="row">

                <div class="col-12">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Department Select <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="department_id[]" id="select" required class="form-control">
                                        <option value="" disabled="" selected="">Select Department
                                        </option>
                                        @foreach($department as $dep)
                                        <option value="{{$dep->id}}">{{$dep->departmentName}}
                                        </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <h5>Batch Select <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="class_id[]" id="select" required class="form-control">
                                        <option value="" disabled="" selected="">Select Batch
                                        </option>
                                        @foreach($class as $cls)
                                        <option value="{{$cls->id}}">{{$cls->className}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <h5>Amount:<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="amount[]" class="form-control" required
                                        data-validation-required-message="This field is required">
                                </div>

                            </div>
                        </div>
                        <div class="col-md-2" style="padding-top:25px;">
                            <span class="btn btn-success addeventmore">
                                <i class="fa fa-plus-circle"></i>
                            </span>

                            <span class="btn btn-danger removeeventmore">
                                <i class="fa fa-minus-circle"></i>
                            </span>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


</div>

<script type="text/javascript">

$(document).ready(function() {

    var counter=0;
    $(document).on('click', '.addeventmore',function(){

        var whole_extra_item_add = $('#whole_extra_item_add').html();
        $(this).closest('.add_item').append(whole_extra_item_add);
        counter++;

    });

    $(document).on('click', '.removeeventmore',function(){

        $(this).closest('.delete_whole_extra_item_add').remove();
        counter -= 1;

    });

});


</script>

@endsection
