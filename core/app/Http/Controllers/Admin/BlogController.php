<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Bcategory;
use App\Blog;
use Validator;
use Session;
use XSSCleaner;

use Image;
use Illuminate\Support\Facades\Input;

use App\Models\Blogs_blur;
use App\Models\M_banner;

class BlogController extends Controller
{
    public function index() {
      $data['blogs'] = Blog::orderBy('id', 'DESC')->paginate(10);
      $data['bcats'] = Bcategory::where('status', 1)->get();
      return view('admin.blog.blog.index', $data);
    }

    public function acc($id){
      try {
        Blog::where('id',$id)->update(['status'=>1]);
        \Session::flash('success','post di acc');
      } catch (\Exception $e) {
        \Session::flash('error',$e->getMessage());
      }
      return redirect('admin/blogs');
    }

    public function not_acc($id){
      try {
        Blog::where('id',$id)->update(['status'=>null]);
        \Session::flash('success','post tidak di acc');
      } catch (\Exception $e) {
        \Session::flash('error',$e->getMessage());
      }
      return redirect('admin/blogs');
    }

    public function add() {
      $title = 'Tambah Blog';
      // $dt = Blog::findOrFail($id);
      $kategori = Bcategory::where('status', 1)->get();
      return view('admin.blog.blog.add', compact('title','kategori'));
    }

    public function new_store(Request $request){
      try {
        $a['title'] = $request->title;
        $a['content'] = $request->content;
        $a['content_en'] = $request->content_en;
        $a['bcategory_id'] = $request->bcategory_id;
        $a['meta_keywords'] = $request->meta_keywords;
        $a['meta_description'] = $request->meta_description;
        $a['title_en'] = $request->title_en;
        $a['created_at'] = date('Y-m-d H:i:s');
        $a['updated_at'] = date('Y-m-d H:i:s');
        $a['slug'] = str_slug($request->title,'-');

        $file = $request->file('photo');
        if($file){
          $nama_gambar = date('YmdHis').$file->getClientOriginalName();

          $proses = \Image::make(Input::file('photo'))->blur(55)->save('blogs_blur/'.$nama_gambar);

          $file->move('assets/front/img/blogs',$nama_gambar);

          $a['main_image'] = $nama_gambar;
        }
        // dd($a);
        $blogss = Blog::insertGetId($a);

        \DB::table('blogs_blur')->insert([
              'blogs'=>$blogss,
              'photo'=>$nama_gambar
            ]);

        \Session::flash('success','Data Berhasil ditambah');
      } catch (\Exception $e) {
        \Session::flash('gagal',$e->getMessage());
      }

      return redirect()->back();
    }

    public function edit($id) {
      $title = 'Edit Blog';
      $dt = Blog::findOrFail($id);
      $kategori = Bcategory::where('status', 1)->get();
      return view('admin.blog.blog.edit', compact('dt','kategori','title'));
    }

    public function update(Request $request,$id){
      try {
        $a['title'] = $request->title;
        $a['content'] = $request->content;
        $a['content_en'] = $request->content_en;
        $a['bcategory_id'] = $request->bcategory_id;
        $a['meta_keywords'] = $request->meta_keywords;
        $a['meta_description'] = $request->meta_description;
        $a['title_en'] = $request->title_en;
        $a['slug'] = str_slug($request->title,'-');

        // $blurs = [];

        $file = $request->file('photo');
        if($file){
          $nama_gambar = date('YmdHis').$file->getClientOriginalName();

          $proses = \Image::make(Input::file('photo'))->blur(55)->save('blogs_blur/'.$nama_gambar);

          $file->move('assets/front/img/blogs',$nama_gambar);

          $a['main_image'] = $nama_gambar;

          // $blurs

          // \DB::transaction(function()use($nama_gambar){
            // \DB::table('blogs_blur')->where('blogs',$id)->delete();
            \DB::table('blogs_blur')->where('blogs',$id)->delete();
            \DB::table('blogs_blur')->insert([
              'blogs'=>$id,
              'photo'=>$nama_gambar
            ]);
          // });
        }

        Blog::where('id',$id)->update($a);

        \Session::flash('success','Data Berhasil diupdate');
      } catch (\Exception $e) {
        \Session::flash('gagal',$e->getMessage().'|'.$e->getLine());
      }

      return redirect()->back();
    }

    public function featured($id){
      try {
        Blog::where('id',$id)->update(['is_featured'=>1]);
        \Session::flash('success','featured post added');
      } catch (\Exception $e) {
        \Session::flash('error',$e->getMessage());
      }
      return redirect('admin/blogs');
    }

    public function not_featured($id){
      try {
        Blog::where('id',$id)->update(['is_featured'=>null]);
        \Session::flash('success','featured post removed');
      } catch (\Exception $e) {
        \Session::flash('error',$e->getMessage());
      }
      return redirect('admin/blogs');
    }

    public function jadi_banner($id){
      try {
        $dt = Blog::find($id);
        
        $a['photo'] = $dt->main_image;
        $a['nama_kecil'] = $dt->title;
        $a['dari'] = date('Y-m-d');
        $a['sampai'] = date('Y-m-d',strtotime('+7 days'));
        $a['link'] = 'portal/'.$dt->slug;
        $a['is_text'] = 1;
        $a['created_at'] = date('Y-m-d H:i:s');
        $a['updated_at'] = date('Y-m-d H:i:s');

        M_banner::insert($a);

        $awal = 1 + 1;
                // $urutans = M_banner::where('id','!=',$id)->where('urutan','>=',1)->orderBy('urutan','asc')->get();

                // foreach ($urutans as $ut) {
                //     // $urutan = $ut->urutan;
                //     // $urutan_baru = $urutan + 1;

                //     M_banner::where('id',$ut->id)->update(['urutan'=>$awal]);
                //     $awal += 1;
                // }

        \File::copy('assets/front/img/blogs/'.$dt->main_image, 'banners/'.$dt->main_image);

        \Session::flash('success','Berhasil dijadikan banner, silahkan cek di menu banner');
      } catch (\Exception $e) {
        \Session::flash('gagal',$e->getMessage());
      }
      return redirect()->back();
    }

    public function upload(Request $request) {
      $gambar = $request->file('file');
      $nama_gambar = $gambar->getClientOriginalName();

      $proses = \Image::make(Input::file('file'))->blur(55)->save('blogs_blur/'.$nama_gambar);
      return response()->json(['data'=>$proses]);

      \DB::transaction(function()use($nama_gambar){
        // \DB::table('blogs_blur')->where('blogs',$id)->delete();
        \DB::table('blogs_blur')->insert([
          'blogs'=>$id,
          'photo'=>$nama_gambar
        ]);
      });

      $img = $request->file('file');
      $allowedExts = array('jpg', 'png', 'jpeg');

      $rules = [
        'file' => [
          function($attribute, $value, $fail) use ($img, $allowedExts) {
            if (!empty($img)) {
              $ext = $img->getClientOriginalExtension();
              if(!in_array($ext, $allowedExts)) {
                  return $fail("Only png, jpg, jpeg image is allowed");
              }
            }
          },
        ],
      ];

      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
        $validator->getMessageBag()->add('error', 'true');
        return response()->json(['errors' => $validator->errors(), 'id' => 'blog']);
      }

      $filename = time() . '.' . $img->getClientOriginalExtension();
      $request->session()->put('blog_image', $filename);
      $request->file('file')->move('assets/front/img/blogs/', $filename);
      return response()->json(['status' => "session_put", "image" => "blog", 'filename' => $filename]);
    }

    public function uploadUpdate(Request $request, $id) {
      $gambar = $request->file('file');
      $nama_gambar = $gambar->getClientOriginalName();

      \Image::make(Input::file('file'))->blur(55)->save('blogs_blur/'.$nama_gambar);

      \DB::transaction(function()use($id,$nama_gambar){
        \DB::table('blogs_blur')->where('blogs',$id)->delete();
        \DB::table('blogs_blur')->insert([
          'blogs'=>$id,
          'photo'=>$nama_gambar
        ]);
      });

      $img = $request->file('file');
      $allowedExts = array('jpg', 'png', 'jpeg');

      $rules = [
        'file' => [
          function($attribute, $value, $fail) use ($img, $allowedExts) {
            if (!empty($img)) {
              $ext = $img->getClientOriginalExtension();
              if(!in_array($ext, $allowedExts)) {
                  return $fail("Only png, jpg, jpeg image is allowed");
              }
            }
          },
        ],
      ];

      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
        $validator->getMessageBag()->add('error', 'true');
        return response()->json(['errors' => $validator->errors(), 'id' => 'blog']);
      }

      $blog = Blog::findOrFail($id);
      if ($request->hasFile('file')) {
        $filename = time() . '.' . $img->getClientOriginalExtension();
        $request->file('file')->move('assets/front/img/blogs/', $filename);
        @unlink('assets/front/img/blogs/'. $blog->main_image);
        $blog->main_image = $filename;
        $blog->save();
      }

      return response()->json(['status' => "success", "image" => "Blog image", 'blog' => $blog]);
    }

    public function store(Request $request) {
      $slug = Str::slug($request->title, '-');
      $blogs = Blog::select('slug')->get();

      $rules = [
        'blog' => 'required',
        'title' => [
          'required',
          'max:255',
          function($attribute, $value, $fail) use ($slug, $blogs) {
            foreach($blogs as $blog) {
              if ($blog->slug == $slug) {
                return $fail('Title already taken!');
              }
            }
          }
        ],
        'category' => 'required',
        'content' => 'required',
        'content_en'=>'required'
      ];

      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
        $errmsgs = $validator->getMessageBag()->add('error', 'true');
        return response()->json($validator->errors());
      }

      $blog = new Blog;
      $blog->main_image = $request->blog;
      $blog->title = $request->title;
      $blog->slug = $slug;
      $blog->bcategory_id = $request->category;
      $blog->content = XSSCleaner::clean($request->content);
      $blog->content_en = XSSCleaner::clean($request->content_en);
      $blog->meta_keywords = $request->meta_keywords;
      $blog->meta_description = $request->meta_description;
      $blog->created_by = \Auth::user()->email;
      $blog->updated_by = \Auth::user()->email;
      $blog->save();

      Session::flash('success', 'Blog added successfully!');
      return "success";
    }

    // public function update(Request $request) {
    //   $slug = Str::slug($request->title, '-');
    //   $blogs = Blog::select('slug')->get();
    //   $blog = Blog::findOrFail($request->blog_id);
    //   // dd($blog);
    //   $rules = [
    //     'title' => [
    //       'required',
    //       'max:255',
    //       function($attribute, $value, $fail) use ($slug, $blogs, $blog) {
    //         foreach($blogs as $blg) {
    //           if ($blog->slug != $slug) {
    //             if ($blg->slug == $slug) {
    //               return $fail('Title already taken!');
    //             }
    //           }
    //         }
    //       }
    //     ],
    //     'category' => 'required',
    //     'content' => 'required',
    //     'content_en'=>'required'
    //   ];

    //   $validator = Validator::make($request->all(), $rules);
    //   if ($validator->fails()) {
    //     $errmsgs = $validator->getMessageBag()->add('error', 'true');
    //     return response()->json($validator->errors());
    //   }

    //   $blog = Blog::findOrFail($request->blog_id);
    //   $blog->title = $request->title;
    //   $blog->slug = $slug;
    //   $blog->bcategory_id = $request->category;
    //   $blog->content = XSSCleaner::clean($request->content);
    //   $blog->content_en = $request->content_en;
    //   $blog->meta_keywords = $request->meta_keywords;
    //   $blog->meta_description = $request->meta_description;
    //   $blog->updated_by = \Auth::user()->email;
    //   $blog->save();

    //   Session::flash('success', 'Blog updated successfully!');
    //   return "success";
    // }

    public function delete(Request $request) {

      $blog = Blog::findOrFail($request->blog_id);
      @unlink('assets/front/img/blogs/'. $blog->main_image);
      $blog->delete();

      Session::flash('success', 'Blog deleted successfully!');
      return back();
    }
}
