<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="static-portfolio/vendor/helmet.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="vendor/main.css">
    <link rel="stylesheet" href="vendor/navbar.css">
    <link rel="stylesheet" href="vendor/portfolio.css">

    <title>Władysław Wojtowicz - Portfolio</title>
</head>
<body>
    <main>
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
                    My professional journey has provided me with experience in a wide range of technologies, including Laravel,
                    ASP.NET Core, PHP, C#, Java, Kotlin, Angular, and JavaScript, as well as server platforms like Linux and Azure.
                    For my Bachelors thesis, I developed an e-learning platform, and my Masters thesis involved creating a robot based on a Raspberry Pi 5,
                    leveraging Azure cloud technologies. I am an active member of the KN RAI Robotics and Automation Student Club, where I design and program
                    robots, effectively blending my passion for electronics with advanced
                    programming.
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
                    <p class="text-white mb-2"><strong>3D graphics and modeling:</strong> SolidWorks, Blender</p>
                    <p class="text-white mb-2"><strong>DevOps:</strong> Jenkins, Git</p>
                </div>
            </div>
        </div>
        
        <div id="skillsCarousel" class="carousel slide my-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-3 d-flex justify-content-center">
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="progress blue" data-percentage="90">
                                    <span class="progress-left"><span class="progress-bar"></span></span>
                                    <span class="progress-right"><span class="progress-bar"></span></span>
                                    <div class="progress-value">90 %</div>
                                </div>
                                <h3 class="h5 fw-bold text-white mt-2">Programming</h3>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center">
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="progress blue" data-percentage="85">
                                    <span class="progress-left"><span class="progress-bar"></span></span>
                                    <span class="progress-right"><span class="progress-bar"></span></span>
                                    <div class="progress-value">85 %</div>
                                </div>
                                <h3 class="h5 fw-bold text-white mt-2">Frontend</h3>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center">
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="progress blue" data-percentage="85">
                                    <span class="progress-left"><span class="progress-bar"></span></span>
                                    <span class="progress-right"><span class="progress-bar"></span></span>
                                    <div class="progress-value">85 %</div>
                                </div>
                                <h3 class="h5 fw-bold text-white mt-2">Backend</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-3 d-flex justify-content-center">
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="progress blue" data-percentage="75">
                                    <span class="progress-left"><span class="progress-bar"></span></span>
                                    <span class="progress-right"><span class="progress-bar"></span></span>
                                    <div class="progress-value">75 %</div>
                                </div>
                                <h3 class="h5 fw-bold text-white mt-2">Databases</h3>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center">
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="progress blue" data-percentage="80">
                                    <span class="progress-left"><span class="progress-bar"></span></span>
                                    <span class="progress-right"><span class="progress-bar"></span></span>
                                    <div class="progress-value">80 %</div>
                                </div>
                                <h3 class="h5 fw-bold text-white mt-2">Server</h3>
                            </div>
                        </div>


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
                            <img src="vendor/images/astronaut-form.png" alt="Astronaut" class="img-fluid"
                                style="max-width: 600px;">
                        </div>
                        <div class="col-md-7">
                            <form action="" method="POST" novalidate>
                                <h1 class="display-4 fw-bold text-center mb-5">Get in Touch</h1>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="firstName" class="form-label visually-hidden">First Name</label>
                                        <input type="text"
                                            class="form-control form-control-lg custom-input"
                                            id="firstName" name="firstName" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lastName" class="form-label visually-hidden">Last Name</label>
                                        <input type="text"
                                            class="form-control form-control-lg custom-input"
                                            id="lastName" name="lastName" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label visually-hidden">Email
                                            Address</label>
                                        <input type="email"
                                            class="form-control form-control-lg custom-input"
                                            id="email" name="email" placeholder="Email Address">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label visually-hidden">Phone Number</label>
                                        <input type="tel"
                                            class="form-control form-control-lg custom-input"
                                            id="phone" name="phone" placeholder="Phone Number"
                                            value="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label visually-hidden">Message</label>
                                    <textarea class="form-control form-control-lg custom-input" id="message"
                                        name="message" placeholder="Message" rows="4"></textarea>
                                </div>
                                <button type="submit" class="btn btn-light btn-lg">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-color-dark py-4 text-white">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="text-white text-decoration-none" href="#">
            <span class="h1 fw-bold">Portfolio</span>
        </a>
        <p class="mb-0 text-white">
            <small>Copyright 2025. All rights reserved</small>
        </p>
    </div>
    </footer>

    </main>
</body>
</html>