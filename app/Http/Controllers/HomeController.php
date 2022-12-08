<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(Request $request) {

        //$data = Task::all()->take(4);
        if($request->date){
            $filterDate = $request->date;
        } else {

            $filterDate = date('Y-m-d');

        }

        $data['$date_as_string'] = '08 de Dez';

        $data = Task::whereDate('due_date', $filterDate)->get();
        $AuthUser = Auth::user();

        // $data['tasks_count'] = $data['tasks']->count();
        // $data['undone_tasks_count'] = $data['tasks']->where('is_done', false)->count();

        return view('home', ['data' => $data, 'AuthUser' => $AuthUser]);
    }
}

