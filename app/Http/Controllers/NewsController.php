<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function addNews(Request $request)
    {
        $news = new News;
        $news_title = $request->input('news_title');
        $news->news_title = $request->input('news_title');
        $news->news_content = $request->input('news_content');
        $news->author = $request->input('author');
        $image = $request->file('image');
        $image_title = $news_title . "." . time() . '.' . $image->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('', $image_title);
        $news->image_path = "" . $image_title;
        $news->save();
    }

    public function editNews(Request $request)
    {
        $id = $request->input('id');
        $news = News::find($id);
        $news_title = $request->input('news_title');
        $news->news_title = $request->input('news_title');
        $news->news_content = $request->input('news_content');
        $news->author = $request->input('author');
        $image = $request->file('image');
        $image_title = $news_title . "." . time() . '.' . $image->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('', $image_title);
        $news->image_path = "" . $image_title;
        $news->save();
    }

    public function deleteNews(Request $request, $id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect('')->with('');
    }

    public function viewAllNews(Request $request)
    {
        $news = News::orderBy('created_at', 'desc')->paginate(6);
        return view('page.berita')->with('news', $news);
    }

    public function viewNewsByID(Request $request, $id)
    {
        $recommendedNews = News::orderBy('created_at', 'desc')->limit(3)->get();
        $news = News::find($id);
        return view('page.berita-detail')
            ->with('news', $news)
            ->with('recommendedNews', $recommendedNews);
    }
}
