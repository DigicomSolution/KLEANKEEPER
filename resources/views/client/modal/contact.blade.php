<div class="commercial-form" style="margin-top: 0px">
    <div class="commercial-form-hd">
        <i class="fas fa-envelope-open-text" aria-hidden="true"></i>
        <span>Please fill this form to</span>
        <h3>Contact us</h3>
    </div>

    <div class="commercial-form-cnt">
        <form id="contact-popup" action="{{url('contact')}}" method="post">
            @csrf
            <input type="hidden" name="type" value="Enquiry now - popup">
            <input type="hidden" name="notes" value="Popup opened from {{url()->full()}}">

            <div class="form-group  ">
                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
            </div>

            <div class="form-group  ">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <input type="hidden" name="google_token" id="g-token">

            <div class="form-group">
                <input type="tel" class="form-control phone-form" id="phone-contact-popup-1" name="phone" placeholder="Phone" width="100%" required>
                <input type="hidden" name="country_code">
                <input type="hidden" name="country">
                <span id="phone-error"></span>
            </div>


            <div class="form-group">
                <input type="text" class="form-control" name="message" placeholder="Your Message" required>
            </div>
            <button type="submit" class="btn btn-sec">Submit Enquiry</button>
        </form>
    </div>
</div>

<script>
    var inp2 = document.querySelector("#phone-contact-popup-1");

    window.intlTelInput(inp2, {
        onlyCountries: ["gb"]
    });

    var iti2 = window.intlTelInputGlobals.getInstance(inp2);

    iti2.setCountry("gb");


    $('#contact-popup').validate({
        rules: {
            email: 'email',
            phone: 'digits'
        },
        messages: {
            name: 'Please enter your name',
            email: 'Please enter a valid email address',
            phone: {
                digits: 'Please enter digits only',
            },
            message: 'Please enter your message',
        },
        errorPlacement: function(error, element) {
            if (element.attr("name") == "phone") {
                error.insertAfter("#phone-error");
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function(form) {
            $('button[type=submit]').html('Processing your request, please wait').attr('disabled', true);



            try {

                $('input[name=country_code]').val(iti2.getSelectedCountryData().dialCode);

                $('input[name=country]').val(iti2.getSelectedCountryData().iso2);


                grecaptcha.ready(function() {
                    console.log(123);
                    grecaptcha.execute('6LeMRrsaAAAAAAZTMxi_DOfNc28VvKAxkvVgW0yD', {
                        action: 'load'
                    }).then(function(token) {
                        $('[id="g-token"]').each(function() {
                            $(this).val(token);
                        });

                         form.submit();
                    });
                });



            } catch (e) {

                console.log('error', e);

                window.location.replace('{{url('error')}}')

            }



        }
    })
</script>