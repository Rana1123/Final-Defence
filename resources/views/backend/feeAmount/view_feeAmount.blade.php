@extends('admin.admin_master')

@section('content')


<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="row">


                <div class="col-12">

                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Fee Amount List</h3>
                            <a href="{{route('feeAmount.add')}}" style="float:right;" class="btn btn-rounded btn-success mb-5">Add FeeAmount</a>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="table-responsive">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="20%">SL No.</th>
                                            <th width="40%">Fee Category Name</th>
                                            <th width="30%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php($i=1)
                                        @foreach($data as $user)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$user['fee_category']['feeName']}}</td>
                                            <td>
                                                <a href="{{url('setups/edit/fee/amount/'.$user->fee_category_id)}}" class="btn btn-info ">Edit</a>
                                                <a href="{{url('setups/details/fee/amount/'.$user->fee_category_id)}}" class=" btn btn-primary" id="Details">Details</a>
                                            </td>


                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                            <th width="20%">SL No.</th>
                                            <th width="50%">Fee Category Name</th>
                                            <th width="30%">Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->


                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->

    </div>
</div>
@endsection
