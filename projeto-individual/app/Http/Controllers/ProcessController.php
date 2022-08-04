<?php

namespace App\Http\Controllers;

use App\Models\Process;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    public function __construct(Process $process)
    {
        $this->model = $process;
    }
    
    public function index()
    {
        $processes = Process::all();

        return view('processes.index', compact('processes'));
    }

    public function show($id)
    {   
        if(!$process = Process::find($id))
            return redirect()->route('processes.index');

        $title = 'Processo ' . $process->name;

        return view('processes.show', compact('process', 'title'));
    }

    public function create() 
    {
        return view('processes.create');
    }

    public function store(Request $request)
    {
        
        $data = $request->all();

        $this->model->create($data);
        
        return redirect()->route('processes.index');
    }

    public function edit($id)
    {
        if(!$process = $this->model->find($id))
            return redirect()->route('processes.index');

        return view('processes.edit', compact('process'));
    }

    public function update(Request $request, $id)
    {
        if(!$process = $this->model->find($id))
            return redirect()->route('processes.index');
            
        $data = $request->all();

        $process->update($data);

        return redirect()->route('processes.index');
    }

    public function destroy($id)
    {
        if(!$process = $this->model->find($id))
            return redirect()->route('processes.index');

        $process->delete();
        
        return redirect()->route('processes.index');
    }
}
