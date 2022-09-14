@extends('layouts.main')

@section('content')

 <!-- Content -->
 <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-network"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{$totalLists}}</span></div>
                                            <div class="stat-heading">Total</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-like2"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{$completedLists}}</span></div>
                                            <div class="stat-heading">Completed</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">{{$unCompletedLists}}</span></div>
                                            <div class="stat-heading">In progress</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Widgets -->
               
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Lists of Items</h4>
                                </div>
                                <div class="card-body--">
                                    <div class="table-stats order-table ov-h">
                                        <table class="table ">
                                            <thead>
                                                <tr>
                                                    <th class="serial">#</th>
                                                   
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Responsibility</th>
                                                    <th>Phone no</th>
                                                    <th>Status</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                            @foreach ($lists as $list)
                                                <tr>
                                                        <td class="serial">{{$list->id}}</td>
                                                        <td>  <span class="name">{{$list->title}}</span> </td>
                                                        <td> <span class="product">{{$list->description}}</span> </td>
                                                        <td> <span class="product">{{$list->responsibility}}</span> </td>
                                                        <td> <span class="product">{{$list->phoneNo}}</span> </td>
                                                        <td>
                                                            <span class="badge badge-pending">{{$list->status}}</span>
                                                        </td>
                                                        <td>
                                                            <span class="badge badge-complete">Edit</span>
                                                        </td>
                                                       
                                                </tr>                                                                                                                                            
                                             @endforeach  
                                                
                                            </tbody>
                                        </table>
                                    </div> <!-- /.table-stats -->
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->

                </div>
                <!-- /.orders -->
            

        

            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>

        
@endsection