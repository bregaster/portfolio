<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = blog::orderBy('judul', 'asc')->get();
        return view('dashboard.blog.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('judul', $request->judul);
        Session::flash('isi', $request->isi);
        Session::flash('image', $request->image);
        Session::flash('slug', $request->slug);
        Session::flash('meta', $request->meta);

        $request->validate(
            [
                'judul' => 'required',
                'isi' => 'required',
                'image' => 'required',
                'slug' => 'required',
                'meta' => 'required',
            ],
            [
                'judul.required' => 'Judul wajib diisi',
                'isi.required' => 'Isian tulisan wajib diisi',
                'image.required' => 'Image wajib diisi',
                'slug.required' => 'Slug wajib diisi',
                'meta.required' => 'Meta wajib diisi',
            ]
        );

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
            'image' => $request->image,
            'slug' => $request->slug,
            'meta' => $request->meta
        ];
        blog::create($data);

        return redirect()->route('blog.index')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = blog::where('id', $id)->first();
        return view('dashboard.blog.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'judul' => 'required',
                'isi' => 'required',
                'image' => 'required',
                'slug' => 'required',
                'meta' => 'required',
            ],
            [
                'judul.required' => 'Judul wajib diisi',
                'isi.required' => 'Isian tulisan wajib diisi',
                'image.required' => 'Image wajib diisi',
                'slug.required' => 'Slug wajib diisi',
                'meta.required' => 'meta wajib diisi',
            ]
        );

        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
            'image' => $request->image,
            'slug' => $request->slug,
            'meta' => $request->meta
        ];
        blog::where('id', $id)->update($data);

        return redirect()->route('blog.index')->with('success', 'Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        blog::where('id', $id)->delete();
        return redirect()->route('blog.index')->with('success', 'Berhasil melakukan delete data');
    }

    public function post($slug){
        $data = blog::where('slug', $slug)->first();
        return view('blog.post')->with('data', $data);
    }
}
