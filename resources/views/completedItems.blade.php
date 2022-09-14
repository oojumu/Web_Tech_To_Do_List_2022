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
                                            <div class="stat-text"><span class="count">23569</span></div>
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
                                        <i class="pe-7s-check"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">3435</span></div>
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
                                            <div class="stat-text"><span class="count">349</span></div>
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
                                    <h4 class="box-title">Lists of Completed Items</h4>
                                    <div class="form-group">
                                       <!-- <button class="btn btn-success pull-right" type="submit" value="submit">Download PDF</button> -->
                                    </div>
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($completedLists as $lists)
                                                <tr>
                                                        <td class="serial">{{$lists->id}}</td>
                                                        <td>  <span class="name">{{$lists->title}}</span> </td>
                                                        <td> <span class="product">{{$lists->description}}</span> </td>
                                                        <td> <span class="product">{{$lists->responsibility}}</span> </td>
                                                        <td> <span class="product">{{$lists->phoneNo}}</span> </td>
                                                        <td>
                                                            <span class="badge badge-pending">{{$lists->status}}</span>                                                
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