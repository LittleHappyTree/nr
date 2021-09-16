<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Menu;

class Manage_menu_controller extends Controller
{
    public function index(){
    	$data = Menu::get();

    	return view('admin.manage_menu.index',compact('data'));
    }

    public function add(){
    	return view('admin.manage_menu.add');
    }

    public function store(Request $request){
    	try {
    		$a = $request->except(['_token','_method']);
    		$a['created_at'] = date('Y-m-d H:i:s');
    		$a['updated_at'] = date('Y-m-d H:i:s');
            // dd($a);
            if($request->has_child != null){
                $a['has_child'] = 1;
            }else{
                $a['has_child'] = null;
            }
            // dd
    		Menu::insert($a);
    		\Session::flash('success','data berhasil ditambah');

    		return redirect('admin/manage-menu');
    	} catch (\Exception $e) {
    		\Session::flash('error',$e->getMessage());
    		return redirect('admin/manage-menu/add');
    	}
    }

    public function edit($id){
    	$dt = Menu::findOrFail($id);
    	$title = 'edit menu';

    	return view('admin.manage_menu.edit',compact('dt','title'));
    }

    public function update(Request $request,$id){
    	try {
    		$a = $request->except(['_token','_method','has_child']);
    		// $a['created_at'] = date('Y-m-d H:i:s');
    		$a['updated_at'] = date('Y-m-d H:i:s');

            // dd($a);
            if($request->has_child != null){
                $a['has_child'] = 1;
            }else{
                $a['has_child'] = null;
            }
            // dd($a);
    		Menu::where('id',$id)->update($a);
    		\Session::flash('success','data berhasil diupdate');

    		return redirect('admin/manage-menu');
    	} catch (\Exception $e) {
    		\Session::flash('error',$e->getMessage());
    		return redirect('admin/manage-menu/'.$id);
    	}
    }

    public function delete($id){
    	try {
    		Menu::where('id',$id)->delete();
    		\Session::flash('success','data berhasil dihapus');
    	} catch (\Exception $e) {
    		\Session::flash('error',$e->getMessage());
    	}
    	return redirect('admin/manage-menu');
    }
}
