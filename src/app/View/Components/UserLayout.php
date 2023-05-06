<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class UserLayout extends Component
{
    /**
     * ページタイトル
     *
     * @var string
     */
    public $title;

    /**
     * コンポーネントインスタンスを作成
     *
     * @param  string  $title
     * @return void
     */
    public function __construct($title = 'Laravel')
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.user');
    }
}
