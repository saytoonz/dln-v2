<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;

class FrontController extends Controller
{

    public function __construct()
    {

        $data = \Location::get(request()->ip());
        $agent = new Agent();
        $device_type = "Unknown";
        if($agent->isDesktop()){
            $device_type = "Desktop";
        }else if( $agent->isMobile()){
            $device_type = "Mobile";
        }else if( $agent->isPhone()){
            $device_type = "Phone";
        }else if( $agent->isTablet()){
            $device_type = "Tablet";
        }

        try {
            DB::table('device_analytics')->insert(
                [
                    'platform' => $agent->platform(),
                    'device' => $agent->device(),
                    'browser' =>$agent->browser(),
                    'ip_address' => request()->ip(),
                    'device_type' =>  $device_type,
                    'country_name' =>  $data ?  $data->countryName: 'Ghana',
                    'created_at' =>  date('Y-m-d h:i:s')
                ]
            );
        } catch (\Throwable $th) {
            //throw $th;
        }


        $categories = DB::table('categories')->where("status", 'Active')->get();
        $setting = DB::table('settings')->first();
        $trending = DB::table('news')->where('status', 'publish')->orderByDesc('views')->get();
        $pages = DB::table('pages')->get();

        $happilex = DB::table('happilexes')->orderByDesc('id')->limit(1)->get();

        //Ads
        $sidebarTopAds = DB::table('advertisements')->where('location','sidebar-top')->where('status','display')->inRandomOrder()->get()->first();
        $sidebarBottomAds = DB::table('advertisements')->where('location','sidebar-bottom')->where('status','display')->inRandomOrder()->first();
        $sidebarLeaderBoardAds = DB::table('advertisements')->where('location','leaderboard')->where('status','display')->inRandomOrder()->limit(2)->get();


        $latestNews = DB::table('news')
            ->where('categories_id', 'NOT LIKE', '%,9,%')
            ->where('categories_id', 'NOT LIKE', '9,%')
            ->where('categories_id', 'NOT LIKE', '%,9')
            ->orWhere('subcategories_id', 9)
            ->where('status', 'publish')->orderByDesc('id')->paginate();

        if ($setting) {
            $setting->social  = explode(',', $setting->social);
            foreach ($setting->social as $social) {
                $icon = explode('.', $social);
                $icon = $icon[1];
                $icons[] = $icon;
            }
        } else {
            $icons = [];
        }

        if ($categories) {
            foreach ($categories as $cat) {
                $subCat = DB::table('sub_categories')->where('category_id', $cat->id)->where("status", 'active')->get();
                $cat->subCats = $subCat;
            }
        }
        view()->share([
            'categories' => $categories,
            'setting' => $setting,
            'icons' => $icons,
            'trending' =>  $trending,
            'latestNews' => $latestNews,
            'pages' => $pages,
            'recHappilex' => $happilex,
            'weather' => $this->getWeather(),
            'sidebarTopAds'=> $sidebarTopAds,
            'sidebarBottomAds'=> $sidebarBottomAds,
            'sidebarLeaderBoardAds'=> $sidebarLeaderBoardAds,
        ]);
    }

    public function index()
    {
        $featured = DB::table('news')
            ->where('categories_id', 'LIKE', '%,9,%')
            ->orWhere('categories_id', 'LIKE', '9,%')
            ->orWhere('categories_id', 'LIKE', '%,9')
            ->orWhere('subcategories_id', 9)
            ->where('status', 'publish')->get()->last();

        $court = DB::table('news')
            ->orWhere('subcategories_id', 'LIKE', '%,2,%')
            ->orWhere('subcategories_id', 'LIKE', '2,%')
            ->orWhere('subcategories_id', 'LIKE', '%,2')
            ->orWhere('subcategories_id', 2)
            ->where('status', 'publish')->orderByDesc('id')->get();
        $videos = DB::table('videos')
            ->where('status', 'publish')->orderByDesc('id')->limit(10)->get();

        $africa = DB::table('news')
            ->orWhere('subcategories_id', 'LIKE', '%,6,%')
            ->orWhere('subcategories_id', 'LIKE', '6,%')
            ->orWhere('subcategories_id', 'LIKE', '%,6')
            ->orWhere('subcategories_id', 6)
            ->where('status', 'publish')->orderByDesc('id')->limit(10)->get();

        $europe = DB::table('news')
            ->orWhere('subcategories_id', 'LIKE', '%,7,%')
            ->orWhere('subcategories_id', 'LIKE', '7,%')
            ->orWhere('subcategories_id', 'LIKE', '%,7')
            ->orWhere('subcategories_id', 7)
            ->where('status', 'publish')->orderByDesc('id')->limit(10)->get();

        $us = DB::table('news')
            ->orWhere('subcategories_id', 'LIKE', '%,8,%')
            ->orWhere('subcategories_id', 'LIKE', '8,%')
            ->orWhere('subcategories_id', 'LIKE', '%,8')
            ->orWhere('subcategories_id', 8)
            ->where('status', 'publish')->orderByDesc('id')->limit(10)->get();

        $middleEast = DB::table('news')
            ->orWhere('subcategories_id', 'LIKE', '%,9,%')
            ->orWhere('subcategories_id', 'LIKE', '9,%')
            ->orWhere('subcategories_id', 'LIKE', '%,9')
            ->orWhere('subcategories_id', 9)
            ->where('status', 'publish')->orderByDesc('id')->limit(10)->get();

        $others = DB::table('news')
            ->orWhere('subcategories_id', 'LIKE', '%,10,%')
            ->orWhere('subcategories_id', 'LIKE', '10,%')
            ->orWhere('subcategories_id', 'LIKE', '%,10')
            ->orWhere('subcategories_id', 10)
            ->where('status', 'publish')->orderByDesc('id')->limit(10)->get();


        $justices = DB::table('justices')->orderByDesc('id')->limit(4)->get();

        $happilex = DB::table('happilexes')->orderByDesc('id')->limit(4)->get();

        return view('frontend.index', [
            'featured' => $featured,
            'court' => $court,
            'videos' => $videos,
            'africa' => $africa,
            'europe' => $europe,
            'us' => $us,
            'middleEast' => $middleEast,
            'others' => $others,
            'justices' => $justices,
            'happilex' => $happilex,
        ]);
    }


    public function page($slug)
    {
        if ($slug == 'supreme-history') {
            $data = DB::table('history')->get()->last();
            $data->title = "Supreme Court History";
            $data->body = $data->history;
        } else {
            $data = DB::table('pages')->where('slug', $slug)->first();
        }
        return view('frontend.pages.pages', ['data' => $data]);
    }



    public function article($slug)
    {
        $data = DB::table('news')->where('slug', $slug)->first();
        $comments = DB::table('comments')->where('news_id', $data->id)->where('status', 'approved')->get();
        $views = $data->views + 1;
        DB::table('news')->where('id', $data->id)->update(['views' => $views]);
        return view('frontend.details', ['data' => $data, 'comments' => $comments]);
    }

    public function generalNews($slug)
    {
        $subCat = DB::table('sub_categories')->where('slug', 'general-news/' . $slug)->first();
        $category = DB::table('categories')->where('id', $subCat->category_id)->first();
        $news = DB::table('news')
            ->orWhere('subcategories_id', 'LIKE', '%,' . $subCat->id . ',%')
            ->orWhere('subcategories_id', 'LIKE', $subCat->id . ',%')
            ->orWhere('subcategories_id', 'LIKE', '%,' . $subCat->id)
            ->orWhere('subcategories_id', $subCat->id)
            ->where('status', 'publish')->orderByDesc('id')->paginate(50);
        return view('frontend.category', ['news' => $news, 'category' => $category, 'subCategory' => $subCat]);
    }


    public function searchContent()
    {
        $text = $_GET["text"];
        $data = DB::table('news')->where('title', 'LIKE', '%' . $text . '%')
            ->orWhere('news_body', 'LIKE', '%' . $text . '%')->limit(20)->get();

        $output = '';
        echo '<ul class="search-result">';
        if (count($data) > 0) {
            foreach ($data as $key => $d) {
                echo '<li><a href="' . config('app.asset_url') . '/article/' . $d->slug . '">' . $d->title . '</a></li>';
            }
        } else {
            echo '<li><a href="#">Sorry! No data found.</a></li>';
        }
        echo '</ul>';

        return $output;
    }


    public function addLike($news_id)
    {
        $data = DB::table('news')->where('id', $news_id)->first();
        $likes = $data->likes + 1;
        DB::table('news')->where('id', $data->id)->update(['likes' => $likes]);
        session()->flash('flash-like', "Post liked successfully.");
        return redirect()->back();
    }
    public function addDisLike($news_id)
    {
        $data = DB::table('news')->where('id', $news_id)->first();
        $dislikes = $data->dislikes + 1;
        DB::table('news')->where('id', $data->id)->update(['dislikes' => $dislikes]);

        session()->flash('flash-like', "Post disliked successfully.");
        return redirect()->back();
    }


    public function courtDairy()
    {
        $data = DB::table('court_dairy')->get();
        return view('frontend.court_dairy', ['data' => $data]);
    }

    public function supremeJustices()
    {
        $data = DB::table('justices')->get();
        return view('frontend.supreme_justices', ['data' => $data]);
    }

    public function supremeResources()
    {
        $data = DB::table('resources')->get();

        $resources = DB::table('resources')->orderBy('id', 'DESC')->get();
        foreach ($resources as  $res) {
            $catName = DB::table('resource_cats')->where('id', $res->category_id)->value('title');
            $res->category_name = $catName;
        }
        $resources = $resources->groupBy('category_name');

        return view('frontend.resources', ['data' => $resources]);
    }



    public function store($catSlug)
    {
        $categories = DB::table('store_categories')->where('status', 'active')->get();

        foreach ($categories as $cat) {
            $cat->totalItems = DB::table('store_products')->where('cat_id', $cat->id)->where('status', 'active')->count();
            $cat->isSelected = $cat->slug == $catSlug;
        }

        if ($catSlug == 'all') {
            $title = "Latest Products";
            $useIsSelected = false;
            $products = DB::table('store_products')->where('status', 'active')->orderByDesc('id')->paginate(50);
        } else {
            $useIsSelected = true;
            $cat = DB::table('store_categories')->where('slug', $catSlug)->first();
            $title =  $cat->title . " Products";
            $products = DB::table('store_products')->where('cat_id', $cat->id)->where('status', 'active')->orderByDesc('id')->paginate(50);
        }

        foreach ($products as $value) {
            $value->categ = DB::table('store_categories')->where('id', $value->cat_id)->value('title');
        }
        return view('frontend.pages.store', [
            'products' => $products,
            'title' => $title,
            'storeCats' => $categories,
            'useIsSelected' => $useIsSelected
        ]);
    }



    public function happilex($catSlug)
    {
        $categories = DB::table('happilex_cats')->where('status', 'active')->get();

        foreach ($categories as $cat) {
            $cat->totalItems = DB::table('happilexes')->where('cat_id', $cat->id)->count();
            $cat->isSelected = $cat->slug == $catSlug;
        }

        if ($catSlug == 'all') {
            $title = "Latest";
            $useIsSelected = false;
            $happilexes = DB::table('happilexes')->orderByDesc('id')->paginate(50);
        } else {
            $useIsSelected = true;
            $cat = DB::table('happilex_cats')->where('slug', $catSlug)->first();
            $title =  $cat->title;
            $happilexes = DB::table('happilexes')->where('cat_id', $cat->id)->orderByDesc('id')->paginate(50);
        }

        foreach ($happilexes as $value) {
            $value->categ = DB::table('happilex_cats')->where('id', $value->cat_id)->value('title');
            $value->comments = DB::table('happilex_comments')->where('status', 'approved')->where('happilex_id', $value->id)->count();
        }
        return view('frontend.happilex.happilex', [
            'products' => $happilexes,
            'title' => $title,
            'storeCats' => $categories,
            'useIsSelected' => $useIsSelected
        ]);
    }



    public function viewHappilex($slug)
    {

        $data = DB::table('happilexes')->where('slug', $slug)->first();
        $comments = DB::table('happilex_comments')->where('happilex_id', $data->id)->where('status', 'approved')->get();
        $views = $data->views + 1;
        DB::table('happilexes')->where('id', $data->id)->update(['views' => $views]);
        return view('frontend.happilex.detail-happilex', ['data' => $data, 'comments' => $comments]);
    }


    public function addHappilexLike($happilex_id)
    {
        $data = DB::table('happilexes')->where('id', $happilex_id)->first();
        $likes = $data->likes + 1;
        DB::table('happilexes')->where('id', $data->id)->update(['likes' => $likes]);
        session()->flash('flash-like', "Post liked successfully.");
        return redirect()->back();
    }

    public function addHappilexDisLike($happilex_id)
    {
        $data = DB::table('happilexes')->where('id', $happilex_id)->first();
        $dislikes = $data->dislikes + 1;
        DB::table('happilexes')->where('id', $data->id)->update(['dislikes' => $dislikes]);

        session()->flash('flash-like', "Post disliked successfully.");
        return redirect()->back();
    }


    public function opinions($catSlug)
    {
        $categories = DB::table('opinion_cats')->where('status', 'active')->get();

        foreach ($categories as $cat) {
            $cat->totalItems = DB::table('opinions')->where('cat_id', $cat->id)->count();
            $cat->isSelected = $cat->slug == $catSlug;
        }

        if ($catSlug == 'all') {
            $title = "Latest";
            $useIsSelected = false;
            $opinions = DB::table('opinions')->orderByDesc('id')->paginate(50);
        } else {
            $useIsSelected = true;
            $cat = DB::table('opinion_cats')->where('slug', $catSlug)->first();
            $title =  $cat->title;
            $opinions = DB::table('opinions')->where('cat_id', $cat->id)->orderByDesc('id')->paginate(50);
        }

        foreach ($opinions as $value) {
            $value->categ = DB::table('opinion_cats')->where('id', $value->cat_id)->value('title');
        }
        return view('frontend.opinions-feature.opinion', [
            'products' => $opinions,
            'title' => $title,
            'storeCats' => $categories,
            'useIsSelected' => $useIsSelected
        ]);
    }


    public function viewOpinion($slug)
    {
        $data = DB::table('opinions')->where('slug', $slug)->first();
        $views = $data->views + 1;
        DB::table('opinions')->where('id', $data->id)->update(['views' => $views]);
        return view('frontend.opinions-feature.opinion-detail', ['data' => $data]);
    }


    public function addOpinionLike($id)
    {
        $data = DB::table('opinions')->where('id', $id)->first();
        $likes = $data->likes + 1;
        DB::table('opinions')->where('id', $data->id)->update(['likes' => $likes]);
        session()->flash('flash-like', "Post liked successfully.");
        return redirect()->back();
    }

    public function addOpinionDisLike($id)
    {
        $data = DB::table('opinions')->where('id', $id)->first();
        $dislikes = $data->dislikes + 1;
        DB::table('opinions')->where('id', $data->id)->update(['dislikes' => $dislikes]);

        session()->flash('flash-like', "Post disliked successfully.");
        return redirect()->back();
    }


    public function legalWorks()
    {
        $data = DB::table('legal_works')->where('status', 'publish')->get()->groupBy('author');
        return view('frontend.legalworks.legalwork', ['data' => $data]);
    }

    public function getAuthorLegalWorks($writer)
    {
        $author = str_replace('+', ' ', $writer);
        $data = DB::table('legal_works')->where('author', $author)->where('status', 'publish')->orderBy('id')->paginate(50);
        foreach ($data as $legal) {
            if ($legal->subcategories_id) {
                $sub = explode(',', $legal->subcategories_id);
                foreach ($sub as $subId) {
                    $cat = DB::table('sub_categories')->where('id', $subId)->get();
                    $legal->subCats[] = $cat;
                }
            }
        }
        return view('frontend.legalworks.author-legalworks', ['data' => $data, 'author' => $author]);
    }


    public function getLegalWork($id)
    {
        $data = DB::table('legal_works')->where('id', $id)->first();
        $comments = DB::table('legal_work_comments')->where('news_id', $data->id)->where('status', 'approved')->get();
        $views = $data->views + 1;
        DB::table('legal_works')->where('id', $data->id)->update(['views' => $views]);
        return view('frontend.legalworks.legal-details', ['data' => $data, 'comments' => $comments]);
    }


    public function addLegalLike($id)
    {
        $data = DB::table('legal_works')->where('id', $id)->first();
        $likes = $data->likes + 1;
        DB::table('legal_works')->where('id', $data->id)->update(['likes' => $likes]);
        session()->flash('flash-like', "Post liked successfully.");
        return redirect()->back();
    }

    public function addLegalDisLike($id)
    {
        $data = DB::table('legal_works')->where('id', $id)->first();
        $dislikes = $data->dislikes + 1;
        DB::table('legal_works')->where('id', $data->id)->update(['dislikes' => $dislikes]);

        session()->flash('flash-like', "Post disliked successfully.");
        return redirect()->back();
    }



    public function lawFirm()
    {
        $data = DB::table('law_firms')->orderByDesc('id')->paginate(50);
        return view('frontend.lawfirms.firms', ['data' => $data]);
    }

    public function viewFirm($slug)
    {
        $data = DB::table('law_firms')->where('slug', $slug)->first();
        return view('frontend.lawfirms.view-firm', ['data' => $data]);
    }


    public function contactUs()
    {
        return view('frontend.contact');
    }
    public function getWeather()
    {

        $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?q=Accra,ghana&&Appid=9fcd327828f76eb1832f6eb4e61538e1";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        curl_close($ch);
        $data = json_decode($response);
        return $data;
    }
}
