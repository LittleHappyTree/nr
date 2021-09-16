<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Pengaduan_pelanggan;
use App\Models\M_email;

class Pengaduan_pelanggan_controller extends Controller
{
    public function index(){

    	$title = 'Pengaduan Pelanggan';
    	$data = Pengaduan_pelanggan::orderBy('created_at','desc')->paginate(20);
        $emails = M_email::orderBy('created_at','desc')->get();

    	return view('admin.pengaduan_pelanggan.index',compact('title','data','emails'));
    }

    public function add_email($email){
        try {
            $a['email'] = $email;
            $a['created_at'] = date('Y-m-d H:i:s');
            $a['updated_at'] = date('Y-m-d H:i:s');

            M_email::insert($a);
            \Session::flash('success','Email berhasil ditambah');
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }

        return redirect()->back();
    }

    public function set_default_email($id){
        try {
            $a['status'] = 1;

            \DB::transaction(function()use($id,$a){
                \DB::table('m_email')->update(['status'=>null]);
                M_email::where('id',$id)->update($a);
            });

            \Session::flash('success','Data berhasil disimpan');
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());
        }

        return redirect()->back();
    }

    public function send_maile($id){
    	$dt = Pengaduan_pelanggan::find($id);
    	$judul = "Pengaduan $dt->nama_perusahaan";

        $email = M_email::where('status',1)->first();
        $email_default = $email->email;

    	$data['nama_perusahaan'] = $dt->nama_perusahaan;
    	$data['bagian'] = $dt->bagianl;
    	$data['jabatan'] = $dt->jabatan;
    	$data['email'] = $dt->email;
    	$data['tertuju'] = $dt->tertuju;
    	$data['komentar'] = $dt->komentar;
    	$data['saran'] = $dt->saran; 

	      \Mail::send('admin.pengaduan_pelanggan.mail', $data, function($message)use($judul,$email_default) {
	         $message->to($email_default, $judul)->subject
	            ($judul);
	         $message->from('nasre@fadly.net','Nasional RE');
	      });

        \Session::flash('success','Email berhasil di forward');

	    return redirect('admin/pengaduan-pelanggan');
    }
}
