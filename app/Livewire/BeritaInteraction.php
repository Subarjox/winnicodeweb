<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Berita;
use Illuminate\Support\Facades\Cookie;

class BeritaInteraction extends Component
{
    public $berita;
    public $likeCount;
    public $dislikeCount;
    public $viewCount;

    public function mount(Berita $berita)
    {
        $this->berita = $berita;
        $this->likeCount = $berita->likes;
        $this->dislikeCount = $berita->dislikes;
        $this->viewCount = $berita->views;

        $this->trackView();
    }

    public function trackView()
    {
        $cookieName = 'viewed_' . $this->berita->id;
        if (!Cookie::get($cookieName)) {
            $this->berita->increment('views');
            $this->viewCount++;
            Cookie::queue($cookieName, true, 60 * 24); // 1 hari
        }
    }

    public function like()
    {
        $cookieName = 'liked_' . $this->berita->id;
        if (!Cookie::get($cookieName)) {
            $this->berita->increment('likes');
            $this->likeCount++;
            Cookie::queue($cookieName, true, 60 * 24);
        }
    }

    public function dislike()
    {
        $cookieName = 'disliked_' . $this->berita->id;
        if (!Cookie::get($cookieName)) {
            $this->berita->increment('dislikes');
            $this->dislikeCount++;
            Cookie::queue($cookieName, true, 60 * 24);
        }
    }

    public function render()
    {
        return view('livewire.berita-stats');
    }
}

