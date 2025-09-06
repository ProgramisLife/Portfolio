@extends('layouts.app')

@section('title', 'Władysław Wojtowicz - Portfolio')

@section('content')

    @if (session()->has('status'))
        <div class="mail-status {{ session('status')['success'] ? 'success-status' : 'error-status' }}">
            {{ session('status')['message'] }}
        </div>
    @endif

    <section id="home" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 text-center text-lg-start justify-content-between">
                    <div class="border-gradient">
                        <h1 class="text-light">Welcome to my portfolio</h1>
                    </div>
                    <h2 class="text-white mb-4">Hi! I'm Władysław</h2>
                    <p class="text-white lead mb-5">
                        {{ $aboutme }}
                    </p>
                    <a href="{{ asset('cv/cv_wladyslaw_wojtowicz.pdf') }}" download="Wladyslaw-Wojtowicz-CV.pdf"
                        class="btn btn-gradient btn-lg mt-3">Download CV</a>
                </div>
                <div class="col-lg-5 text-center order-first order-lg-last">
                    <img src="{{ asset('images/astronaut.png') }}" alt="Astronaut" class="img-fluid hero-image">
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="skills py-5">
        <div class="container bg-color-dark-radius py-5">
            <h2 class="display-4 fw-bold my-5 text-white text-center">Skills</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <p class="text-align-left text-white mb-5">
                        {{ $skill }}
                    </p>
                    <div class="text-start">
                        <p class="text-white mb-2"><strong>Programming:</strong> PHP, C#, C++, C, Java, Kotlin.
                        </p>
                        <p class="text-white mb-2"><strong>Frontend:</strong> Angular, Vue, React.</p>
                        <p class="text-white mb-2"><strong>BackEnd:</strong> Laravel, ASP.NET Core.
                        </p>
                        <p class="text-white mb-2"><strong>Databases:</strong> MySQL, PostgreSQL.</p>
                        <p class="text-white mb-2"><strong>Server:</strong> Linux, Azure, NGINX, Apache.</p>
                        <p class="text-white mb-2"><strong>Electronics and Robotics:</strong> Build and Programming Robots,
                            ESP32, Arduino,
                            Raspberry Pi, STM32.
                        </p>
                        <p class="text-white mb-2"><strong>
                                3D graphics and modeling:</strong>
                            SolidWorks, Blender
                        </p>
                        <p class="text-white mb-2"><strong>
                                DevOps:</strong>
                            Jenkins, Git
                        </p>
                    </div>
                </div>
            </div>


            <div id="skillsCarousel" class="carousel slide my-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @php
                        $chunkedSkills = array_chunk($skills, 3);
                    @endphp

                    @foreach ($chunkedSkills as $key => $chunk)
                        <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                            <div class="row d-flex justify-content-center">
                                @foreach ($chunk as $skill)
                                    @include('portfolio.components.skill', [
                                        'percentage' => $skill['percentage'],
                                        'name' => $skill['name'],
                                    ])
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#skillsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#skillsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects py-5">
        <div class="container text-white">
            <h2 class="display-4 fw-bold text-center mb-5">Projects</h2>
            <div class="d-flex justify-content-center">
                <ul class="nav nav-pills nav-justified mb-5">
                    @foreach ($projectTabs as $tab)
                        <li class="nav-item">
                            <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ $tab['id'] }}-tab"
                                data-bs-toggle="pill" data-bs-target="#{{ $tab['id'] }}-pill" type="button"
                                role="tab" aria-controls="{{ $tab['id'] }}-pill"
                                aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $tab['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="tab-content" id="pills-tabContent">
                @foreach ($projectTabs as $tab)
                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="{{ $tab['id'] }}-pill"
                        role="tabpanel" aria-labelledby="{{ $tab['id'] }}-tab" tabindex="0">
                        <div class="row">
                            @foreach ($tab['projects'] as $project)
                                @if ($tab['id'] === 'programs')
                                    @include('portfolio.components.card', ['project' => $project])
                                @else
                                    @include('portfolio.components.card', ['project' => $project])
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="contact" class="contact bg-color-gradient">
        <div class="container text-white">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-5 text-center mb-4 mb-md-0">
                            <img src="images/astronaut-form.png" alt="Astronaut" class="img-fluid"
                                style="max-width: 600px;">
                        </div>
                        <div class="col-md-7">
                            <form action="#contact" method="POST" novalidate>
                                @csrf
                                <h1 class="display-4 fw-bold text-center mb-5">Get in Touch</h1>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label visually-hidden">First Name</label>
                                        <input type="text"
                                            class="form-control form-control-lg custom-input @error('firstName') is-invalid @enderror"
                                            id="firstName" name="firstName" placeholder="First Name"
                                            value="{{ old('firstName') }}">
                                        @error('firstName')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label visually-hidden">Last Name</label>
                                        <input type="text"
                                            class="form-control form-control-lg custom-input @error('lastName') is-invalid @enderror"
                                            id="lastName" name="lastName" placeholder="Last Name"
                                            value="{{ old('lastName') }}">
                                        @error('lastName')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label visually-hidden">Email Address</label>
                                        <input type="email"
                                            class="form-control form-control-lg custom-input @error('email') is-invalid @enderror"
                                            id="email" name="email" placeholder="Email Address"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label visually-hidden">Phone Number</label>
                                        <input type="tel"
                                            class="form-control form-control-lg custom-input @error('phone') is-invalid @enderror"
                                            id="phone" name="phone" placeholder="Phone Number"
                                            value="{{ old('phone') }}">
                                        @error('phone')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label visually-hidden">Message</label>
                                    <textarea class="form-control form-control-lg custom-input @error('message') is-invalid @enderror" id="message"
                                        name="message" placeholder="Message" rows="4">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-light btn-lg">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
