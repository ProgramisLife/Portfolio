<div class="col-md-3 d-flex justify-content-center">
    <div class="d-flex flex-column align-items-center text-center">
        <div class="progress blue" data-percentage="{{ $percentage }}">
            <span class="progress-left">
                <span class="progress-bar"></span>
            </span>
            <span class="progress-right">
                <span class="progress-bar"></span>
            </span>
            <div class="progress-value">
                {{ $percentage }} %
            </div>
        </div>
        <h3 class="h5 fw-bold text-white mt-2">{{ $name }}</h3>
    </div>
</div>
