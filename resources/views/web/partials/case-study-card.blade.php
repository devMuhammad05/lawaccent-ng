<div class="row recent-blogrow">
    @forelse ($caseStudies as $caseStudy)
        <div class="col-md-4">
            <div class="recentcasestudycard">
                <img src="{{ asset($caseStudy->thumbnail) }}" alt="" />
                <div class="recentcasestudycard-body">
                    <h5>{{ $caseStudy->title }}</h5>
                    <b>Legal Issues Explored</b>
                    <p>
                        {{ $caseStudy->legal_issues_explored }}
                    </p>
                    <div class="recentcasestudy-buttons">
                        <button class="btn">
                            <a href="{{ route('resources.show.case.study', $caseStudy->slug) }}">Read More</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <p>No case study found in this category.</p>
    @endforelse
</div>


