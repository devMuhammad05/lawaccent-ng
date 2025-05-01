<div
    x-data="{
        init() {
            window.addEventListener('scroll', () => {
                // Load more if the user is within 700px of the bottom of the page
                if ((window.innerHeight + window.scrollY) >= (document.body.offsetHeight - 1000)) {
                    @this.call('loadMore');
                }
            });
        }
    }"
    x-init="init()"
>

<style>
    .loader {
        border: 4px solid #f3f3f3;
        border-top: 4px solid #054d1b;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        animation: spin 0.8s linear infinite;
        margin: 0 auto;
        transform: scale(1.1);
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<section class="blogpostnav">
    <div class="blogpostcontainer">
        <div class="blogpostrow">
            <div
                wire:click="$set('selectedCategory', 'all')"
                class="{{ $selectedCategory === 'all' ? 'blogpostactive' : '' }}"
                style="cursor:pointer;"
            >
                All Blogs
            </div>

            @foreach ($categories as $category)
                <div
                    wire:click="$set('selectedCategory', '{{ $category->name }}')"
                    class="{{ $selectedCategory === $category->name ? 'blogpostactive' : '' }}"
                    style="cursor:pointer;"
                >
                    {{ $category->name }}
                </div>
            @endforeach
        </div>

        <div class="container">
            <hr class="bloghr" />
        </div>
    </div>
</section>

<section class="recent-blog pb-5">
    <div class="container">
        <h4>
            {{ $selectedCategory === 'all' ? 'Recent Blog Posts' : ucfirst(str_replace('-', ' ', $selectedCategory)) . ' Blog Posts' }}
        </h4>

        <div class="row recent-blogrow">
            @forelse ($blogs as $blog)
                <div class="col-md-4">
                    <div class="recentblogcard">
                        <img src="{{ asset('web/assets/images/corporateshake.webp') }}" alt="" />
                        <div class="recentblogcard-body">
                            <h5>{{ $blog->title }}</h5>
                            <p>{{ Str::limit($blog->summary, 100) }}</p>
                            <div class="recentblog-buttons">
                                <button class="btn">
                                    <a href="{{ route('resources.show.blog', $blog->slug) }}">Read More</a>
                                </button>
                                <button class="btn">Download PDF</button>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p>No blog posts found in this category.</p>
            @endforelse
        </div>

        <!-- Only show the loader when actually loading -->
        <div class="row justify-content-center">
            <div class="col-auto">
                <!-- Loading spinner that shows only when loadMore is being executed -->
                <div wire:loading.block wire:target="loadMore" class="d-flex flex-column align-items-center justify-content-center my-5">
                    <div class="loader"></div>
                    <p class="mt-2 text-muted">Loading more posts...</p>
                </div>
            </div>
        </div>
    </div>
</section>

</div>
