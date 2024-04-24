<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TodoTaskController extends Controller
{
    public function index()
    {
        // $tasks = [
        //     [
        //         'task'    => 'Task1',
        //         'tanggal' => '2022-03-21',
        //     ],
        //     [
        //         'task'    => 'Task2',
        //         'tanggal' => '2022-03-22',
        //     ]
        // ];

        $tasks = Task::all();

        return view('contoh', [
            'tasks' => $tasks,
        ]);
    }

    public function store(Request $request)
    {
        // $tasks = [
        //     [
        //         'task'    => 'Task1',
        //         'tanggal' => '2022-03-21',
        //     ],
        //     [
        //         'task'    => 'Task2',
        //         'tanggal' => '2022-03-22',
        //     ],
        // ];

        // $tasks[] = [
        //     'task'    => $request->task,
        //     'tanggal' => '2024-03-14',
        // ];
        // return view('contoh', [
        //     'tasks' => $tasks,
        // ]);
        $request -> validate(
            [
                'task' => 'required|min:5'
            ],
            [
                'task.required' => 'Tugas harus diisi',
                'task.min' => 'Tugas minimal 5 karakter',
            ]
            );


        Task::create([
            'task' => $request -> task,
            'Tanggal' => NOW(),
        ]);
        return redirect('/');

    }

    public function deleteTask(Request $request)
    {
        Task::where('id', $request->id)->delete();
        return redirect('/');
    }
} 