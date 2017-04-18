<!-- Call to Action
================================================== -->
<section class="cta text-center">

    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h2>Have a great idea? <span class="highlight">Let us help!</span></h2>
                <p><button class="btn contact-button" type="button" role="button">Contact us</button></p>
                <div class="contact-form">
                    <form name="sentMessage" id="contactForm">
                        <div class="name">
                            <input class="form-control first" placeholder="First Name" type="text" id="first_name" autofocus required data-validation-required-message="Please enter your first name">
                            <input class="last" placeholder="Last Name" type="text" id="last_name" required data-validation-required-message="Please enter your last name">
                        </div>
                        <div class="contact">
                            <input class="form-control email" placeholder="E-mail Address" type="text" id="email" required data-validation-required-message="Please enter your email">
                        </div>
                        <div class="message">
                            <textarea class="form-control" placeholder="Your message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                        <div id="success"> </div> <!-- For success/fail messages -->
                        <footer class="submit-button">
                            <button type="submit">Send your message</button>
                        </footer>
                    </form>

                </div>
            </div>
        </div>

    </div>

</section>