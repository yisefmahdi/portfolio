<?php

namespace App\Http\Livewire;

use App\Models\Advertisement;
use App\Models\Companie;
use App\Models\Header_images;
use App\Models\News;
use Livewire\Component;

class NewsViwe extends Component
{
    public $ch_search = false, $text_search, $search_news;

    public function search() {
        $this->ch_search = true;
        $this->search_news = News::where('title', 'like', $this->text_search.'%')->get();
    }
    public function render()
    {
        $companies      = Companie::OrderBy('id', 'DESC')->get();
        $header_images  = Header_images::OrderBy('id', 'DESC')->get();
        $news           = News::OrderBy('id', 'DESC')->get();
        $news_rondome   = News::inRandomOrder()->get();
        $advs           = Advertisement::OrderBy('id', 'DESC')->get();
        return view('livewire.news-viwe', compact('companies', 'header_images', 'news', 'news_rondome', 'advs'));
    }
}
