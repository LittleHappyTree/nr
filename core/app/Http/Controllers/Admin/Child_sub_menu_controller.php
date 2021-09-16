<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Menu;
use App\Models\Parent_sub_menu;
use App\Models\Child_sub_menu;
use App\Page;

class Child_sub_menu_controller extends Controller
{
    public function index(){
    	$title = 'list child sub menu';
    	$data = Child_sub_menu::with('menus','parent_sub_menus','pagess')->get();
        // dd($data);
    	return view('admin.child_sub_menu.index',compact('title','data'));
    }

    public function add(){
    	$title = 'tambah child sub menu';
    	$parent = Parent_sub_menu::with('menus')->get();

    	return view('admin.child_sub_menu.add',compact('title','parent'));
    }

    public function store(Request $request){
    	try {
    		$parent = $request->parent_sub_menu;
    		$dt = Parent_sub_menu::with('menus')->find($parent);
    		// dd($dt);
    		$a['menu'] = $dt->menus->id;
    		$a['parent_sub_menu'] = $parent;
    		$a['nama'] = $request->nama;
    		$a['created_at'] = date('Y-m-d H:i:s');
    		$a['updated_at'] = date('Y-m-d H:i:s');

    		Child_sub_menu::insert($a);

    		\Session::flash('success','data berhasil ditambah');
    		return redirect('admin/child-sub-menu');
    	} catch (\Exception $e) {
    		\Session::flash('error',$e->getMessage());
    		return redirect('admin/child-sub-menu/add');
    	}
    }

    public function edit($id){
        $title = 'tambah child sub menu';
        $parent = Parent_sub_menu::with('menus')->get();
        $pages = Page::get();
        $dt = Child_sub_menu::with(['menus','parent_sub_menus'])->where('id',$id)->first();
        // dd($pages);
        return view('admin.child_sub_menu.edit',compact('title','parent','pages','dt'));
    }

    public function update(Request $request,$id){
        try {
            $parent = $request->parent_sub_menu;
            $dt = Parent_sub_menu::with('menus')->find($parent);
            // dd($dt);
            $a['menu'] = $dt->menus->id;
            $a['parent_sub_menu'] = $parent;
            $a['nama'] = $request->nama;
            $a['created_at'] = date('Y-m-d H:i:s');
            $a['updated_at'] = date('Y-m-d H:i:s');
            $a['pages'] = $request->pages;

            Child_sub_menu::where('id',$id)->update($a);

            \Session::flash('success','data berhasil ditambah');
            return redirect('admin/child-sub-menu');
        } catch (\Exception $e) {
            \Session::flash('error',$e->getMessage());
            return redirect('admin/child-sub-menu/add');
        }
    }
}
