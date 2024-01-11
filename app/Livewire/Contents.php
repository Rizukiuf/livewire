<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Contents extends Component
{
    public $count = 8;
    public function render()
    {
        $articles = Article::take($this->count)->get();
        return view('livewire.contents',
        [
            'articles' => $articles,
            'total_articles' => Article::count(),
        ]);
    }

    public function loadmore() {
        $this->count += 8;
        sleep(0.5);
    }
}
