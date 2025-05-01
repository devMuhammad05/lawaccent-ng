<?php
namespace App\Livewire;

use App\Models\Blog;
use App\Models\BlogCategory;
use Livewire\Component;
use Illuminate\Support\Collection;

class BlogPosts extends Component
{
    public $selectedCategory = 'all';
    public Collection $blogs;
    public $categories;
    public $page = 1;
    public $perPage = 3; // Increased to show more posts per page (typically 3 or 6 for a grid layout)
    public $hasMorePages = true; // Flag to track if more pages are available

    public function mount()
    {
        $this->blogs = collect(); // Initialize as empty collection
        $this->categories = BlogCategory::all();
        $this->loadBlogs();
    }

    public function updatedSelectedCategory()
    {
        $this->reset(['page', 'blogs', 'hasMorePages']); // Reset pagination and blogs
        $this->loadBlogs();
    }

    public function loadBlogs()
    {
        $query = Blog::with('category');

        if ($this->selectedCategory !== 'all') {
            $query->whereHas('category', function ($q) {
                $q->where('name', $this->selectedCategory);
            });
        }

        $newBlogs = $query->latest()
            ->skip(($this->page - 1) * $this->perPage)
            ->take($this->perPage + 1) // Take one extra to check if more pages exist
            ->get();

        // Check if more pages exist
        if ($newBlogs->count() > $this->perPage) {
            $this->hasMorePages = true;
            $newBlogs = $newBlogs->slice(0, $this->perPage); // Remove the extra item
        } else {
            $this->hasMorePages = false;
        }

        // Merge with existing blogs or set as new collection
        if ($this->page === 1) {
            $this->blogs = $newBlogs;
        } else {
            $this->blogs = $this->blogs->merge($newBlogs);
        }
    }

    public function loadMore()
    {
        if (!$this->hasMorePages) {
            return;
        }

        $this->page++;
        $this->loadBlogs();
    }

    public function render()
    {
        return view('web.partials.blog', [
            'blogs' => $this->blogs,
            'hasMorePages' => $this->hasMorePages,
        ]);
    }
} 
