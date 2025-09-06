<div class="col-md-6 col-lg-4 mb-4">
    <div class="card bg-dark text-white rounded-4 border-0">
        <img src="{{ $project['src'] }}" class="card-img-top rounded-top-4" alt="{{ $project['title'] }}">
        <div class="card-body">
            <h5 class="card-title">{{ $project['title'] }}</h5>
            <p class="card-text">{{ \Illuminate\Support\STR::limit($project['text'], 200, '...') }}</p>
            <a href="{{ $project['url'] }}" class="btn btn-primary">Go to Project</a>
        </div>
    </div>
</div>