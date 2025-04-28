<?php

namespace App\View\Composers;

use App\Models\TestimonialSlider;
use Illuminate\View\View;

class TestimonialComposer
{
    public function compose(View $view): void
    {
        $testimonials = TestimonialSlider::all();
        $view->with('testimonials', $testimonials);
    }
}
