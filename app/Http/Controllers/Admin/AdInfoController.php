<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InfoRequest;
use App\Models\Info;
use Illuminate\Http\Request;

class AdInfoController extends Controller
{
    public $data = [];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['title'] = 'Thông tin shop';
        $infos = Info::whereIn('name', ['Số điện thoại', 'Email','Vị trí'])->paginate(6);
        return view('admin.pages.infos.info', $this->data, compact('infos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->data['title'] = 'Thêm thông tin shop';
        return view('admin.pages.infos.theminfo', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(InfoRequest $request)
    {
        $info = Info::create($request->all());
        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploads/infos'), $imageName);
            $info->images = '/uploads/infos/' . $imageName;
        }
        $info->save();
        return redirect()->route('admin.info.index')->with('ssmsg', 'Thêm thành công một thông tin mới');
        // dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->data['title'] = 'Sửa thông tin shop';
        $info = Info::find($id);
        if (!$info) {
            return redirect()->route('admin.info.index')->with('ermsg', 'Không tìm thấy info cần sửa');
        }
        return view('admin.pages.infos.editinfo', $this->data, compact('info'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(InfoRequest $request, string $id)
    {
        $info = Info::find($id);
        if (!$info) {
            return redirect()->route('admin.info.index')->with('ermsg', 'Không tìm thấy info cần sửa');
        }
        if ($request->hasFile('images')) {
            $image = $request->file('images');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploads/infos'), $imageName);
            $info->images = '/uploads/infos/' . $imageName;
        }
        $info->update($request->except('images'));
        return redirect()->route('admin.info.index')->with('ssmsg', 'Sửa info thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $info = Info::find($id);
        if (!$info) {
            return redirect()->route('admin.info.index')->with('ermsg', 'Không tìm thấy info cần xóa');
        }
        Info::destroy($id);
        return redirect()->route('admin.info.index')->with('ssmsg', 'Xóa info thành công');
    }
}
