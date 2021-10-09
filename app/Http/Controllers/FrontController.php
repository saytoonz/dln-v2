<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function __construct()
    {
        $categories = DB::table('categories')->where("status", 'Active')->get();
        $setting = DB::table('settings')->first();
        $trending = DB::table('news')->where('status', 'publish')->orderByDesc('views')->get();
        $pages = DB::table('pages')->get();

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

        return view('frontend.index', [
            'featured' => $featured,
            'court' => $court,
            'videos' => $videos,
            'africa' => $africa,
            'europe' => $europe,
            'us' => $us,
            'middleEast' => $middleEast,
            'others' => $others,
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
            $products = DB::table('store_products')->where('status', 'active')->paginate(50);
        } else {
            $useIsSelected = true;
            $cat = DB::table('store_categories')->where('slug', $catSlug)->first();
            $title =  $cat->title . " Products";
            $products = DB::table('store_products')->where('cat_id', $cat->id)->where('status', 'active')->paginate(50);
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
            $happilexes = DB::table('happilexes')->paginate(50);
        } else {
            $useIsSelected = true;
            $cat = DB::table('happilex_cats')->where('slug', $catSlug)->first();
            $title =  $cat->title;
            $happilexes = DB::table('happilexes')->where('cat_id', $cat->id)->paginate(50);
        }

        foreach ($happilexes as $value) {
            $value->categ = DB::table('happilex_cats')->where('id', $value->cat_id)->value('title');
            $value->comments = DB::table('happilex_comments')->where('status', 'approved')->where('happilex_id', $value->id)->count();
        }
        return view('frontend.pages.store', [
            'products' => $happilexes,
            'title' => $title,
            'storeCats' => $categories,
            'useIsSelected' => $useIsSelected
        ]);
    }
}
