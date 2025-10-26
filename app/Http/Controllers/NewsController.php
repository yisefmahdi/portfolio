<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Companie;
use App\Models\Header_images;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function view_all_news() {
        $companies      = Companie::OrderBy('id', 'DESC')->get();
        $header_images  = Header_images::OrderBy('id', 'DESC')->get();
        $news           = News::OrderBy('id', 'DESC')->get();
        $news_rondome   = News::inRandomOrder()->get();
        $advs           = Advertisement::OrderBy('id', 'DESC')->get();
        return view('news.all-news-', compact('companies', 'header_images', 'news', 'news_rondome', 'advs'));
    }

    public function view_news($id) {
        $view_news = News::findorfail($id);
        $news_rondome   = News::inRandomOrder()->get();
        return view('news.view-news', compact('view_news', 'news_rondome'));
    }

    public function index() {
        return view('dashboard.news');
    }
}
