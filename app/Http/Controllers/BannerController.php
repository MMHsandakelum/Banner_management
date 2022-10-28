<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{

  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $banners = Banner::latest()->paginate(5);

        return view('pages.bannerstable', compact('banners'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.addbanner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'company_id' => 'required',
            'email' => 'required',
            
        ]);
        $input = $request->all();
        $image = $request->img_path;
        if ($image !== '') {//dd($image);
            $destinationPath = '';
            //dd($image->getClientOriginalName());
            $profileImage = date('YmdHi').$image->getClientOriginalName();
            $image->move(public_path('assets/img/banners/'), $profileImage);
            $input['img_path'] = "$profileImage";
        }
        
        Banner::create($input);
        
        return redirect()->route('banners.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
        return view('pages.viewbanner', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
        return view('pages.viewbanner', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //$request->validate([
        $input = $request->all();
        $image = $request->img_path;
        if ($image !== '') {//dd($image);
            $destinationPath = '';
            //dd($image->getClientOriginalName());
            $profileImage = date('YmdHi').$image->getClientOriginalName();
            $image->move(public_path('assets/img/banners/'), $profileImage);
            $input['img_path'] = "$profileImage";
        }
        
        $banner->update($input);

        return redirect()->route('banners.index')->with('success', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
        $banner->delete();

        return redirect()->route('banners.index')
            ->with('success', 'Product deleted successfully');
    }
}