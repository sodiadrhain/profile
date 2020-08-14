@extends('layout.app')
@section('content')
<!-- resume Section
   ================================================== -->
<section id="resume">
<!-- <section id="resume" class="grey-section"></section> -->
    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Resume</h5>
            <!-- <h1>More of my credentials.</h1>

            <p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi
                aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p> -->
                <br><br>
            <a href="#" title="Download CV" class="button button-primary">Download CV</a>
        </div>
    </div> <!-- /section-intro-->

    <div class="row resume-timeline">

        <div class="col-twelve resume-header">

            <h2>Work Experience</h2>

        </div> <!-- /resume-header -->

        <div class="col-twelve">

            <div class="timeline-wrap">

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Backend Developer</h3>
                        <p>June 2020 - Present</p>
                    </div>

                    <div class="timeline-content">
                        <h4>HNG Internship</h4>
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
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Web Developer</h3>
                        <p>January 2019 - June 2019</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Engineering Submit, Africa</h4>
                        <p>
                            <ul>
                                <li>
                                    I designed and developed the web app for the second edition of the event.
                                </li>
                                <li>
                                    Integrated third-party JavaScript plugins and API for participants to
                                    register easily.
                                </li>
                                <li>
                                    Worked with the design team to improve the user interface and user
                                    experience of the website.
                                </li>
                            </ul>
                        </p>
                    </div>

                </div> <!-- /timeline-block -->

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-briefcase"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Software Engineer (Intern)</h3>
                        <p>October 2018 - December 2018</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Deltaque Nigeria Limited</h4>
                        <p> 
                            <ul>
                                <li>
                                    Worked with the developer and technical teams to achieve goals that are
                                    unified to the achievement of the goals of the marketing and sales team.
                                </li>
                                <li>
                                    I was placed on several tasks working closely with the CTO which
                                    involved collaborating, contributing and communicating with team
                                    members.
                                </li>
                                <li>
                                    I gained more knowledge on software development and also developed a
                                    new version of the company website using PHP (Wordpress).
                                </li>
                            </ul> 
                        </p>
                    </div>

                </div> <!-- /timeline-block -->

            </div> <!-- /timeline-wrap -->

        </div> <!-- /col-twelve -->

    </div> <!-- /resume-timeline -->

    <div class="row resume-timeline">

        <div class="col-twelve resume-header">

            <h2>Education</h2>

        </div> <!-- /resume-header -->

        <div class="col-twelve">

            <div class="timeline-wrap">

                <div class="timeline-block">

                    <div class="timeline-ico">
                        <i class="fa fa-graduation-cap"></i>
                    </div>

                    <div class="timeline-header">
                        <h3>Bachelor Degree</h3>
                        <p>January 2014 - May 2019</p>
                    </div>

                    <div class="timeline-content">
                        <h4>Lagos State University</h4>
                        <p>Graduated with upper class in Electronic and Computer Engineering.</p>
                    </div>

                </div> <!-- /timeline-block -->

            </div> <!-- /timeline-wrap -->

        </div> <!-- /col-twelve -->

    </div> <!-- /resume-timeline -->
    <br>
    <div class="row button-section">
        <div class="col-twelve">
            <a href="/about" title="About" class="button stroke"><i class="fa fa-arrow-left"> </i> About</a>
            <a href="/works" title="Works" class="button stroke">Works <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>

</section> <!-- /features -->
@endsection