@php
// --- CONFIGURATION ---
$phone_number_display = "+44 20 7978 2004";
$phone_number_link = "tel:+442079782004";
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
    <meta name="description" content="Get your free custom quote for London commercial contract cleaning today. Fully vetted & insured teams. Flexible scheduling. Increase staff productivity & hygiene.">
    <meta name="author" content="Klean Keepers">
    
    <meta property="og:title" content="FREE Quote: Specialist Commercial Cleaning in London | Klean Keepers">
    <meta property="og:description" content="Get your free custom quote for London commercial contract cleaning today. Fully vetted & insured teams.">
    <meta property="og:type" content="website">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha512-3P8rXCuGJdNZOnUx/03c1jOTnMn3rP63nBip5gOP2qmUh5YAdVAvFZ1E+QLZZbC1rtMrQb+mah3AfYW11RUrWA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        
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
        
        input, select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #cbd5e1;
            border-radius: 0.375rem;
            font-size: 1rem;
            font-family: inherit;
            transition: border-color 0.2s;
        }
        
        input:focus, select:focus {
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
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <a href="/" class="logo">
            <img height="80px" src="https://www.kleankeepers.co.uk/uploads/media/logo%20(1)600a74899aac4.png" alt="Kleankeepers logo">
            
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
                    Get Your Free, Custom Quote for 
                    <span class="highlight">London Commercial Contract Cleaning</span> 
                    Today.
                </h1>
                <p class="subheading">
                    Fully Vetted & Insured Teams. Flexible Scheduling. 
                    <strong>Increase Staff Productivity & Hygiene.</strong>
                </p>
                
                <div class="trust-badges">
                    <div class="badge">✓ Vetted & Trained Staff</div>
                    <div class="badge">★ 5-Star London Reviews</div>
                    <div class="badge">🛡 Fully Insured & Compliant</div>
                </div>
            </div>
            
            <!-- Right: Form -->
            <div class="form-container">
                <div class="form-card">
                    <h2>Request Your Free Quote</h2>
                    
                    <?php if ($error_message): ?>
                        <div class="error-message"><?php echo htmlspecialchars($error_message); ?></div>
                    <?php endif; ?>
                    
                    <form method="POST" action="" id="landingForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" required 
                                   value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Work Email</label>
                            <input type="email" id="email" name="email" required
                                   value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="service">Service Required</label>
                            <select id="service" name="service" required>
                                <option value="">-- Please Select --</option>
                                <option value="Office Cleaning" <?php echo (isset($service) && $service == 'Office Cleaning') ? 'selected' : ''; ?>>Office Cleaning</option>
                                <option value="Educational Facilities" <?php echo (isset($service) && $service == 'Educational Facilities') ? 'selected' : ''; ?>>Educational Facilities (Schools, Nurseries)</option>
                                <option value="Retail/Shop Cleaning" <?php echo (isset($service) && $service == 'Retail/Shop Cleaning') ? 'selected' : ''; ?>>Retail/Shop Cleaning</option>
                                <option value="Industrial/Warehouse" <?php echo (isset($service) && $service == 'Industrial/Warehouse') ? 'selected' : ''; ?>>Industrial/Warehouse</option>
                                <option value="Other Commercial" <?php echo (isset($service) && $service == 'Other Commercial') ? 'selected' : ''; ?>>Other Commercial</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="size">Approx. Facility Size (Sq Ft)</label>
                            <select id="size" name="size" required>
                                <option value="">-- Please Select --</option>
                                <option value="<1000" <?php echo (isset($size) && $size == '<1000') ? 'selected' : ''; ?>>&lt; 1,000 Sq Ft (Small)</option>
                                <option value="1000-5000" <?php echo (isset($size) && $size == '1000-5000') ? 'selected' : ''; ?>>1,000 - 5,000 Sq Ft (Medium)</option>
                                <option value="5000+" <?php echo (isset($size) && $size == '5000+') ? 'selected' : ''; ?>>5,000+ Sq Ft (Large)</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Telephone Number (Optional)</label>
                            <input type="tel" id="phone" name="phone"
                                   value="<?php echo isset($phone) ? htmlspecialchars($phone) : ''; ?>">
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

    <script>
        $("#landingForm").on("submit", function(e){
            $(".cta-button").prop("disabled", true).text("processing...")
        })
    </script>
</body>
</html>
