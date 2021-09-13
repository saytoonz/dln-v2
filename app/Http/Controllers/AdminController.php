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
    public function addNews()
    {
        $categories = DB::table('categories')->get();
        return view('backend.news.add-news', ['categories' => $categories]);
    }

    public function viewNews()
    {
        $news = DB::table('news')->paginate(20);
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

        return view('backend.news.view-news', ['posts' => $news]);
    }

    public function editNews($id)
    {
        $subcategories = DB::table('categories')->get();
        $categories = DB::table('categories')->get();
        $news = DB::table('news')->where('id', $id)->first();
        $news_cat = explode(',', $news->categories_id);
        $news_subcat = explode(',', $news->subcategories_id);
        return view('backend.news.edit-news', [
                'data' => $news,
                'categories' => $categories,
                'subcategories' => $subcategories,
                'newsCat' => $news_cat,
                'newsSubCat' => $news_subcat,
            ]
        );
    }
}
