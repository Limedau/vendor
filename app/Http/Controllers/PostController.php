<?php


namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pos = DB::table('posts');
        $posta = $pos->get();
        $big = $pos->where('est_value', '=', '?')->paginate(10);
        $postal = DB::table('posts')->paginate(10);
        return view('welcome',compact('postal','posta','big'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'website' => 'required',
            'ico_date' => 'required',
            'ico_price' => 'required',
            'triker' => 'required',
            'suplay' => 'required',
            'whitepaper' => 'required',
            'link' => 'required',
            'est_value' => 'required',
            'platfrom' => 'required',
            'end_date' => 'required',
            'description' => 'required',
            'images' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        $file = $request->file('images');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        Post::create([
            'name' => $request->name,
            'slug'  => Str::slug($request->name, '-'),
            'website' => $request->website,
            'ico_date' => $request->ico_date,
            'ico_price' => $request->ico_price,
            'triker' => $request->triker,
            'suplay' => $request->suplay,
            'whitepaper' => $request->whitepaper,
            'link' => $request->link,
            'est_value' => $request->est_value,
            'platfrom' => $request->platfrom,
            'end_date' => $request->end_date,
            'description' => $request->description,
            'images' => $nama_file,
            'step_1' => $request->step_1,
            'step_2' => $request->step_2,
            'step_3' => $request->step_3,
            'step_4' => $request->step_4,
            'step_5' => $request->step_5,
            'step_6' => $request->step_6,
            'step_7' => $request->step_7,
            'step_8' => $request->step_8,
            'step_9' => $request->step_9,
            'step_10' => $request->step_10,
            'fb' => $request->fb,
            'tw' => $request->tw,
            'tg' => $request->tg,
            'email' => $request->email,
            'phone' => $request->phone,
            'kyc' => $request->kyc,
            'medium' => $request->medium,
            'reddit' => $request->reddit,
            'discord' => $request->discord,
            'youtube' => $request->youtube,
            'status' => $request->status,
            
        ]);
        return redirect('/add')->with(['success' => ' Berhasil Di Terbitkan !!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        
        
        $post = Post::where('slug', $slug)->first();
        if (empty($post)) {
            return view('404');
        }else {
            return view('single',compact('post'));
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
