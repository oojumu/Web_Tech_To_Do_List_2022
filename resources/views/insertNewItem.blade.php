@extends('layouts.main')

@section('content')
<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                 
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header"><strong>List Items</strong><small> </small></div>
                            <div class="card-body card-block">
                                <form  action="{{route('InsertItem')}}" method="post">
                                {{csrf_field()}}
                                    <div class="form-group"><label for="title" class=" form-control-label">Title</label><input type="text" id="company" name="title" placeholder="Enter task title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class=" form-control-label">Description</label>
                                        <input type="text" id="vat"  name="description" placeholder="Enter description for task" class="form-control">
                                    </div>

                                    

                                    <div class="form-group">
                                        <label for="description" class=" form-control-label">Responsibility</label><input type="text" id="vat"  name="responsibility" placeholder="Enter description for task" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="description" class=" form-control-label">Phone No</label><input type="text" id="vat"  name="phoneNo" placeholder="Enter description for task" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class=" form-control-label">Completion Date</label><input type="date" id="vat"  name="completndate" placeholder="Enter description for task" class="form-control">
                                    </div>

                                    <div class="form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label">Status</label></div>
                                            <div class="col-12 col-md-9">
                                                <select id="select" class="form-control" name= "status">
                                                    <option value="In Progress">In progress</option>
                                                    <option value="Completed">Completed</option>
                                                </select>
                                            </div>
                                    </div>

                                   

                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit" value="submit">submit</button>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>

                


        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>
@endsection
<!-- end of section -->