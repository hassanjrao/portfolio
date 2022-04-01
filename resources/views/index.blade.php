@extends('layouts.front')

@section('content')
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <!-- About-->
        <section class="resume-section" id="about">
            <div class="resume-section-content">
                <h1 class="mb-0">
                    Hassan
                    <span class="text-primary">Javaid Rao</span>
                </h1>
                <div class="subheading mb-5">
                    Currently in Muscat, basically from Pakistan · (+968) 99763464 ·
                    <a href="mailto:hassanjrao@gmail.com">hassanjrao@gmail.com</a>
                </div>
                <p class="lead">A passionate software engineer
                    who loves to develop modern web
                    applications with modern
                    languages and tools. My expertise lies in <b>Laravel</b> echo system.</p>

                <p class="lead mb-5">Laravel | Livewire | React | Rest Apis | Server Management | Git & Github</p>
                <div class="social-icons">
                    <a class="social-icon" target="__blank" href="https://www.linkedin.com/in/hassanjrao/"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" target="__blank" href="https://www.github.com/hassanjavaidrao"><i
                            class="fab fa-github"></i></a>

                </div>
            </div>
        </section>
        <hr class="m-0" />
        <!-- Experience-->
        <section class="resume-section" id="experience">
            <div class="resume-section-content">
                <h2 class="mb-5">Experience</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Software Engineer (Laravel/Livewire)</h3>
                        <div class="subheading mb-3">Thiqa Tech - Muscat, Oman</div>
                        <p>Integrate new features and maintain the existing system developed with Laravel and Livewire. Along with the development, I've to mangage server management as well.</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">January 2022 - Present</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Freelance Web Application Developer</h3>
                        <div class="subheading mb-3"> <a target="__blank" href="https://www.fiverr.com/hasssanjavaidrao">fiverr.com/hasssanjavaidrao</a></div>
                        <p>A level 2 seller on fiverr. Have developed and maintain many web applications of clients, few of them are listed in projects section. Also you can click on the <a href="fiverr.com/hassanjavaidrao">link</a> to see the reviews of my clients about me.</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">January 2020 - Present</span></div>
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">Intern at System Department</h3>
                        <div class="subheading mb-3">Oil & Gas Development Company Ltd. (OGDCL)</div>
                        <p>Observe and maintain their Database systems, websites.</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">July 2021 - September 2021</span></div>
                </div>

            </div>
        </section>
        <hr class="m-0" />
        <!-- Education-->
        <section class="resume-section" id="education">
            <div class="resume-section-content">
                <h2 class="mb-5">Education</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="flex-grow-1">
                        <h3 class="mb-0">IBA Sukkur</h3>
                        <div class="subheading mb-3">Bachelor of Science</div>
                        <div>Software Engineering</div>
                        <p>GPA: 3.1</p>
                    </div>
                    <div class="flex-shrink-0"><span class="text-primary">January 2017 - January 2021</span></div>
                </div>

            </div>
        </section>
        <hr class="m-0" />
        <!-- Skills-->
        <section class="resume-section" id="skills">
            <div class="resume-section-content">
                <h2 class="mb-5">Skills</h2>
                <div class="subheading mb-3">Programming Languages & Tools</div>
                <ul class="list-inline dev-icons">

                    <li class="list-inline-item"><i class="fa-brands fa-laravel text-danger"></i> Laravel</li>
                    <li class="list-inline-item"><img width="40px" src="{{ asset("media/livewire.png") }}" alt=""> Livewire</li>
                    <li class="list-inline-item"><i class="fab fa-react" style="color: #61DBFB"></i> React JS</li>
                    <li class="list-inline-item"><i class="fa-brands fa-bootstrap" style="color: #563d7c"></i> Bootstrap</li>
                    <li class="list-inline-item"><i class="fab fa-html5 " style="color: #e34c26"></i> HTML</li>
                    <li class="list-inline-item"><i class="fab fa-css3-alt" style="color: #264de4"></i> CSS</li>
                    <li class="list-inline-item"><i class="fab fa-js-square" style="color: #f0db4f"></i> JS</li>

                    <li class="list-inline-item"><i class="fab fa-sass" style="color: #CD6799"></i> SCSS</li>

                    <li class="list-inline-item"><i class="fa-brands fa-digital-ocean" style="color: #008bcf"></i>Digital Ocean</li>
                    <li class="list-inline-item"><i class="fa-brands fa-github" style="color: #171515"></i>Git & Github</li>


                </ul>
                <div class="subheading mb-3">Workflow</div>
                <ul class="fa-ul mb-0">
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Gather Requirements
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Design Architecture & Database
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Develop & Test
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-check"></i></span>
                        Deploy & Maintain
                    </li>
                </ul>
            </div>
        </section>




        <hr class="m-0" />
        <!-- Projects-->
        <section class="resume-section" id="Projects">
            <div class="resume-section-content">
                <h2 class="mb-5">Projects</h2>

                <h4>Coming Soon...</h4>
            </div>
        </section>


        <hr class="m-0" />
        <!-- Awards-->
        <section class="resume-section" id="awards">
            <div class="resume-section-content">
                <h2 class="mb-5">Awards & Certifications</h2>
                <ul class="fa-ul mb-0">

                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        1
                        <sup>st</sup>
                        Place - Code in the Dark Competition in Tech Fest event held at Sukkur IBA
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        1
                        <sup>st</sup>
                        Place - Web Design Competition in IEE PSYWSC 2019
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Responsive Web Design Certificate by freeCodeCamp
                    </li>
                    <li>
                        <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                        Certificate of Completion of Course: Become an Expert in Git & Github
                        by Udemy.
                    </li>

                </ul>
            </div>
        </section>
    </div>
@endsection
