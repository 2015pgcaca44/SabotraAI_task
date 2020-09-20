<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Task;
use App\User;
use DB;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = Auth::user()->id;
        $task_list = Task::where('user_id', '=', $id)->paginate(8);
        return view('admin.charts', compact('task_list'))->with('i', ($request->input('page', 1) - 1) * 8);
    }
    public function product_form()
    {
        return view('admin.add_task');
    }
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $this->Validate($request, [
            'task' => 'required|string|max:255'
        ]);

        $task = new Task([
            'user_id' => $id,
            'product' => "none",
            'task' => $request->get('task'),
            'status' => "1"
        ]);
        $task->save();
        return redirect()->back()->withSuccess('One Task Added');
    }

    public function update($id, Request $request)
    {
        $task = $request->get('task');
        if(Task::find($id)){
            DB::update('update tasks set task=? where id = ?',[$task,$id]);
            return redirect()->back()->withSuccess('Task Updated Successfully');
        }
    }
    public function delete($id){
        \DB::table("tasks")->delete($id);
        return back()->with('success','Task Deleted successfully.');
    }

}
