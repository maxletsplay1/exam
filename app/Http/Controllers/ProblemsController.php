<?php

namespace App\Http\Controllers;

use App\Models\problem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



class ProblemsController extends Controller
{
    public function create(Request $request)
    {
        $name = time() . uniqid() . '.' . $request->file->extension();
        $path = 'images/problem/' . $name;

        problem::create([
            'carnum' => $request->carnum,
            'problem' => $request->problem,
            'path' => $path,
            'user_id' => $request->user_id,
        ]);
        $request->file->move('images/problem/', $name);
        return redirect()->back();
    }
    public function update(Request $request)
    {
        problem::updateOrCreate(
            ['id' => $request->id],
            ['status' => $request->status]
        );
        return redirect()->back();
    }
    public function index()
    {
        $new = problem::where('status', 'Новая')->get();
        $approved = problem::where('status', 'Подтверждено')->get();
        $rejected = problem::where('status', 'Отклонено')->get();
        return view('admin', compact('new', 'approved', 'rejected'));
    }
    public function zayavka($id)
    {
        $new = problem::where('id', $id)->first();
        return view('zayavka', compact('new'));
    }
}
