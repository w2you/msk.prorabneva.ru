<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\DBConnect;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;


class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 10;

        if (!empty($keyword)) {
            $workers = Worker::where('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('position', 'LIKE', "%$keyword%")
                ->orWhere('phone', 'LIKE', "%$keyword%")
                ->orWhere('identificatore', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->orWhere('supervisor', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $workers = Worker::latest()->paginate($perPage);
        }

        return view('admin.workers.index', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $users = DB::connection('mysql2')->select('select number from Miller.entrances GROUP BY number');
        $workers = Worker::pluck('name', 'id')->toArray();
        return view('admin.workers.create', compact('users', 'workers'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'identificatore' => 'required|unique:workers',
            'email' => 'required'
        ]);

        $supervisors = $request->get('supervisor');
        $requestData = $request->except('supervisor');

        $worker = Worker::create($requestData);

        $worker->workers()->sync($supervisors);

        return redirect()->route('admin.workers.index')->with('flash_message', 'Worker added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $worker = Worker::findOrFail($id);

        return view('admin.workers.show', compact('worker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $worker = Worker::findOrFail($id);

        $users = DB::connection('mysql2')->select('select number from Miller.entrances GROUP BY number');
        $workers = Worker::where('id', '<>', $id)->pluck('name', 'id')->toArray();

        $selected_workers = $worker->workers()->pluck('id');

        return view('admin.workers.edit', compact('worker', 'users', 'workers', 'selected_workers'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'identificatore' => 'required|unique:workers,identificatore,' . $id,
            'email' => 'required'
        ]);

        $worker = Worker::query()->findOrFail($id);
        $supervisors = $request->get('supervisor');
        $requestData = $request->except('supervisor');
        $worker->update($requestData);
        $worker->workers()->sync($supervisors);

        return redirect()->route('admin.workers.index')->with('flash_message', 'Worker updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Worker::destroy($id);

        return redirect()->route('admin.workers.index')->with('flash_message', 'Worker deleted!');
    }
}
