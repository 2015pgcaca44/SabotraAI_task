@extends('admin.layouts.app')
@section('content')
<style type="text/css">
   @media (max-width: 600px){
   .mob_width{
   width:100%;
   }
   }
   .container{
   width:100%;
   height:100%;
   }
</style>
<div class="row">
<div class="w3-container col-md-12 w3-mobile" style="margin-left: 0px;">
   <div >
      <a class="btn btn-sm pull-right btn-primary" data-toggle="modal" data-target="#myModal"  style="width: 8%;margin-top: 4px;margin-right: 4px; margin-bottom: 10px;color: #fff;"><span class="glyphicon glyphicon-plus"></span></a>
      @if(count($errors) > 0)
      <div class="alert alert-danger w3-mobile" style="width: 100%;">
         <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
         </ul>
      </div>
      @endif
      @if(\Session::has('success'))
      <div class="alert alert-success w3-mobile" style="width: 100%;">
         <p>{{ \Session::get('success') }}</p>
      </div>
      @endif
      <div class="modal fade" id="myModal" role="dialog" aria-labelledby="favoritesModalLabel">
               <div class="modal-dialog modal-lg">
                  <div class="modal-content w3-square">
                     <div class="modal-header">
                        <h3 class="modal-title text-blue">Add Task</h3>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <div class="modal-body">
                        <div class="container" style="background-color: #fff;">
                           <form class="form-horizontal" method="post" action="{{url('task_insert')}}" role="form" enctype="multipart/form-data" style="background-color: #fff;">
                              {{ csrf_field() }}
                              <!-- <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"> -->
                              <div class="table-responsive">
                                <table class="table-all align-items-center col-sm-12" style="width: 93%; margin-left: 5%;">
                                   <tr colspan="2">
                                      <td class="w3-mobile" style="width: 50%;">
                                         <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Task Name</label>
                                             <div class="col-md-10 w3-mobile">
                                                <input type="text" name="task" id="task" placeholder="Task name" class="form-control" autofocus required>
                                             </div>
                                         </div>
                                      </td>
                                </table>
                             </div><br /><br /><br />
                              <div class="modal-footer">
                                 <input type="submit" name="submit" value="Submit" class="btn btn-primary py-2 px-4" />
                                 <button type="button" class="btn btn-primary py-2 px-4" data-dismiss="modal">Close</button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      <div class="row">
         <div class="col-xs-3">
         </div>
         <div class="col-xs-6 w3-mobile">
            <div class="panel panel-default w3-mobile" style="margin-top:40px;">
               <div class="panel-heading w3-mobile">
                  <h3 class="panel-title bold-text" style="color: #1A20D9;">Tasks List</h3>
               </div>
               <div class="panel-body w3-mobile">
                  <div class="w3-mobile">
                     <table class="table table-sm w3-small">
                        <thead>
                           <tr class="bg-primary">
                              <th nowrap="nowrap" class="text-white">Slno.</th>
                              <th class="text-white">Name</th>
                              <th colspan="2" class="text-white">
                                 <center>Action</center>
                              </th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php $count=0; ?>
                           @foreach($task_list as $key => $data)
                           @php
                           $count++;
                           $id = $data->id;
                           @endphp
                           <tr class="w3-hover-pale-green">
                              <td style="color: #000000;">{{$id}}</td>
                              <td style="color: #000000;">{{$data->task}}</td>
                              <td class="pull-right"><a href="{{ url('delete_task', $id) }}"><i class="fa fa-trash fa-2x text-danger"></i></a></td>
                              <td><a data-toggle="modal" data-target="#{{$id}}"><i class="fa fa-pencil fa-2x text-info"></i></a></td>
                           </tr>
                           <div class="modal" id="{{ $id }}">
                              <div class="modal-dialog w3-mobile">
                                 <div class="modal-content w3-mobile">
                                    <!-- Modal Header -->
                                    <div class="modal-header w3-mobile">
                                       <font class="modal-title" size="5" style="color: #1A20D9;">Edit Task</font>
                                       <button type="button" class="close" onclick="document.getElementById('editModal').style.display = 'none';" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body w3-mobile">
                                       <div class="panel-body w3-mobile">
                                          <form class="form-horizontal" method="POST" id="edituser" action="{{url('edit_task', $id)}}">
                                             {{ csrf_field() }}
                                             <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                <label for="name" class="col-md-4 control-label">Task</label>
                                                <div class="col-md-6 w3-mobile">
                                                   <input id="task" type="text" class="form-control" value="{{$data->task}}" name="task" autofocus>
                                                   
                                                </div>
                                             </div>
                                             <br /><br />
                                             <br />
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
                                                        <a class="btn btn-primary pull-right btn-block w3-mobile" data-dismiss="modal">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           @endforeach
                        </tbody>
                     </table>
                     <span class="w3-right">{{ $task_list->links() }}</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xs-3">
         </div>
      </div>
   </div>
</div>
@endsection