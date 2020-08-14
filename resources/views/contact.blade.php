@extends('layout.app')
@section('content')
<!-- contact
   ================================================== -->
<section id="contact">

    <div class="row section-intro">
        <div class="col-twelve">

            <h5>Contact Me</h5>
            <!-- <h1>I'd Love To Hear From You.</h1> -->

            <p class="lead">Have a gig or job for me? you can use the form below.</p>

        </div>
    </div> <!-- /section-intro -->

    <div class="row contact-form">

        <div class="col-twelve">

            <!-- form -->
            <form name="contactForm" id="contactForm" method="post" action="">
                <fieldset>

                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2"
                            required="">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value=""
                            required="">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50"
                            required=""></textarea>
                    </div>
                    <div class="form-field">
                        <button class="submitform">Submit</button>
                        <div id="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>

                </fieldset>
            </form> <!-- Form End -->

            <!-- contact-warning -->
            <div id="message-warning">
            </div>
            <!-- contact-success -->
            <div id="message-success">
                <i class="fa fa-check"></i>Your message was sent, thank you!<br>
            </div>

        </div> <!-- /col-twelve -->

    </div> <!-- /contact-form -->

 

<!--         
       <div class="row contact-info">
    <div class="col-four tab-full">

            <div class="icon">
                <i class="icon-pin"></i>
            </div>

            <h5>Where to find me</h5>

            <p>
                1600 Amphitheatre Parkway<br>
                Mountain View, CA<br>
                94043 US
            </p>

        </div>

        <div class="col-four tab-full collapse">

            <div class="icon">
                <i class="icon-mail"></i>
            </div>

            <h5>Email Me At</h5>

            <p>someone@kardswebsite.com<br>
                info@kardswebsite.com
            </p>

        </div>

        <div class="col-four tab-full">

            <div class="icon">
                <i class="icon-phone"></i>
            </div>

            <h5>Call Me At</h5>

            <p>Phone: (+63) 555 1212<br>
                Mobile: (+63) 555 0100<br>
                Fax: (+63) 555 0101
            </p>

        </div>
    </div>
    -->

  <!-- /contact-info -->
  <br>
  <br>
    <div class="row button-section">
        <div class="col-twelve">
            <a href="/works" title="Works" class="button stroke"><i class="fa fa-arrow-left">
                </i>Works</a>
            <a href="/" title="Homme" class="button stroke">Home<i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
</section> <!-- /contact -->
@endsection