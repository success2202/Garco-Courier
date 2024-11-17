<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Services;
use App\Models\Settings;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function Index()
    {
        $data['services'] = Services::latest()->get();
        $data['blogs'] = Blog::latest()->get();
        $data['settings'] = Settings::first();
        $data['testimonials'] = Testimonials::latest()->get();
        return view('index', $data);
        
    }

    public function ContactUs()
    {
        return view('users.contact')
        ->with('blogs', Blog::latest()->get())
        ->with('settings', Settings::first());
    }

    public function AboutUs()
    {
        return view('users.about')
        ->with('blogs', Blog::latest()->get())
        ->with('settings', Settings::first());
    }

    public function Blogs()
    {
        return view('users.blogs')
        ->with('blogs', Blog::latest()->get())
        ->with('settings', Settings::first());
    }

    public function BlogDetails($id)
    {
        return view('users.blog_details')
        ->with('blog', Blog::where('id', decrypt($id))->first())
        ->with('blogs', Blog::latest()->get())
        ->with('settings', Settings::first());
    }

    public function Services()
    {
        return view('users.services')
        
        ->with('services', Services::latest()->get())
        ->with('blogs', Blog::latest()->get())
        ->with('settings', Settings::first());
    }

    public function ServiceDetails($id)
    {
        return view('users.service_details')
        ->with('service', Services::where('id', decrypt($id))->first())
        ->with('services', Services::latest()->get())
        ->with('blogs', Blog::latest()->get())
        ->with('settings', Settings::first());
    }

    public function Fleet()
    {
        return view('users.fleet')
        ->with('settings', Settings::first());
    }

    public function Testimonials()
    {
        return view('users.testimonials')
        ->with('testimony', Testimonials::latest()->get())
        ->with('blogs', Blog::latest()->get())
        ->with('settings', Settings::first());
    }

    public function Track()
    {
        return view('users.track')
        ->with('blogs', Blog::latest()->get())
        ->with('settings', Settings::first());
    }
}

