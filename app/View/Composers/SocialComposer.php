<?php

namespace App\View\Composers;

use App\Models\Social;
use Illuminate\View\View;

class SocialComposer
{
    public function compose(View $view): void
    {
        $socials = Social::first();
        $view->with('socials', $socials);
    }
}
