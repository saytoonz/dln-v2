<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Session;

class AdminController extends Controller
{
    public function viewTabs()
    {
        $data = DB::table('categories')->get();
        return view('backend.settings.create-tab', ['data' => $data]);
    }

    public function editCategory($id)
    {
        $singleData = DB::table('categories')->where('id', $id)->first();
        $data = DB::table('categories')->get();
        if ($singleData == NuLL) {
            return redirect('site-tabs');
        }
        return view('backend.settings.edit-tab', ['data' => $data, 'singleData' => $singleData]);
    }

    public function multipleDelete(Request $request)
    {
        $data = $request->except('_token');
        if ($data['bulk-action'] == 0) {
            $request->session()->flash('flash-error-message', "Please select the action you want to perform.");
            return redirect()->back();
        }

        if (empty($data['select-data'])) {
            $request->session()->flash('flash-error-message', "Please select data you want to delete.");
            return redirect()->back();
        }

        $tbl = decrypt($data['tbl']);
        $tblid = decrypt($data['tblid']);

        $ids = $data["select-data"];

        foreach ($ids as $id) {
            DB::table($tbl)->where($tblid, $id)->delete();
        }

        $request->session()->flash('flash-success-message', "Data deleted successfully .");
        return redirect()->back();
    }

    public function settings()
    {
        $data = DB::table('settings')->first();
        if ($data) {
            $data->social  = explode(',', $data->social);
        }
        return view('backend.settings.settings', ['data' => $data]);
    }


    public function sitePages()
    {
        $pages = DB::table('pages')->get();
        return view('backend.pages.add-page', ['pages'=>$pages]);
    }

    public function editSitePages($id){
        $data = DB::table('pages')->where('id', $id)->first();
        return view('backend.pages.edit-page', ['data'=>$data]);
    }


    public function addOpinion()
    {
        $categories = DB::table('opinion_cats')->get();
        return view('backend.opinion-features.add-opinions', ['categories' => $categories]);
    }


    public function viewOpinions()
    {
        $posts = DB::table('opinions')->orderByDesc('id')->paginate();
        foreach ($posts as  $post) {
            $post->category = DB::table('opinion_cats')->where('id', $post->cat_id)->first();
        }
        $publish = DB::table('opinions')->where('status', 'publish')->count();
        $allPosts = DB::table('opinions')->count();

        return view('backend.opinion-features.view-opinions', ['posts' => $posts, 'publish' => $publish, 'allPosts' => $allPosts]);
    }


    public function editOpinions($id)
    {
        $categories = DB::table('opinion_cats')->get();
        $post = DB::table('opinions')->where('id', $id)->first();
        $post->category =  DB::table('opinion_cats')->where('id', $post->cat_id)->first();
        return view(
            'backend.opinion-features.edit-opinions',
            [
                'data' => $post,
                'categories' => $categories,
            ]
        );
    }



    public function addNews()
    {
        $categories = DB::table('categories')->get();
        $subcategories = DB::table('sub_categories')->get();
        return view('backend.news.add-news', ['categories' => $categories, 'subcategories' => $subcategories]);
    }



    public function viewNews()
    {
        $news = DB::table('news')->orderByDesc('id')->paginate();
        foreach ($news as  $post) {
            $categories = explode(',', $post->categories_id);
            foreach ($categories as  $cat) {
                $catName = DB::table('categories')->where('id', $cat)->value('title');
                $catArray[] = $catName;
                $postCat = implode(', ', $catArray);
            }
            $post->categories_id = $postCat;
            $catArray = [];
        }

        foreach ($news as  $post) {
            $categories = explode(',', $post->subcategories_id);
            foreach ($categories as  $cat) {
                $catName = DB::table('categories')->where('id', $cat)->value('title');
                $catArray[] = $catName;
                $postCat = implode(', ', $catArray);
            }
            $post->subcategories_id = $postCat;
            $catArray = [];
        }

        $publish = DB::table('news')->where('status', 'publish')->count();
        $allPosts = DB::table('news')->count();

        return view('backend.news.view-news', ['posts' => $news, 'publish' => $publish, 'allPosts' => $allPosts]);
    }

    public function editNews($id)
    {
        $subcategories = DB::table('sub_categories')->get();
        $comments = DB::table('comments')->where('news_id', $id)->paginate();
        $categories = DB::table('categories')->get();
        $news = DB::table('news')->where('id', $id)->first();
        $news_cat = explode(',', $news->categories_id);
        $news_subcat = explode(',', $news->subcategories_id);
        return view(
            'backend.news.edit-news',
            [
                'data' => $news,
                'categories' => $categories,
                'subcategories' => $subcategories,
                'newsCat' => $news_cat,
                'newsSubCat' => $news_subcat,
                'comments' => $comments,
            ]
        );
    }



    public function courtDairy()
    {
        $courtDairies = DB::table('court_dairy')->orderBy('dairy_date', 'DESC')->paginate();
        return view('backend.supreme-court.court-dairy', ['courtDairies' => $courtDairies]);
    }


    public function justices()
    {
        $justices = DB::table('justices')->orderBy('id', 'DESC')->paginate();
        return view('backend.supreme-court.court-justices', ['justices' => $justices]);
    }



    public function courtResources()
    {
        $resources = DB::table('resources')->orderBy('id', 'DESC')->paginate(20);
        $cats = DB::table('resource_cats')->orderBy('title')->get();
        foreach ($resources as  $res) {
            $catName = DB::table('resource_cats')->where('id', $res->category_id)->value('title');
            $res->category_name = $catName;
        }
        return view('backend.supreme-court.court-resource', ['resources' => $resources, 'cats' => $cats]);
    }




    public function history()
    {
        $history = DB::table('history')->get()->last();
        return view('backend.supreme-court.court-history', ['history' => $history]);
    }



    public function deleteWithApi($tbl, $id)
    {
        try {
            DB::table($tbl)->where('id', $id)->delete();
            return $id;
        } catch (\Throwable $th) {
            //throw $th;
            return 0;
        }
    }

    public function updateWithApi($tbl, $id, $field,  $value)
    {
        try {
            DB::table($tbl)->where('id', $id)->update([$field => $value]);
            return $id;
        } catch (\Throwable $th) {
            //throw $th;
            return 0;
        }
    }


    public function addAdv()
    {
        return view('backend.advertisement.add-adv');
    }
    public function editAdv($id)
    {
        $data = DB::table('advertisements')->where('id', $id)->first();
        return view('backend.advertisement.edit-adv', ['data' => $data]);
    }
    public function allAdv()
    {
        $data = DB::table('advertisements')->orderByDesc('id')->paginate();
        return view('backend.advertisement.all-adv', ['data' => $data]);
    }



    public function addHappilex()
    {
        $categories = DB::table('happilex_cats')->get();
        return view('backend.happilex.add-happilex', ['categories' => $categories]);
    }
    public function viewHappilex()
    {
        $happilexes = DB::table('happilexes')->orderByDesc('id')->paginate();
        foreach ($happilexes as $value) {
            $value->category = DB::table('happilex_cats')->where('id', $value->cat_id)->first();
        }
        $allPosts = DB::table('happilexes')->count();
        return view('backend.happilex.view-happilex', ['happilexes' => $happilexes, 'allPosts' => $allPosts]);
    }
    public function editHappilex($id)
    {
        $comments = DB::table('happilex_comments')->where('happilex_id', $id)->paginate();
        $categories = DB::table('happilex_cats')->get();
        $happilex = DB::table('happilexes')->where('id', $id)->first();
        $happilex->category = DB::table('happilex_cats')->where('id', $happilex->cat_id)->first();
        return view(
            'backend.happilex.edit-happilex',
            [
                'data' => $happilex,
                'categories' => $categories,
                'comments' => $comments,
            ]
        );
    }




    public function viewOpinionCat()
    {
        $data = DB::table('opinion_cats')->get();
        return view('backend.opinion-features.cats.create-cat', ['data' => $data]);
    }
    public function editOpinionCat($id)
    {
        $singleData = DB::table('opinion_cats')->where('id', $id)->first();
        $data = DB::table('opinion_cats')->get();
        if ($singleData == NuLL) {
            return redirect('opinions-cats');
        }
        return view('backend.opinion-features.cats.edit-cat', ['data' => $data, 'singleData' => $singleData]);
    }



    public function lawFirms()
    {
        $data = DB::table('law_firms')->orderByDesc('id')->paginate();
        $allPosts = DB::table('law_firms')->count();

        return view('backend.law_firm.view-lawfirm', ['firms' => $data, 'allPosts' => $allPosts]);
    }

    public function addLawFirms()
    {
        return view('backend.law_firm.add-lawfirm');
    }
    public function editLawFirms($id)
    {
        $data = DB::table('law_firms')->where('id', $id)->first();
        return view('backend.law_firm.edit-law-firm', ['data' => $data]);
    }





    public function viewLegal()
    {
        $news = DB::table('legal_works')->orderByDesc('id')->paginate();
        foreach ($news as  $post) {
            $categories = explode(',', $post->categories_id);
            foreach ($categories as  $cat) {
                $catName = DB::table('categories')->where('id', $cat)->value('title');
                $catArray[] = $catName;
                $postCat = implode(', ', $catArray);
            }
            $post->categories_id = $postCat;
            $catArray = [];
        }

        foreach ($news as  $post) {
            $categories = explode(',', $post->subcategories_id);
            foreach ($categories as  $cat) {
                $catName = DB::table('categories')->where('id', $cat)->value('title');
                $catArray[] = $catName;
                $postCat = implode(', ', $catArray);
            }
            $post->subcategories_id = $postCat;
            $catArray = [];
        }

        $publish = DB::table('legal_works')->where('status', 'publish')->count();
        $allPosts = DB::table('legal_works')->count();

        return view('backend.legal_work.view-legal_work', ['posts' => $news, 'publish' => $publish, 'allPosts' => $allPosts]);
    }


    public function addLegal()
    {
        $categories = DB::table('categories')->get();
        $subcategories = DB::table('sub_categories')->get();
        return view('backend.legal_work.add-legal_work', ['categories' => $categories, 'subcategories' => $subcategories]);
    }


    public function editLegal($id)
    {

        $subcategories = DB::table('sub_categories')->get();
        $comments = DB::table('legal_work_comments')->where('news_id', $id)->paginate();
        $categories = DB::table('categories')->get();
        $news = DB::table('legal_works')->where('id', $id)->first();
        $news_cat = explode(',', $news->categories_id);
        $news_subcat = explode(',', $news->subcategories_id);
        return view(
            'backend.legal_work.edit-legal_work',
            [
                'data' => $news,
                'categories' => $categories,
                'subcategories' => $subcategories,
                'newsCat' => $news_cat,
                'newsSubCat' => $news_subcat,
                'comments' => $comments,
            ]
        );
    }


    public function addProduct()
    {
        $categories = DB::table('store_categories')->get();
        return view('backend.store.add-product', ['categories' => $categories]);
    }
    public function viewProducts()
    {
        $products = DB::table('store_products')->orderByDesc('id')->paginate();
        foreach ($products as $value) {
            $value->category = DB::table('store_categories')->where('id', $value->cat_id)->first();
        }
        $allProducts = DB::table('store_products')->count();
        $activeProducts = DB::table('store_products')->where('status', 'active')->count();
        return view('backend.store.view-products', [
            'products' => $products,
            'activeProducts' => $activeProducts,
            'allProducts' => $allProducts
        ]);
    }


    public function editProduct($id)
    {
        $categories = DB::table('store_categories')->get();
        $product = DB::table('store_products')->where('id', $id)->first();
        $product->category = DB::table('happilex_cats')->where('id', $product->cat_id)->first();
        return view(
            'backend.store.edit-product' ,
            [
                'data' => $product,
                'categories' => $categories
            ]
        );
    }


    public function addPage(){
        return view('backend.pages.add-page');
    }

}
