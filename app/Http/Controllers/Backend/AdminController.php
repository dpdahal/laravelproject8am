<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {

        return view('backend.pages.admin.index');
    }


    public function create()
    {

        return view('backend.pages.admin.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required|unique:admins',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required',
            'gender' => 'required',
            'role' => 'required',
            'image' => 'mimes:jpeg,png,jpg,gif,svg',
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = md5(microtime()) . '.' . $ext;
            $uploadPath = public_path('uploads/admins/');
            $imageName = '/uploads/admins/' . $filename;
            if (!$file->move($uploadPath, $filename)) {
                return redirect()->back()->with('error', 'Image Upload Failed');
            }

            $data['image'] = $imageName;
        }
        $data['password'] = bcrypt($request->password);
        if (Admin::create($data)) {
            return redirect()->back()->with('success', 'Admin Created Successfully');
        } else {
            return redirect()->back()->with('error', 'Admin Creation Failed');
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
