<?php

namespace App\Livewire;

use App\Models\CaseStudy;
use App\Models\CaseStudyCategory;
use Livewire\Component;
use Illuminate\Support\Collection;

class CaseStudies extends Component
{
    public $selectedCategory = 'all';
    public Collection $caseStudies;
    public $totalCaseStudies;
    public $categories;
    public $page = 1;
    public $perPage = 3;
    public $hasMorePages = true;

    public function mount()
    {
        $this->caseStudies = collect(); // Initialize empty collection
        // $this->totalCaseStudies = CaseStudy::all();
        $this->categories = CaseStudyCategory::all();
        $this->loadCaseStudies();
    }

    public function updatedSelectedCategory()
    {
        $this->reset(['page', 'caseStudies', 'hasMorePages']);
        $this->loadCaseStudies();
    }

    public function loadCaseStudies()
    {
        $query = CaseStudy::active()->with('category')->select('id', 'title', 'legal_issues_explored', 'thumbnail', 'slug');

        if ($this->selectedCategory !== 'all') {
            $query->whereHas('category', function ($q) {
                $q->where('name', $this->selectedCategory);
            });
        }

        $newStudies = $query->latest()
            ->skip(($this->page - 1) * $this->perPage)
            ->take($this->perPage + 1)
            ->get();

        if ($newStudies->count() > $this->perPage) {
            $this->hasMorePages = true;
            $newStudies = $newStudies->slice(0, $this->perPage);
        } else {
            $this->hasMorePages = false;
        }

        if ($this->page === 1) {
            $this->caseStudies = $newStudies;
        } else {
            $this->caseStudies = $this->caseStudies->merge($newStudies);
        }
    }

    public function loadMore()
    {
        if (!$this->hasMorePages) {
            return;
        }

        $this->page++;
        $this->loadCaseStudies();
    }

    public function render()
    {
        return view('web.partials.case-study', [
            'caseStudies' => $this->caseStudies,
            'hasMorePages' => $this->hasMorePages,
        ]);
    }
}
