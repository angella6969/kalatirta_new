<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class input extends Component
{
    /**
     * Create a new component instance.
     */   public $nama, $judul, $nilai;

    public function __construct($nama, $judul, $nilai)
    {
        $this->nama = $nama;
        $this->judul = $judul;
        $this->nilai = $nilai;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
