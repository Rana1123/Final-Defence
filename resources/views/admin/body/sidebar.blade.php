@php

$prefix=Request::route()->getPrefix();
$route=Route::current()->getName();

@endphp

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="{{route('dashboard')}}">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{asset('backend/images/logo-dark.png')}}" alt="">
                        <h3>EP
                            @if(Auth::user()->role=='Admin')
                            Admin


                            @elseif(Auth::user()->role=='Accountant')
                            Accountant


                            @elseif(Auth::user()->role=='Teacher')
                            Teacher


                            @else
                            Student
                            @endif


                        </h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="{{($route =='dashboard')?'active':''}}">
                <a href="{{route('dashboard')}}">
                    <i data-feather="pie-chart"></i>
                    <span>Dashboard</span>
                </a>
            </li>


    <!-------------------------------Admin Pannel---------------------------------->
            <!-- /.User Management--->
            @if(Auth::user()->role=='Admin')

            <li class="header nav-small-cap">Admin Interface</li>

            <li class="treeview {{ ($prefix =='/users')?'active':''}}">
                <a href="#">
                    <i data-feather="users"></i>

                    <span>Manage User</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('user.view')}}"><i class="ti-more"></i>View User</a></li>
                    <li><a href="{{route('user.add')}}"><i class="ti-more"></i>Add User</a></li>
                </ul>
            </li>



            <!-- /.Profile Management--->

            <li class="treeview {{($prefix=='/profile')?'active':''}}">
                <a href="#">
                    <i data-feather="user"></i> <span>Manage Profile</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('profile.view')}}"><i class="ti-more"></i>View Profile</a></li>
                    <li><a href="{{route('edit.password')}}"><i class="ti-more"></i>Edit Password</a></li>
                </ul>
            </li>

            <!-- /.Setup Management--->

            <li class="treeview {{($prefix=='/setups')?'active':''}}">
                <a href="#">
                    <i data-feather="grid"></i> <span>Setup Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('class.view')}}"><i class="ti-more"></i>View Batch</a></li>
                    <li><a href="{{route('year.view')}}"><i class="ti-more"></i>Student Year</a></li>
                    <li><a href="{{route('department.view')}}"><i class="ti-more"></i>Department</a></li>
                    <li><a href="{{route('fee.view')}}"><i class="ti-more"></i>Fee Category</a></li>
                    <li><a href="{{route('fee.amount.view')}}"><i class="ti-more"></i>Fee Category Amount</a></li>
                    <li><a href="{{route('examType.view')}}"><i class="ti-more"></i>Exam Type</a></li>
                    <li><a href="{{route('subject.view')}}"><i class="ti-more"></i>All subjects</a></li>
                    <li><a href="{{route('assign.subject.view')}}"><i class="ti-more"></i>Assign subjects</a></li>
                    <li><a href="{{route('designation.view')}}"><i class="ti-more"></i>Designation</a></li>

                </ul>
            </li>

            <!-- /.Student Management--->

            <li class="treeview {{($prefix=='/students')?'active':''}}">
                <a href="#">
                    <i data-feather="package"></i> <span>Students Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('student.registration.view')}}"><i class="ti-more"></i>Student Registration</a>
                    
                    </li>
                </ul>
            </li>


            <!------ Marks Grade Management ------->

            <li class="treeview {{($prefix=='/marks')?'active':''}}">
                <a href="#">
                    <i data-feather="package"></i> <span>Marks Grade Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
            
                    <li><a href="{{route('marks.entry.grade')}}"><i class="ti-more"></i>Student Marks Grade</a></li>

                   
                </ul>
            </li>


            <li class="treeview {{($prefix=='/report')?'active':''}}">
                <a href="#">
                    <i data-feather="package"></i> <span>Result And Transcript</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li><a href="{{route('marksheet.generate.view')}}"><i class="ti-more"></i>Student Result view</a></li>
                </ul>

            </li>

            @endif
    <!-------------------------------End Admin Pannel---------------------------------->


    <!----------------------------------Teacher Pannel---------------------------------->
            <!-- /.Advising--->

            @if(Auth::user()->role=='Admin')

            <li class="header nav-small-cap">Teacher Interface</li>

            <li class="treeview {{($prefix=='/advising')?'active':''}}">
                <a href="#">
                    <i data-feather="package"></i> <span>Advising</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('advising.view')}}"><i class="ti-more"></i>Student Advising</a></li>
                </ul>
            </li>

            <!-- /.Marks Management--->

            <li class="treeview {{($prefix=='/marks')?'active':''}}">
                <a href="#">
                    <i data-feather="package"></i> <span>Marks Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('marks.entry.add')}}"><i class="ti-more"></i>Marks Entry</a></li>
                </ul>
            </li>

            <!-- /.attendence Management--->

            <li class="treeview ">
                <a href="#">
                    <i data-feather="package"></i> <span>Course Attendence</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('marks.entry.add')}}"><i class="ti-more"></i>Attendence Entry</a></li>
                    <li><a href="{{route('marks.entry.add')}}"><i class="ti-more"></i>Attendence View</a></li>
                </ul>
            </li>

            <!-- /.exam Management--->

            <li class="treeview ">
                <a href="#">
                    <i data-feather="package"></i> <span>Exam Management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('marks.entry.add')}}"><i class="ti-more"></i>Add Exam</a></li>
                    <li><a href="{{route('marks.entry.add')}}"><i class="ti-more"></i>View Exam Report</a></li>
                </ul>
            </li>
            @endif


    <!----------------------End Teacher Pannel---------------------------------->



    <!--------------------- /.Student Section-------------------------------->
            <!-- /.User Management--->
            @if(Auth::user()->role=='Admin')

            <li class="header nav-small-cap">Student Interface</li>
            <li class="treeview ">
                <a href="#">
                    <i data-feather="message-circle"></i>

                    <span>Profile</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('profile.view')}}"><i class="ti-more"></i>View Profile</a></li>
                    <li><a href="{{route('edit.password')}}"><i class="ti-more"></i>Edit Password</a></li>
                </ul>
            </li>



            <li class="treeview ">
                <a href="#">
                    <i data-feather="message-circle"></i>

                    <span>Finance</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="ti-more"></i>View Payment & Invoice</a></li>
                    <li><a href=""><i class="ti-more"></i>Make Payment</a></li>
                </ul>
            </li>




            <li class="treeview ">
                <a href="#">
                    <i data-feather="message-circle"></i>

                    <span>Scholarship Information </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="ti-more"></i>View Scholarship Information</a></li>
                </ul>
            </li>




            <li class="treeview ">
                <a href="#">
                    <i data-feather="message-circle"></i>

                    <span>View Attendance</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="ti-more"></i>View Course Attendance</a></li>
                </ul>
            </li>


            <li class="treeview ">
                <a href="#">
                    <i data-feather="message-circle"></i>

                    <span>View Class Sheet</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="ti-more"></i>View Class Sheet</a></li>
                </ul>
            </li>



            <li class="treeview ">
                <a href="#">
                    <i data-feather="message-circle"></i>

                    <span>Online Test</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href=""><i class="ti-more"></i>Attend Online Test</a></li>
                </ul>
            </li>



            <li class="treeview ">
                <a href="#">
                    <i data-feather="message-circle"></i>

                    <span>Reports & Transcripts</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('transcript.view')}}"><i class="ti-more"></i>Academic Transcript</a></li>
                </ul>
            </li>
            @endif








    <!--------------- /.End Student Section--------------------->


    <!--------------------- /.Accounts Section-------------------------------->

            @if(Auth::user()->role=='Admin')

            <li class="header nav-small-cap">Accountant Interface</li>
            <li class="treeview  {{($prefix=='/profile')?'active':''}}">
                <a href="#">
                    <i data-feather="message-circle"></i>

                    <span>Profile</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('profile.view')}}"><i class="ti-more"></i>View Profile</a></li>
                    <li><a href="{{route('edit.password')}}"><i class="ti-more"></i>Edit Password</a></li>
                </ul>
            </li>



            <li class="treeview ">
                <a href="#">
                    <i data-feather="message-circle"></i>

                    <span>Finance</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('payment.view')}}"><i class="ti-more"></i>View Payment & Invoice</a></li>
                    <li><a href="{{route('registration.fee.view')}}"><i class="ti-more"></i>Take Registration Fee</a></li>
                    <li><a href="{{route('semester.fee.view')}}"><i class="ti-more"></i>Take Semester Fee</a></li>
                </ul>
            </li>






            @endif








    <!--------------- /.End Accounts Section--------------------->









        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings"
            aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                class="ti-email"></i></a>
        <!-- item-->
        <a href="{{route('admin.logout')}}" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                class="ti-lock"></i></a>
    </div>
</aside>
