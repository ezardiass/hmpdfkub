<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function viewAdmin(){
        $news = News::orderBy('created_at', 'desc')->get();
        return view('admin.berita')->with('news', $news);
    }

    public function addNews(Request $request)
    {
        $news = new News;
        $news_title = $request->input('news_title');
        $news->news_title = $request->input('news_title');
        $news->news_content = $request->input('news_content');
        $image = $request->file('image');
        $image_title = $news_title . "." . time() . '.' . $image->getClientOriginalExtension();
        // $path = $request->file('image')->storeAs('', $image_title);
        $news->image_path = "" . $image_title;
        $news->save();
        redirect(url("/admin/berita"))
    }

    public function viewUpdate($id){
        $news = News::find($id);
        return view('admin.update-berita')->with('news',$news);
    }

    public function editNews(Request $request, $id)
    {
        $news = News::find($id);
        $news->news_title = $request->input('news_title');
        $news->news_content = $request->input('news_content');
        if($request->hasFile('image')){
            $news_title = $request->input('news_title');
            $image = $request->file('image');
            $image_title = $news_title . "." . time() . '.' . $image->getClientOriginalExtension();
            // $path = $request->file('image')->storeAs('', $image_title);
            $news->image_path = "" . $image_title;
        }
        $news->save();
        return redirect(url("/admin/berita"));
    }

    public function deleteNews($id)
    {
        echo "berhasil";
        $news = News::find($id);
        $news->delete();
        return redirect(url("/admin/berita"));
    }

    public function viewAllNews(Request $request)
    {
        $latestNews = News::orderBy('created_at', 'desc')->limit(4)->get();
        $news = News::orderBy('created_at', 'desc')->paginate(6);
        return view('page.berita')->with('news', $news)->with('latestNews', $latestNews);
    }

    public function viewNewsByID(Request $request, $id)
    {
        $recommendedNews = News::orderBy('created_at', 'desc')->limit(3)->get();
        $news = News::find($id);
        if($news!= null){
            return view('page.berita-detail')
                ->with('news', $news)
                ->with('recommendedNews', $recommendedNews);
        } else {
            echo "Error";
        }
    }
}
