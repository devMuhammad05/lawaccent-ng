<div class="row recent-blogrow">
    @forelse ($blogs as $blog)
    <div class="col-md-4">
        <div class="recentblogcard">
            <img src="{{ asset($blog->thumbnail) }}" alt="" />
            <div class="recentblogcard-body">
                <h5>{{ $blog->title }}</h5>
                <p>{{ Str::limit($blog->sub_heading, 200, '...') }}</p>
                <div class="recentblog-buttons">
                    <button class="btn">
                        <a href="{{ route('resources.show.blog', $blog->slug) }}">Read More</a>
                    </button>

                    <a href="{{ route('resources.download.blog', $blog->slug) }}" class="btn">
                        Download PDF
                    </a>

                </div>
            </div>
        </div>
    </div>
    @empty
    <p>No blog posts found in this category.</p>
    @endforelse
</div>

