<nav class="navbar navbar-expand-lg navbar-dark bg-color-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="#home">
            <h1>Portfolio</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            <div class="d-flex mx-2 gap-3">
                <a href="https://www.linkedin.com/in/w%C5%82adys%C5%82aw-wojtowicz-453519371/" class="bi bi-linkedin icon"></a>
                <a href="https://github.com/ProgramisLife" class="bi bi-github icon"></a>
            </div>
            <a class="btn btn-outline-light ms-4" href="#contact">Let's Connect</a>
        </div>
    </div>
</nav>