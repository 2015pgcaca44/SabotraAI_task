@extends('admin.layouts.app')
<style type="text/css">
   div.divscroll { 
   margin-top: 30px; 
   padding:5px; 
   width: 100%; 
   overflow: auto; 
   margin-left: 30px;
   } 
</style>
@section('content')
<div class="row">
   <div class="container col-md-12">
      @if(count($errors) > 0)
      <div class="alert alert-danger">
         <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
         </ul>
      </div>
      @endif
      @if(\Session::has('success'))
      <div class="alert alert-success">
         <p>{{ \Session::get('success') }}</p>
      </div>
      @endif
   </div>
   <div class="row">
      <div class="col-xs-3">
          
      </div>
      <div class="col-xs-6">
          <div class="panel panel-default w3-mobile" style="margin-top:40px;">
               <div class="panel-heading w3-mobile">
                  <h3 class="panel-title" style="color: #1A20D9;">Add Task</h3>
               </div>
               <div class="panel-body w3-mobile">
                    <form class="form-horizontal" method="post" action="{{url('task_insert')}}" role="form" style="background-color: #fff;">
                        {{ csrf_field() }}
                        <div class="col-sm-12 w3-mobile">
                           <div class="form-group">
                              <label for="company" class="col-sm-3 control-label">Task Name<font color="red" size="2">*</font></label>
                              <div class="col-sm-12 w3-mobile mt-2">
                                 <input type="text" name="task" id="task" placeholder="Task Name" class="form-control" autofocus required="">
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12 w3-mobile mt-2">
                            <div class="row">
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-3">
                                </div>
                                <div class="col-sm-3">
                                    <button type="submit" class="btn btn-primary btn-block pull-right w3-mobile">Submit</button>
                                </div>
                                <div class="col-sm-3">
                                    <a class="btn btn-primary pull-right btn-block w3-mobile" href="/home">Cancel</a>
                                </div>
                            </div>
                        </div>
                        <br />
                     </form>
               </div>
           </div>
      </div>
      <div class="col-xs-3">
          
      </div>
   </div>
   <br />
</div>
@endsection()