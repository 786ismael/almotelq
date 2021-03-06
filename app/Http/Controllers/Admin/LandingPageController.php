<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LandingPage;
use DB;

class LandingPageController extends Controller{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('admin.landingPage.index');
    }

    public function homeTopSlider(){
        $sectionData    = LandingPage::where('section','home_top_slider')->first();
        return view('admin.landingPage.home_top_slider',compact('sectionData'));
    }

    public function specialFeature(){
        $sectionData    = LandingPage::where('section','special_feature')->get();
        return view('admin.landingPage.special_feature',compact('sectionData'));
    }

    public function ourVision(){
        $sectionData    = LandingPage::where('section','our_vision')->first();
        return view('admin.landingPage.our_vision',compact('sectionData'));
    }

    public function portfolio(){
        $sectionData    = LandingPage::where('section','portfolio')->orderBy('id','desc')->get();
        $section        = 'portfolio';
        return view('admin.landingPage.portfolio',compact('sectionData','section'));
    }

    public function onlineMarketing(){
        $sectionData    = LandingPage::where('section','online_marketing')->orderBy('id','desc')->get();
        $section        = 'online_marketing';
        return view('admin.landingPage.services',compact('sectionData','section'));
    }

    public function develop(){
        $sectionData    =  LandingPage::where('section','develop')->orderBy('id','desc')->get();
        $section        = 'develop';
        return view('admin.landingPage.services',compact('sectionData','section'));
    }

    public function trading(){
        $sectionData    =  LandingPage::where('section','trading')->orderBy('id','desc')->get();
        $section        = 'trading';
        return view('admin.landingPage.services',compact('sectionData','section'));
    }

    public function onlineServices(){
        $sectionData    = LandingPage::where('section','online_services')->orderBy('id','desc')->get();
        $section        = 'services';
        return view('admin.landingPage.services',compact('sectionData','section'));
    }
    
    public function privacyPolicy(){
        $sectionData    = LandingPage::where('section','privacy_policy')->orderBy('id','desc')->first();
        $section        = 'privacy_policy';
        return view('admin.landingPage.privacy_policy',compact('sectionData','section'));
    }
    

    public function update(Request $request){
       $input = $request->all();
       unset($input['_method']);
       unset($input['_token']);
       unset($input['image']);
       unset($input['images']);

       /* Single Image */
       $fileName = null;
       if ($request->hasFile('image')) {
          $fileName = str_random('10').'.'.time().'.'.request()->image->getClientOriginalExtension();
          request()->image->move(public_path('landing/images/'), $fileName);
        }
        if($fileName){
            $input['image']  = $fileName;
        }

        if($input['section'] == 'home_top_slider'){
            $imgIds = $input['img_id'] ?? array();
                    \DB::table('landing_page_images')->where('section','home_top_slider')->whereNotIn('id',$imgIds)->delete();
        }

        if($request->hasFile('images')){
            $files = $request->file('images');
            foreach ($files as $file) {
                $fileName = str_random('10').'.'.time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path('landing/images/'), $fileName);
                DB::table('landing_page_images')->insert([
                    'section' => $input['section'],
                    'order'   => $input['order'],
                    'image'   => $fileName
                ]);
            }
        }
        if(isset($input['img_id'])){
            unset($input['img_id']);
        }
       DB::table('landing_pages')->where('section',$input['section'])->where('order',$input['order'])->update($input);
       return redirect()->back()->with('status',true)->with('message','Updated Successfully');
    }

    public function create(Request $request){
        $input = $request->all();
        $insertData = [
            'section' => $input['section']
        ];
        $sectionData    = DB::table('landing_pages')->where('section',$input['section'])->orderBy('id','desc')->first();
        if($sectionData){
            $insertData['order'] = $sectionData->order + 1;
        }
        DB::table('landing_pages')->insert($insertData);
        return redirect()->back();
        return redirect()->back()->with('status',true)->with('message','Inserted Successfully');
     }


    public function delete(Request $request){
        $input = $request->all();
        $where = [
            'section' => $input['section'],
            'order'   => $input['order']
        ];
        DB::table('landing_pages')->where($where)->delete();
        return redirect()->back()->with('status',true)->with('message','Deleted Successfully');
     }



}
