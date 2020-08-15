@extends('layout.app')
@section('content')
<section id="resume">
<!-- <section id="resume" class="grey-section"></section> -->
    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Works</h5>
            <!-- <h1>More of my credentials.</h1>

            <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi
                aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p> -->
        </div>
    </div> <!-- /section-intro-->

    <div class="row resume-timeline">

        <div class="col-twelve">

            <div class="timeline-wrap">

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-work"></i>
                    </div>

                    <div class="timeline-header">
                        <img src="https://res.cloudinary.com/haazniz3y/image/upload/v1597450568/Screenshot_497_hkgurp.png" alt="My Profile Site" width="400" height="350px">
                    </div>

                    <div class="timeline-content">
                        <h3>Personal Portfolio Site</h3>
                        <p>
                            This is simply my personal profile / porfolio; it contains stuffs about me, basically a personal porfolio for potential recuiters to see me. it was built with Laravel, sections of this app include:
                            <br>
                            -About me.
                            <br>
                            -Contact.
                            <br>
                            -Works 
                            <br>
                            -My Resume.

                        </p>
                            <div class="row button-section">
                                <div class="col-twelve">
                                    <a href="https://github.com/sodiadrhain/profile" title="Source Code" class="button stroke" target="_blank">Source code</a>
                                    <a href="https://soji-profile.herokuapp.com/" title="Demo" class="button stroke" target="_blank">Demo</i></a>
                                </div>
                            </div>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <!--                     <div class="timeline-header">
                                        <h3>Backend Developer</h3>
                                        <p>June 2020 - Present</p>
                                    </div> -->

                    <div class="timeline-content">
                        <h3>HNG Internship</h3>
                        <p>
                            <ul>
                                <li>
                                    Took part in the tech competition HNG Internship, finished as a finalist.
                                </li>
                                <li>
                                    Designed backend logic and database schemas for team projects including
                                    FundMyLaptop, TalentPool and GetViral.
                                </li>
                                <li>
                                    Lead my team and assisted in project management on different occasions.
                                </li>
                                <li>
                                    Deployed apps and worked on dockerizing apps, microservices and APIs.
                                </li>
                                <li>
                                    Collaborated with other team members in using Git, Github and
                                    Clubhouse.io to manage and deliver projects.
                                </li>
                            </ul>
                        </p>
                            <div class="row button-section">
                                <div class="col-twelve">
                                    <a href="#contact" title="About" class="button stroke smoothscroll"><i class="fa fa-arrow-left"> </i> About</a>
                                    <a href="#" title="Works" class="button stroke smoothscroll">Works <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                    </div>

                </div> <!-- /timeline-block -->
<div class="timeline-block">

    <div class="timeline-ico">
        <i class="fa fa-briefcase"></i>
    </div>

    <!--                     <div class="timeline-header">
                        <h3>Backend Developer</h3>
                        <p>June 2020 - Present</p>
                    </div> -->

                    <div class="timeline-content">
                        <h3>HNG Internship</h3>
                        <p>
                            <ul>
                                <li>
                                    Took part in the tech competition HNG Internship, finished as a finalist.
                                </li>
                                <li>
                                    Designed backend logic and database schemas for team projects including
                                    FundMyLaptop, TalentPool and GetViral.
                                </li>
                                <li>
                                    Lead my team and assisted in project management on different occasions.
                                </li>
                                <li>
                                    Deployed apps and worked on dockerizing apps, microservices and APIs.
                                </li>
                                <li>
                                    Collaborated with other team members in using Git, Github and
                                    Clubhouse.io to manage and deliver projects.
                                </li>
                            </ul>
                        </p>
                            <div class="row button-section">
                                <div class="col-twelve">
                                    <a href="#contact" title="About" class="button stroke smoothscroll"><i class="fa fa-arrow-left"> </i> About</a>
                                    <a href="#" title="Works" class="button stroke smoothscroll">Works <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                    </div>

                </div> <!-- /timeline-block -->
            </div> <!-- /timeline-wrap -->

        </div> <!-- /col-twelve -->

    </div> <!-- /resume-timeline -->
    
    <br>
    <div class="row button-section">
        <div class="col-twelve">
            <a href="/resume" title="Resume" class="button stroke"><i class="fa fa-arrow-left"> </i> Resume</a>
            <a href="/contact" title="Contact" class="button stroke">Contact <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>

</section> <!-- /features -->
@endsection