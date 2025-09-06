<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MailSendRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class PortfolioController extends Controller
{
    public function index()
    {
        $aboutme = <<<EOD
        I am a Master of Computer Science with a passion for creating innovative solutions 
        in web development, robotics, and electronics. 
        As an experienced programmer and freelance Laravel specialist, 
        I have been delivering high-quality, functional, and aesthetically pleasing websites 
        for over two years. 
        My projects combine a solid technical background 
        with a creative approach to design and modern technologies.
        EOD;
        $skill = <<<EOD
        My professional journey has provided me with experience in a wide range of technologies, including Laravel,
        ASP.NET Core, PHP, C#, Java, Kotlin, Angular, and JavaScript, as well as server platforms like Linux and Azure.
        For my Bachelors thesis, I developed an e-learning platform, and my Masters thesis involved creating a robot based on a Raspberry Pi 5,
        leveraging Azure cloud technologies. I am an active member of the KN RAI Robotics and Automation Student Club, where I design and program
        robots, effectively blending my passion for electronics with advanced
        programming.
        EOD;

        $skills = [
            ['percentage' => 90, 'name' => 'Programming'],
            ['percentage' => 85, 'name' => 'Frontend'],
            ['percentage' => 85, 'name' => 'Backend'],
            ['percentage' => 75, 'name' => 'Databases'],
            ['percentage' => 80, 'name' => 'Server'],
            ['percentage' => 95, 'name' => 'Robotics'],
            ['percentage' => 70, 'name' => '3D Graphics'],
            ['percentage' => 80, 'name' => 'DevOps'],
        ];

        $projectTabs = [
            [
                'id' => 'programs',
                'name' => 'Programs',
                'projects' => [
                    [
                        'src' => asset('images/Websites-icons/Devastator.png'),
                        'title' => 'DFRobot Devastator - Robotic Research Vehicle',
                        'text' => 'A durable tracked platform based on Raspberry Pi, perfect for terrain exploration. I built it to experiment with autonomous navigation and environmental data collection using built-in sensors and a camera.',
                        'url' => 'https://github.com/ProgramisLife/DFRobot-Devastator',
                    ],
                    [
                        'src' => asset('images/Websites-icons/jet-racer.png'),
                        'title' => 'JetRacer - AI Platform for Autonomous Driving',
                        'text' => 'Built on a NVIDIA Jetson Nano, this AI vehicle allows for learning and implementing machine learning models for autonomous driving. I used TensorFlow and DonkeyCar libraries to train a model that can stay on a track.',
                        'url' => 'https://github.com/ProgramisLife/JetRacer',
                    ],
                    [
                        'src' => asset('images/Websites-icons/raspberry-pi.png'),
                        'title' => 'Raspberry Pi - IoT Project with Azure Cloud',
                        'text' => 'A project for my Master\'s thesis. I built a robot based on Raspberry Pi 5 that collects environmental data (e.g., air quality) and sends it to the Azure cloud using IoT Hub. The data is then visualized and analyzed in real-time.',
                        'url' => 'https://github.com/ProgramisLife/Raspberry-Pi---Projekt-IoT-z-Azure-Cloud',
                    ],
                ]
            ],
            [
                'id' => 'graphics',
                'name' => 'Graphics',
                'projects' => [
                    [
                        'src' => asset('images/Websites-icons/Robot-Dog.png'),
                        'title' => 'Robot-Dog - Autonomous Research Platform',
                        'text' => 'An advanced quadruped platform designed for exploring challenging terrain. It utilizes sophisticated navigation algorithms and sensors to collect environmental data. This project is ideal for experimenting with machine learning and AI in mobile robotics.',
                        'url' => 'https://github.com/ProgramisLife/Robot-Dog',
                    ],
                    [
                        'src' => asset('images/Websites-icons/RobotArm.png'),
                        'title' => 'Robotic Arm - High-Precision Manipulator',
                        'text' => 'A robotic arm project built for the precise grasping and manipulation of objects. The design allows for smooth and accurate movements, making it perfect for learning about robot control and task automation.',
                        'url' => 'https://github.com/ProgramisLife/Robotic-Arm',
                    ],
                ]
            ],
            [
                'id' => 'website',
                'name' => 'Website',
                'projects' => [
                    [
                        'src' => asset('images/Websites-icons/Portfolio.png'),
                        'title' => 'Personal Portfolio Website',
                        'text' => 'A fully responsive and modern portfolio website showcasing my skills and projects. Built with Laravel and Bootstrap, it features a dynamic skills carousel and filterable project cards, demonstrating my full-stack web development capabilities.',
                        'url' => 'https://github.com/ProgramisLife/Portfolio',
                    ],
                    [
                        'src' => asset('images/Websites-icons/Audiobook.png'),
                        'title' => 'Audiobooks Platform',
                        'text' => 'An innovative platform for streaming and managing audiobooks. The project was built using a robust backend (Laravel) for content management and user authentication, providing a seamless listening experience with a focus on usability and performance.',
                        'url' => 'https://github.com/ProgramisLife/Audiobook-Platform',
                    ],
                    [
                        'src' => asset('images/Websites-icons/Courses.png'),
                        'title' => 'E-learning Courses Website',
                        'text' => 'A custom e-learning platform designed for creating and selling online courses. The website features user registration, secure payment integration, and a dedicated admin panel for course creators, all built with modern web standards to ensure scalability.',
                        'url' => 'https://github.com/ProgramisLife/E-learning-Website',
                    ],
                ]
            ]
        ];



        return view(
            'portfolio.index',
            compact('aboutme', 'skill', 'skills', 'projectTabs')
        );
    }

    public function store(MailSendRequest $request)
    {
        $validated = $request->validated();

        try {
            Mail::to('wladyslaw.wojtowicz@student.put.poznan.pl')->send(new ContactMail($validated));
        } catch (\Exception $e) {
            return redirect()->back()->with('status', [
                'success' => false,
                'message' => 'Wystąpił błąd podczas wysyłania wiadomości.'
            ]);
        }

        return redirect()->back()->with('status', [
            'success' => true,
            'message' => 'Wiadomość została wysłana pomyślnie!'
        ]);
    }
}