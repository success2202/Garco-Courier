<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Settings;
use App\Models\Testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
    //

    public function Index(){
       
        return view('admin.settings.index')
        ->with('settings', Settings::latest()->get())
        ->with('setting', Settings::first())
         ->with('breadcrumb', 'Website Settings');
    }

    public function UpdateSettings(Request $request){
        $data = [
            'site_name' => $request->site_name,
            'site_phone' => $request->site_phone,
            'site_email' => $request->site_email,
            'address' => $request->address,
            'opening_hours' => $request->opening_hours,
            'about' => $request->about_us
        ];

        if($request->file('image')){
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $fileName = 'logo'.'.'.$ext;
            $image->move('assets',$fileName);
            $data['logo'] = $fileName;
        }
        $testim = Settings::first();
        $testim->fill($data)->save();
        Session::flash('alert', 'success');
        Session::flash('message', ' updated Successfully');
        return back();
    }

    public function Testimonials(){
       
        return view('admin.settings.testimonials', [
            'testimony' => Testimonials::latest()->get()
        ])
        ->with('breadcrumb', 'Website Settings');
    }

    public function CreateTestimonial(){
        return view('admin.settings.add_testimony')
        ->with('breadcrumb', 'Website Settings');
    }

    public function StoreTestimonial(Request $request){
        $request->validate([
            'name' => 'required',
            'content' => 'required'
        ]);
        $req = [
            'name' => $request->name,
            'content' => $request->content
        ];

        $ttm = Testimonials::create($req);
        if($ttm){
            Session::flash('alert', 'success');
            Session::flash('message', 'Testimonial Added Successfully');
            return back();
        }else{
            Session::flash('alert', 'error');
            Session::flash('message', 'Request failed, try again later');
            return back();
        }
    }

    public function EditTestimonial($id){
        return view('admin.settings.edit_testimonials', [
            'testimonial' => Testimonials::where('id', decrypt($id))->first()
        ])
        ->with('breadcrumb', 'Website Settings');
    }

    public function UpdateTestimonial(Request $request, $id){
        $data = [
            'name' => $request->name,
            'content' => $request->content
        ];
        $testim = Testimonials::where('id', decrypt($id))->first();
        $testim->fill($data)->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'Testimonial updated Successfully');
        return back();
    }

    public function DeleteTestimonial($id){
        $testim = Testimonials::where('id', decrypt($id))->first();
        if($testim){
            $testim->delete();
            Session::flash('alert', 'error');
            Session::flash('message', 'Testimonial deleted Successfully');
            return back();
        }
        Session::flash('alert', 'error');
        Session::flash('message', 'Something went wrong, try again');
        return back();
    
    }

    public function Socials(){
       
        return view('admin.settings.social', [
            'setting' => Settings::first()
        ])
        ->with('bheading', 'Website Settings')
        ->with('breadcrumb', 'Social Settings');
    }

    public function UpdateSocials(Request $request){

        $data = [
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedIn' => $request->linkedIn,
        ];
        $testim = Settings::first();
        $testim->fill($data)->save();
        Session::flash('alert', 'success');
        Session::flash('message', 'social updated Successfully');
        return back();
    }

    public function UserAccount(){
        $user = User::where('id', auth()->user()->id)->first();
        return view('admin.settings.account', ['user' => $user])
        ->with('breadcrumb', 'Admin Settings');
    }


    public function UpdateAccount(Request $request){
        $data = [];
        if($request->name){
            $data['name'] = $request->name;
        }
        if($request->email){
            $data['email'] = $request->email;
        }
          if($request->phone){
            $data['phone'] = $request->phone;
        }
        if($request->password){
            $data['password'] = bcrypt($request->password);
        } 
        $user = User::where('id', auth()->user()->id)->first();
      $ss =   $user->fill($data)->save();
      if($ss){
        Session::flash('alert', 'success');
        Session::flash('message', 'Details Updated Successfully');
        return back();
      }else{
        Session::flash('alert', 'error');
        Session::flash('message', 'Request not completed, Nothing changed ');
        return back();

      }
    }
}
