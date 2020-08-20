@extends('layout.app')
@section('content')
<!-- about section
   ================================================== -->
<section id="about">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>About Me</h5>

            <div class="intro-info">

                <img src="images/profile-pic.jpg" alt="Profile Picture">

                <p class="lead">I am Adesoji Awobajo, a software engineer that loves building new stuffs, solving problems that gets to make things work. I am a fan of clean code too; love to find bugs and fix them; In my leisure I watch football or play video games, else I sleep. I also like researching in finding new ideas and solutions to problems.</p>
            </div>

        </div>
    </div> <!-- /section-intro -->

    <div class="row about-content">

        <div class="col-six tab-full">

            <h3>Profile</h3>
            <!-- <p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia
                consectetur nisi commodo ea magna pariatur nisi cillum.</p> -->

            <ul class="info-list">
                <li>
                    <strong>Fullname:</strong>
                    <span>Adesoji Awobajo</span>
                </li>
                <li>
                    <strong>Birth Date:</strong>
                    <span>October 24, ----</span>
                </li>
                <li>
                    <strong>Job:</strong>
                    <span>Freelancer, Frontend Developer, Backend Developer, Devops Engineer, Webmaster</span>
                </li>
                <!-- <li>
                    <strong>Website:</strong>
                    <span>www.kardswebsite.com</span>
                </li> -->
                <li>
                    <strong>Email:</strong>
                    <span>adesojiawobajo@gmail.com</span>
                </li>
                <li>
                    <strong>Phone:</strong>
                    <span>(234) 818-582-0902</span>
                </li>
                <li>
                    <strong>Location:</strong>
                    <span>Lagos, Nigeria</span>
                </li>

            </ul> <!-- /info-list -->

        </div>

        <div class="col-six tab-full">

            <h3>Skills</h3>
            <!-- <p>Lorem ipsum Qui veniam ut consequat ex ullamco nulla in non ut esse in magna sint minim officia
                consectetur nisi commodo ea magna pariatur nisi cillum.</p> -->

            <ul class="skill-bars">
                <li>
                    <div class="progress percent85"><span>80%</span></div>
                    <strong>HTML, CSS</strong>
                </li>
                <li>
                    <div class="progress percent75"><span>75%</span></div>
                    <strong>JavaScript</strong>
                </li>
                <li>
                    <div class="progress percent80"><span>80%</span></div>
                    <strong>PHP, Laravel</strong>
                </li>
                <li>
                    <div class="progress percent85"><span>85%</span></div>
                    <strong>Wordpress</strong>
                </li>
                <li>
                    <div class="progress percent60"><span>60%</span></div>
                    <strong>Reactjs</strong>
                </li>
                <li>
                    <div class="progress percent70"><span>60%</span></div>
                    <strong>Node, Expressjs</strong>
                </li>
                <li>
                    <div class="progress percent60"><span>60%</span></div>
                    <strong>DevOps</strong>
                </li>

            </ul> <!-- /skill-bars -->

        </div>

    </div>

    <div class="row button-section">
        <div class="col-twelve">
            <a href="/" title="Home" class="button stroke"><i class="fa fa-arrow-left"> </i>Home</a>
            <a href="/resume" title="Resume" class="button stroke">Resume <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>

</section> <!-- /process-->
@endsection