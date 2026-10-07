<?php

namespace App\Http\Controllers\Welcome;


use Image;
use Auth;
use Hash;
use Str;
use Artisan;
use Http;
use Session;
use Carbon\Carbon;
use App\Models\Country;
use App\Models\Post;
use App\Models\Media;
use App\Models\PostExtra;
use App\Models\User;
use App\Models\Attribute;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
  
    
	public function geo_filter($id){

      $datas=Country::where('parent_id',$id)->get();

      $geoData =View('geofilter',compact('datas'))->render();

       return Response()->json([
              'success' => true,
              'geoData' => $geoData,
            ]);
    }
    
    public function imageView(Request $r){
        if($r->imageUrl && is_numeric($r->weight) && is_numeric($r->height)){
          $image = Image::make($r->imageUrl)->fit($r->weight,$r->height)->response();
        }else{
          $image = Image::make(public_path('medies/noimage.jpg'))->fit(200,200)->response(); 
        }
        return $image;
    }
    
    public function imageView2(Request $r,$template=null,$image=null){
        $weight=null;
        $height=null;
        
        if(is_numeric($r->w)){
          $weight=$r->w;  
        }
        if(is_numeric($r->h)){
          $height=$r->h;  
        }
        
        $filePath=public_path('medies/noimage.jpg');
        
        if($image){
            $file =Media::where('file_rename',$image)->select(['file_url'])->first();
            if($file){
                $filePath = public_path($file->file_url);
            }
        }
        
        
        // if($template=='s-profile'){
            
        //     if($image && $image!='profile.png' && $file){
        //         $filePath = public_path($file->file_url);
        //     }else{
        //         $filePath =public_path('medies/profile.png');
        //     }
        // }
        
        $mImage =Image::make($filePath);
        if($weight && $height){
            $mImage=$mImage->fit($weight,$height);
        }
        $mImage=$mImage->response();
        
        return $mImage;
    }
    public function siteMapXml(Request $r){
        
      $pages = Post::latest()->where('type',0)->where('status','active')->select(['slug','updated_at','status'])->limit(200)->get();
      $posts = Post::latest()->where('type',1)->where('status','active')->select(['slug','updated_at','status'])->limit(500)->get();
      $products = Post::latest()->where('type',2)->where('status','active')->select(['slug','updated_at','status'])->limit(300)->get();
      
      return response()->view('siteMap',compact('pages','posts','products'))->header('Content-Type', 'text/xml');
    }
    public function language($lang=null){
      if($lang){
          Session::put('lang',$lang);
      }else{
          Session::put('lang','en');
      }
      return redirect()->back();
    }

    public function index(Request $r){
        
    //   Artisan::call('cache:clear');
    //   Artisan::call('config:clear');
    //   Artisan::call('config:cache');
    //   Artisan::call('view:clear');
    //   Artisan::call('route:clear');
    //   Artisan::call('clear-compiled');
      
      $latestServices =Post::where('type',3)
      ->where('status','active')
      ->whereDate('created_at','<=',Carbon::now())
      ->limit(3)
      ->get(['id','name','slug','short_description']);
      
        $categories =Attribute::latest()->where('type',0)->where('status','active')->get();
        

      $latestPosts =Post::where('type',1)
      ->where('status','active')
      ->whereDate('created_at','<=',Carbon::now())
      ->limit(3)
      ->get(['id','name','slug','addedby_id','created_at']);

    	return view(welcomeTheme().'index',compact('latestServices','latestPosts','categories'));
    }

    public function serviceCategory($slug){
      $category =Attribute::latest()->where('type',0)->where('slug',$slug)->first();
      if(!$category){
        return abort('404');
      }

      $services = Post::whereHas('ctgServices',function($q) use($category){
        $q->where('reff_id',$category->id);
      })
      ->where(function($qq){
        $qq->where('status','active');
      })
      ->select(['id','name','slug','addedby_id','created_at','short_description'])
      ->whereDate('created_at','<=',date('Y-m-d'))
      ->paginate(12);

      return view(welcomeTheme().'services.categoryServices',compact('category','services'));
    }

    public function serviceView($slug){
      $service =Post::latest()->where('type',3)->where('slug',$slug)->first();
      if(!$service){
        return abort('404');
      }

      return view(welcomeTheme().'services.serviceView',compact('service'));
    }

    public function blogCategory($slug){
      $category =Attribute::latest()->where('type',6)->where('slug',$slug)->first();
      if(!$category){
        return abort('404');
      }

      $posts = $category->activePosts()->latest()
      ->select(['id','name','slug','short_description','addedby_id','created_at'])
      ->paginate(10);

      return view(welcomeTheme().'blogs.categoryPosts',compact('category','posts'));
    }

    public function blogTag($slug){
      $tag =Attribute::latest()->where('type',7)->where('slug',$slug)->first();
      if(!$tag){
        return abort('404');
      }

      $posts = Post::whereHas('tagPosts',function($q) use($tag){
        $q->where('reff_id',$tag->id);
      })
      ->where(function($qq){
        $qq->where('status','active');
      })
      ->select(['id','name','slug','short_description','addedby_id','created_at'])
      ->whereDate('created_at','<=',date('Y-m-d'))
      ->paginate(10);

      return view(welcomeTheme().'blogs.tagPosts',compact('tag','posts'));
    }

    public function blogAuthor($id,$slug){
      $author =User::find($id);
      if(!$author){
        return abort('404');
      }
      $posts =$author->posts()->latest()->where('type',1)->where('status','active')
      ->select(['id','name','slug','short_description','addedby_id','created_at'])
      ->whereDate('created_at','<=',date('Y-m-d'))
      ->paginate(10);
      return view(welcomeTheme().'blogs.authorPosts',compact('author','posts'));

    }

    public function blogView($slug){
      $post =Post::where('type',1)->where('slug',$slug)->first();
      if(!$post){
        return abort('404');
      }
      $relatedPosts =$post->relatedPosts()->limit(3)->select(['id','name','slug','short_description','addedby_id','created_at'])->get();
      $comments =$post->postComments()->where('status','active')->select(['id','name','content','created_at'])->paginate(10);
      return view(welcomeTheme().'blogs.blogView',compact('post','relatedPosts','comments'));

    }

    public function blogSearch(Request $r){
      $check = $r->validate([
          'search' => 'required|max:100',
      ]);
      
      $posts =Post::latest()->where('type',1)->where('status','active')
      ->where(function($q) use ($r) {
        if($r->search){
          $q->where('name','LIKE','%'.$r->search.'%');
        }

      })
      ->select(['id','name','slug','short_description','addedby_id','created_at'])
      ->whereDate('created_at','<=',date('Y-m-d'))
      ->paginate(10)->appends([
        'search'=>$r->search,
      ]);

      return view(welcomeTheme().'blogs.blogSearch',compact('posts','r'));

    }

    public function blogComments(Request $r,$slug){
      $post =Post::where('type',1)->where('slug',$slug)->first();
      if(!$post){
        return abort('404');
      }

      $check = $r->validate([
          'name' => 'required|max:100',
          'email' => 'required|max:100',
          'website' => 'required|max:100',
          'comment' => 'required|max:1000',
      ]);

      $comments =new Review();

      if(Auth::check()){
      $comments->addedby_id=Auth::id();
      }
      $comments->src_id=$post->id;
      $comments->type=1;
      $comments->name=$r->name;
      $comments->email=$r->email;
      $comments->website=$r->website;
      $comments->content=$r->comment;
      $comments->save();

      Session()->flash('success','Your Comments successfully Submitted.');

      return back();


    }


    public function pageView($slug){
    
      $page =Post::latest()->whereIn('type',[0,1])->where('slug',$slug)->first();

      if(!$page){
        return abort('404');
      }
      
      if($page->type==1){
          
          $post =$page;
          
          $relatedPosts =$post->relatedPosts()->limit(3)->select(['id','name','slug','short_description','addedby_id','created_at'])->get();
          $comments =$post->postComments()->where('status','active')->select(['id','name','content','created_at'])->paginate(10);
          
          return view(welcomeTheme().'blogs.blogView',compact('post','relatedPosts','comments'));
      }
      //If deferent Design or Condition Page Return by ID.

      //Font Home Page
      if($page->template=='Front Page'){
        return redirect()->route('index');
      }

      //Contact Us Page
      if($page->template=='Contact Us'){
        return view(welcomeTheme().'pages.contact',compact('page'));
      }

      //About Us Page
      if($page->template=='About Us'){
        return view(welcomeTheme().'pages.about',compact('page'));
      }
      
      //Partners  Page
      if($page->template=='Partners'){
        return view(welcomeTheme().'pages.partners',compact('page'));
      }
      
      //Message  Page
      if($page->template=='Message'){
        return view(welcomeTheme().'pages.message',compact('page'));
      }
      
      //Associates  Page
      if($page->template=='Associates'){
        return view(welcomeTheme().'pages.associates',compact('page'));
      }
      
    
      //Gallery Us Page
      if($page->template=='Gallery'){
          
        return view(welcomeTheme().'pages.gallery',compact('page'));
      }
      
      //Clients Page
      if($page->template=='All Clients'){
        return view(welcomeTheme().'pages.clients',compact('page'));
      }
      
      //Vendor Selection Page
      if($page->template=='Vendor Selection'){
        return view(welcomeTheme().'pages.vendorSelection',compact('page'));
      }
      
      //Pricing Strategy Page
      if($page->template=='Pricing Strategy'){
        return view(welcomeTheme().'pages.pricingStrategy',compact('page'));
      }
      
      //Product Development Page
      if($page->template=='Product Development'){
        return view(welcomeTheme().'pages.productDevelopment',compact('page'));
      }
      
      //Material Sourcing Page
      if($page->template=='Material Sourcing'){
        return view(welcomeTheme().'pages.materialSourcing',compact('page'));
      }
      
      //Quality Assurance Page
      if($page->template=='Quality Assurance'){
        return view(welcomeTheme().'pages.qualityAssurance',compact('page'));
      }
      

      //Our Service Page
      if($page->template=='Our Service'){
        return view(welcomeTheme().'pages.ourService',compact('page'));
      }
      

      //Latest Blog Page
      if($page->template=='Latest Blog'){
        $posts = Post::latest()->where('type',1)->where('status','active')
        ->select(['id','name','slug','short_description','addedby_id','created_at'])
        ->whereDate('created_at','<=',date('Y-m-d'))
        ->paginate(10);
        return view(welcomeTheme().'blogs.latestBlogs',compact('posts','page'));
      }

      //Latest Services Page
      if($page->template=='Latest Services'){
        $services = Post::latest()->where('type',3)->where('status','active')
        ->select(['id','name','slug','short_description','addedby_id','created_at'])
        ->whereDate('created_at','<=',date('Y-m-d'))
        ->paginate(12);
        return view(welcomeTheme().'services.latestServices',compact('services','page'));
      }

      return view(welcomeTheme().'pages.pageView',compact('page'));

    }

    public function registrationMail(Request $r){

        $check = $r->validate([
          'name' => 'required|max:100',
          'father_name' => 'required|max:100',
          'email' => 'required|max:100',
          'mobile' => 'required|max:100',
          'village' => 'required|max:100',
          'post_area' => 'required|max:100',
          'police_status' => 'required|max:100',
          'pin_code' => 'required|max:100',
          'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'nid_card' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'payment_screenshort' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
          'g-recaptcha-response' => 'required',
        ]);
        
        // Send a POST request to Google for reCAPTCHA verification
        $recaptchaSecret = '6LdTLTkrAAAAALpRc_6oKMmmbG6izMjCMmgOqBsL';
        $recaptchaResponse = $r->input('g-recaptcha-response');
        $remoteIp = $r->ip();
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $recaptchaSecret,
            'response' => $recaptchaResponse,
            'remoteip' => $remoteIp,
        ]);
        $result = $response->json();
        if (!$result['success'] || $result['score'] < 0.5) {
            Session()->flash('error','reCAPTCHA verification failed. Please try again.');
            return back()->withInput();
        }
        
        $attachments = [];

        if ($r->hasFile('photo')) {
            $photo = $r->file('photo');
            $attachments[] = [
                'path' => $photo->getRealPath(),
                'name' => 'photo.'.$photo->getClientOriginalExtension(),
                'mime' => $photo->getMimeType(),
            ];
        }
        
        if ($r->hasFile('nid_card')) {
            $nid = $r->file('nid_card');
            $attachments[] = [
                'path' => $nid->getRealPath(),
                'name' => 'nid_card.'.$nid->getClientOriginalExtension(),
                'mime' => $nid->getMimeType(),
            ];
        }
        
        if ($r->hasFile('payment_screenshort')) {
            $payment = $r->file('payment_screenshort');
            $attachments[] = [
                'path' => $payment->getRealPath(),
                'name' => 'payment_screenshot.'.$payment->getClientOriginalExtension(),
                'mime' => $payment->getMimeType(),
            ];
        }
        
        if(general()->mail_status && general()->mail_from_address){
            //Mail Data
            $datas =array('r'=>$r);
            $template ='mails.RegisterMail';
            $toEmail =general()->mail_from_address;
            $toName =general()->mail_from_name;
            $subject ='Registration Mail Form '.general()->title;
        
            sendMail($toEmail,$toName,$subject,$datas,$template,$attachments);

        }
      
      
      Session()->flash('success','Your form send successfully done. We are response as soon as possible.');
      return back(); 
    }
    
    public function contactMail(Request $r){
    //   return $r;
      $check = $r->validate([
          'name' => 'required|max:100',
          'email' => 'required|max:100',
          'subject' => 'required|max:100',
          'phone' => 'nullable|max:11',
          'message' => 'nullable|max:500',
        //   'g-recaptcha-response' => 'required',
      ]);
        
        
        // // Send a POST request to Google for reCAPTCHA verification
        // $recaptchaSecret = '6LdTLTkrAAAAALpRc_6oKMmmbG6izMjCMmgOqBsL';
        // $recaptchaResponse = $r->input('g-recaptcha-response');
        // $remoteIp = $r->ip();
        // $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        //     'secret' => $recaptchaSecret,
        //     'response' => $recaptchaResponse,
        //     'remoteip' => $remoteIp,
        // ]);
        // $result = $response->json();
        // if (!$result['success'] || $result['score'] < 0.5) {
        //     Session()->flash('error','reCAPTCHA verification failed. Please try again.');
        //     return back()->withInput();
        // }

        if(general()->mail_status && general()->mail_from_address){
            //Mail Data
            $datas =array('r'=>$r);
            $template ='mails.ContactMail';
            $toEmail =general()->mail_from_address;
            $toName =general()->mail_from_name;
            $subject ='Contact Mail Form '.general()->title;
            sendMail($toEmail,$toName,$subject,$datas,$template);
        }

      Session()->flash('success','Your form send successfully done. We are response as soon as possible.');
      return back();
    }

    public function search(Request $r){
      
      if($r->search){

        $posts =Post::where('status','active')
        ->where(function($q) use($r){
          $q->where('search_key','LIKE','%'.$r->search.'%');
        })
        ->paginate(24);

      }else{
        $posts = array();
      }

      return view(welcomeTheme().'search');

    }

    public function subscribe(Request $r){

      if(filter_var($r->email, FILTER_VALIDATE_EMAIL)){
        $subscribe =PostExtra::latest()->where('type',1)->where('name',$r->email)->first();

        if(!$subscribe){
          
            $subscribe =new PostExtra();
            $subscribe->type=1;
            $subscribe->name=$r->email;
            $subscribe->save();
          $status=true;
          $message ='<p style="color: #009688;"><span>Success:</span> You Are Successfully Subsribe.</p>';
        }else{
          $status=true;
          $message ='<p style="color: #ffc107;"><span>Note:</span> You Are Already Subsribe.Thank You.</p>';
        }


      }else{
        $status=false;
        $message ='<p style="color: #ff5722;"><span>Error:</span> Email Are Not validated</p>';
      }

      if(request()->ajax()){
        
        return Response()->json([
                'success' => $status,
                'message' => $message,
              ]);
      }

      Session()->flash($status?'success':'error',$message);
      return redirect()->back();

    }





}
