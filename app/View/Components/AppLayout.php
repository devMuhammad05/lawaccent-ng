<?php

namespace App\View\Components;

use App\Models\Social;
use Illuminate\View\View;
use Illuminate\View\Component;

final class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $socials = Social::first();
        return view('web.layouts.app', [
            'socials' => $socials
        ]);
    }
}
