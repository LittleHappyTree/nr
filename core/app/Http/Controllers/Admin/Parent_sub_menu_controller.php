<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Parent_sub_menu;
use App\Models\Menu;

class Parent_sub_menu_controller extends Controller
{
    public function index(){
    	$title = 'parent sub menu';
    	$data = Parent_sub_menu::with('menus')->get();

    	return view('admin.manage_sub_menu.index',compact('title','data'));
    }

    public function add(){
    	$title = 'tambah parent sub menu';
    	$menu = Menu::where('has_child',1)->get();

    	return view('admin.manage_sub_menu.add',compact('title','menu'));
    }

    public function store(Request $request){
    	try {
    		$a = $request->except(['_token','_method']);

    		Parent_sub_menu::insert($a);

    		\Session::flash('success','data berhasil ditambah');

    		return redirect('admin/parent-sub-menu');
    	} catch (\Exception $e) {
    		\Session::flash('error',$e->getMessage());

    		return redirect('admin/parent-sub-menu/add');
    	}
    }

    public function edit($id){
    	$title = 'edit parent sub menu';
    	$menu = Menu::where('has_child',1)->get();
    	$dt = Parent_sub_menu::find($id);

    	return view('admin.manage_sub_menu.edit',compact('title','menu','dt'));
    }

    public function update(Request $request,$id){
    	try {
    		$a = $request->except(['_token','_method']);

    		Parent_sub_menu::where('id',$id)->update($a);

    		\Session::flash('success','data berhasil diupdate');

    		return redirect('admin/parent-sub-menu');
    	} catch (\Exception $e) {
    		\Session::flash('error',$e->getMessage());
    		dd($e->getMessage());
    		return redirect('admin/parent-sub-menu/'.$id);
    	}
    }
}
