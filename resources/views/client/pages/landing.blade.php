@php
    // --- CONFIGURATION ---
    $phone_number_display = '+44 20 7978 2004';
    $phone_number_link = 'tel:+442079782004';
    // ----------------------

    $form_submitted = false;
    $error_message = '';

@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FREE Quote: Specialist Commercial Cleaning in London | Klean Keepers</title>
    <meta name="description"
        content="Get your free custom quote for London commercial contract cleaning today. Fully vetted & insured teams. Flexible scheduling. Increase staff productivity & hygiene.">
    <meta name="author" content="Klean Keepers">

    <meta property="og:title" content="FREE Quote: Specialist Commercial Cleaning in London | Klean Keepers">
    <meta property="og:description"
        content="Get your free custom quote for London commercial contract cleaning today. Fully vetted & insured teams.">
    <meta property="og:type" content="website">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"
        integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3SCGPPE161"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3SCGPPE161');
    </script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZK8SWMHYK6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-ZK8SWMHYK6');
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: #1e293b;
            background-color: #f8fafc;
        }

        /* Header */
        .header {
            background: #ffffff;
            border-bottom: 1px solid #e2e8f0;
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            color: #0056b3;
            text-decoration: none;
        }

        .phone-cta {
            text-align: right;
        }

        .phone-cta p {
            font-size: 0.875rem;
            color: #64748b;
            margin-bottom: 0.25rem;
        }

        .phone-link {
            display: inline-block;
            font-size: 1.125rem;
            font-weight: 700;
            color: #0056b3;
            background: #e6f0ff;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            text-decoration: none;
            transition: background 0.3s;
        }

        .phone-link:hover {
            background: #cce0ff;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('https://images.unsplash.com/photo-1497366216548-37526070297c?w=1920&q=80') center/cover;
            color: white;
            padding: 5rem 5% 4rem;
            min-height: 650px;
            display: flex;
            align-items: flex-start;
        }

        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }

        .hero-content h1 {
            font-size: 2.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.5rem;
        }

        .highlight {
            color: #fcd34d;
            font-style: italic;
        }

        .hero-content .subheading {
            font-size: 1.25rem;
            font-weight: 300;
            margin-bottom: 2rem;
        }

        .hero-content strong {
            font-weight: 700;
        }

        /* Trust Badges */
        .trust-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 2rem;
        }

        .badge {
            background: rgba(0, 86, 179, 0.9);
            padding: 0.5rem 1rem;
            border-radius: 1.5rem;
            font-weight: 600;
            font-size: 0.875rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* Form Card */
        .form-container {
            width: 100%;
            max-width: 450px;
        }

        .form-card {
            background: white;
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
        }

        .form-card h2 {
            color: #0056b3;
            font-size: 1.75rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .error-message {
            background: #fee;
            color: #c00;
            padding: 0.75rem;
            border-radius: 0.375rem;
            border: 1px solid #c00;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #1e293b;
        }

        input,
        select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #cbd5e1;
            border-radius: 0.375rem;
            font-size: 1rem;
            font-family: inherit;
            transition: border-color 0.2s;
        }

        input:focus,
        select:focus {
            outline: none;
            border-color: #0056b3;
            box-shadow: 0 0 0 3px rgba(0, 86, 179, 0.1);
        }

        .cta-button {
            width: 100%;
            background: #ff8c00;
            color: white;
            border: none;
            padding: 1rem;
            font-size: 1.125rem;
            font-weight: 700;
            text-transform: uppercase;
            border-radius: 0.375rem;
            cursor: pointer;
            transition: all 0.3s;
            margin-top: 1.5rem;
        }

        .cta-button:hover {
            background: #e07b00;
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 140, 0, 0.3);
        }

        .privacy-note {
            font-size: 0.75rem;
            text-align: center;
            color: #64748b;
            margin-top: 0.75rem;
        }

        /* Benefits Section */
        .benefits-section {
            padding: 4rem 5%;
            background: white;
        }

        .benefits-section h2 {
            color: #0056b3;
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 3rem;
        }

        .benefits-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .benefit-item {
            border-left: 4px solid #fcd34d;
            padding-left: 1.5rem;
        }

        .benefit-item h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.75rem;
        }

        .benefit-item p {
            color: #64748b;
            line-height: 1.6;
        }

        /* Responsive */
        @media (max-width: 968px) {
            .hero-container {
                grid-template-columns: 1fr;
            }

            .hero-content {
                text-align: center;
            }

            .trust-badges {
                justify-content: center;
            }

            .form-container {
                max-width: 100%;
            }

            .benefits-grid {
                grid-template-columns: 1fr;
            }

            .benefit-item {
                border-left: none;
                border-bottom: 1px dashed #cbd5e1;
                padding-left: 0;
                padding-bottom: 1.5rem;
            }

            .hero-content h1 {
                font-size: 2rem;
            }
        }

        @media (max-width: 640px) {
            .header {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
            }

            .phone-cta {
                text-align: center;
            }
        }

        .alert-danger {
            /* Background and Border for visibility */
            background-color: #f8d7da;
            /* Very light red/pink background */
            color: #721c24;
            /* Dark red text color */
            border: 1px solid #f5c6cb;
            /* Slightly darker border */

            /* Spacing */
            padding: 15px;
            margin-bottom: 20px;
            /* Space below the alert */

            /* Aesthetics */
            border-radius: 4px;
            /* Slightly rounded corners */
            font-weight: bold;
            text-align: center;
            /* Center the text for prominence */
        }

        /* Optional: Add a shadow or a slightly stronger box for modern look */
        .alert-danger[role="alert"] {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }


        /* Testimonials Section */
        .testimonials-section {
            padding: 60px 5%;
            background-color: #f4f7f9;
        }

        .testimonials-section h2 {
            color: #0056b3;
            text-align: center;
            margin-bottom: 40px;
            font-size: 2em;
        }

        .testimonials-container {
            max-width: 900px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .testimonial-card {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-left: 4px solid #ffcc00;
            position: relative;
        }

        .quote-icon {
            font-size: 3em;
            color: rgba(255, 204, 0, 0.3);
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .testimonial-text {
            font-style: italic;
            color: #555;
            font-size: 1.1em;
            line-height: 1.8;
            margin-bottom: 20px;
            padding-left: 40px;
        }

        .testimonial-author {
            border-top: 2px solid rgba(255, 204, 0, 0.3);
            padding-top: 15px;
            padding-left: 40px;
        }

        .testimonial-author .name {
            font-weight: bold;
            color: #333;
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        .testimonial-author .role {
            color: #777;
            font-size: 0.95em;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .hero-section {
                flex-direction: column;
                padding: 40px 5%;
                min-height: auto;
            }

            .content-container {
                max-width: 100%;
                text-align: center;
            }

            h1 {
                font-size: 2em;
            }

            .value-prop {
                font-size: 1.1em;
            }

            .form-container {
                max-width: 100%;
                margin-top: 30px;
            }

            .trust-badges {
                justify-content: center;
            }

            .benefit-list {
                flex-direction: column;
            }

            .point {
                text-align: center;
                border-left: none;
                border-bottom: 1px dashed #ccc;
                padding-bottom: 20px;
            }

            .testimonial-card {
                padding: 30px 20px;
            }

            .testimonial-text {
                padding-left: 20px;
            }

            .testimonial-author {
                padding-left: 20px;
            }
        }

        .bics-logo {
            height: 48px;
            object-fit: contain;
            margin: 0 auto;
            border-radius: "100%";
            display: block;
        }

        /* Container for the badge */
        .bics-badge-container {
            /* Ensures the badge is centered within the 'Why Choose Us' section */
            display: block;
            margin: 20px auto 10px auto;
            /* 20px top margin, 10px bottom margin */
            width: 250px;
            /* Matches the iframe width */
            height: 120px;
            /* Matches the iframe height */
        }

        /* Styling for the explanatory text */
        .bics-explanation {
            font-size: 1.1em;
            color: #444;
            /* Dark gray for good readability */
            text-align: center;
            /* Center the text under the logo */
            max-width: 600px;
            /* Optional: Constrain width for readability */
            margin: 0 auto 30px auto;
            /* Center the paragraph and add bottom spacing */
        }

        /* Optional: If the badge is just one of several logos in a row */
        .logo-strip {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <a href="/" class="logo">
            <img height="80px" src="https://www.kleankeepers.co.uk/uploads/media/logo%20(1)600a74899aac4.png"
                alt="Kleankeepers logo">

        </a>
        <div class="phone-cta">
            <p>Need a Quote Now?</p>
            <a href="<?php echo $phone_number_link; ?>" class="phone-link">
                Call <?php echo $phone_number_display; ?>
            </a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-container">
            <!-- Left: Content -->
            <div class="hero-content">
                <h1>
                    Secure premium, reliable cleaning for
                    <span class="highlight">your Commercial Premises</span>
                     with our special limited-time rates.
                </h1>
                <p class="subheading">
                    Fully Vetted & Insured Teams. Flexible Scheduling.
                    <strong>Increase Staff Productivity & Hygiene.</strong>
                </p>

                <div class="trust-badges">
                    <div class="badge">
                        <div>
                            ✓ Vetted & Trained Staff
                        </div>
                    </div>
                    <div class="badge">★ 5-Star London Reviews</div>
                    <div class="badge">🛡 Fully Insured & Compliant</div>
                    <div class="badge">✓ BICCS Corporate Member</div>
                </div>
            </div>

            <!-- Right: Form -->
            <div class="form-container">
                <div class="form-card">
                    <h2>Request Your Free Quote</h2>

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="" id="landingForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            {{-- Use old('name') to retain the value --}}
                            <input type="text" id="name" name="name" required value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Work Email</label>
                            {{-- Use old('email') to retain the value --}}
                            <input type="email" id="email" name="email" required value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label for="company">Company Name</label>
                            {{-- Use old('email') to retain the value --}}
                            <input type="text" id="company" name="company" required value="{{ old('company') }}">
                        </div>

                        <div class="form-group">
                            <label for="service">Service Required</label>
                            {{-- Use old('service') for selects, passing the old value as the second argument --}}
                            <select id="service" name="service" required>
                                <option value="">-- Please Select --</option>
                                <option value="Office Cleaning"
                                    {{ old('service') == 'Office Cleaning' ? 'selected' : '' }}>Office Cleaning</option>
                                <option value="Educational Facilities"
                                    {{ old('service') == 'Educational Facilities' ? 'selected' : '' }}>Educational
                                    Facilities (Schools, Nurseries)</option>
                                <option value="Medical Facility Cleaning"
                                    {{ old('service') == 'Medical Facility Cleaning' ? 'selected' : '' }}>Medical
                                    Facility
                                    Cleaning</option>
                                <option value="Communal/Block Area Cleaning"
                                    {{ old('service') == 'Communal/Block Area Cleaning' ? 'selected' : '' }}>
                                    Communal/Block Area Cleaning</option>
                                <option value="Other Commercial"
                                    {{ old('service') == 'Other Commercial' ? 'selected' : '' }}>Other Commercial
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="size">Approx. Facility Size (Sq M)</label>
                            {{-- Use old('size') for selects --}}
                            <select id="size" name="size" required>
                                <option value="">-- Please Select --</option>

                                {{-- Option 1: Convert < 1,000 Sq Ft to a reasonable equivalent like < 100 Sq M --}}
                                <option value="<1000" {{ old('size') == '<1000' ? 'selected' : '' }}>
                                    &lt; 100 Sq M (Small)
                                </option>

                                {{-- Option 2: Convert 1,000 - 5,000 Sq Ft to a range like 100 - 450 Sq M --}}
                                <option value="1000-5000" {{ old('size') == '1000-5000' ? 'selected' : '' }}>
                                    100 - 450 Sq M (Medium)
                                </option>

                                {{-- Option 3: Convert 5,000+ Sq Ft to a reasonable equivalent like 450+ Sq M --}}
                                <option value="5000+" {{ old('size') == '5000+' ? 'selected' : '' }}>
                                    450+ Sq M (Large)
                                </option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="phone">Telephone Number (Optional)</label>
                            {{-- Use old('phone') for optional fields --}}
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}">
                        </div>

                        <button type="submit" class="cta-button">
                            Get Your FREE London Quote Now
                        </button>

                        <p class="privacy-note">
                            We aim to provide your quote within 2 hours. Your privacy is protected.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section">
        <h2>Why London Businesses Choose Klean Keepers</h2>
        <div class="benefits-grid">
            <div class="benefit-item">
                <h3>Bespoke Contract Planning</h3>
                <p>We craft cleaning schedules that fit around your business hours—no disruption, guaranteed.</p>
            </div>
            <div class="benefit-item">
                <h3>Reliability & Consistency</h3>
                <p>Our managers conduct regular quality checks to ensure your cleaning standard never drops.</p>
            </div>
            <div class="benefit-item">
                <h3>Eco-Friendly Options</h3>
                <p>Protect your staff and the environment with our range of sustainable cleaning products.</p>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits-section">
        <div class="bics-badge-container">
            <iframe frameborder="0" scrolling="no" allowTransparency="true" width="250" height="120"
                src="https://cdn.yoshki.com/badge-bics.html" title="BICSc Corporate Member Validation Badge"
                style="border:0px; margin:0px; padding:0px; background-color:transparent;"></iframe>
        </div>

        <p class="bics-explanation">
            As a BICSc Corporate Member, we uphold the highest professional standards and ensure all staff are trained
            using the internationally recognized BICSc standards and methodology.
        </p>
    </section>


    {{-- Testimonial section --}}
    <section class="testimonials-section">
        <h2>What Our London Clients Say</h2>
        <div class="testimonials-container">

            <div class="testimonial-card">
                <div class="quote-icon">"</div>
                <p class="testimonial-text">
                    As a private healthcare provider, it is imperative that our Clinic has the highest level of
                    cleanliness to ensure we deliver a safe and clean environment for our patients. To help us achieve
                    such high standards, we have been using the services of Klean Keepers who have consistently help us
                    to achieve our goal. Their staff have shown great diligence, punctuality, professionalism and
                    efficiency in providing us with cleaning services both on an ad hoc basis and also more permanently.
                    They have been extremely flexible and accommodating whenever we have requested their services. We do
                    not have any hesitation in recommending Klean Keepers for your cleaning needs.
                </p>
                <div class="testimonial-author">
                    <div class="name">Maralyn Kitchingman</div>
                    <div class="role">Head Of People, 152 Harley Street</div>
                </div>
            </div>

            <div class="testimonial-card">
                <div class="quote-icon">"</div>
                <p class="testimonial-text">
                    I am the Practice Manager for The Harley Street Dermatology Clinic at 35 Devonshire Place.
                    We have been working with Klean Keepers and Basil since May 2018. They are responsive
                    to our requirements and are completing daily cleaning logs. They have a supervisor, who
                    completes cleaning audits for us. They provide all the COSHH data sheets and have been
                    reliable. I would recommend them.
                </p>
                <div class="testimonial-author">
                    <div class="name">Sarah Robinson</div>
                    <div class="role">Practice Manager, The Harley Street Dermatology Clinic</div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $("#landingForm").on("submit", function(e) {
            $(".cta-button").prop("disabled", true).text("processing...")
        })
    </script>
</body>

</html>
