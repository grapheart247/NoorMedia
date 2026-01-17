<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Noor Media Solution - Premier Event Photography & Videography Services. 30+ Years of Experience covering Weddings, Corporate Events, and more.">
    <title>Noor Media Solution | Event Photography & Videography</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

    <!-- Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            gold: '#C5A059',
                            dark: '#0f0f0f',
                            gray: '#1a1a1a'
                        }
                    },
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
    <style>
        /* Hero Background with Multiple Layers */
        .hero-bg {
            background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 50%, #0f0f0f 100%);
            position: relative;
            overflow: hidden;
        }

        /* Animated Background Elements */
        .hero-bg::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(197, 160, 89, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: moveGrid 20s linear infinite;
            z-index: 0;
        }

        @keyframes moveGrid {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(50px, 50px);
            }
        }

        /* Floating Particles */
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(197, 160, 89, 0.5);
            border-radius: 50%;
            animation: float 15s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) translateX(0);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
        }

        /* Service Cards Hover Effect */
        .service-card {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(197, 160, 89, 0.3) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .service-card:hover::before {
            opacity: 1;
        }

        .service-card:hover {
            transform: translateY(-10px);
            border-color: #C5A059 !important;
        }

        /* Animated Text */
        .animate-text {
            animation: slideInUp 0.8s ease-out;
        }

        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Rotating Icon */
        .rotate-icon {
            animation: rotate 3s linear infinite;
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        /* Pulse Animation */
        .pulse-glow {
            animation: pulseGlow 2s ease-in-out infinite;
        }

        @keyframes pulseGlow {
            0%, 100% {
                box-shadow: 0 0 20px rgba(197, 160, 89, 0.3);
            }
            50% {
                box-shadow: 0 0 40px rgba(197, 160, 89, 0.6);
            }
        }

        /* Interactive Service Showcase */
        .service-showcase {
            perspective: 1000px;
        }

        .showcase-item {
            transition: all 0.4s cubic-bezier(0.23, 1, 0.320, 1);
        }

        .showcase-item:hover {
            transform: translateZ(20px) rotateY(5deg);
        }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #C5A059 0%, #ffffff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Counter Animation */
        .counter {
            font-size: 2.5rem;
            font-weight: bold;
            color: #C5A059;
        }

        /* Smooth Scroll */
        html {
            scroll-behavior: smooth;
        }

        /* Hero Content Z-index */
        .hero-content {
            position: relative;
            z-index: 10;
        }

        /* Icon Animation */
        .icon-bounce {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        /* Service Icon Glow */
        .icon-glow {
            transition: all 0.3s ease;
        }

        .service-card:hover .icon-glow {
            filter: drop-shadow(0 0 10px #C5A059);
            transform: scale(1.1);
        }
    </style>
</head>
<body class="bg-brand-dark text-white antialiased">

    <!-- NAVIGATION -->
    <nav class="fixed w-full z-50 bg-black/90 backdrop-blur-sm border-b border-gray-800" id="navbar">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#" class="flex items-center gap-3">
                <img src="http://nm.noorgee.pk/asset/Nms-logo.png" alt="NMS Logo" class="h-12 md:h-14 object-contain">
                <div class="hidden md:block">
                    <h1 class="text-xl font-serif font-bold text-white tracking-wide">NOOR MEDIA</h1>
                    <p class="text-[10px] text-brand-gold tracking-[0.2em] uppercase">Solution</p>
                </div>
            </a>
            <div class="hidden md:flex items-center space-x-8 text-sm font-semibold tracking-wider">
                <a href="#home" class="hover:text-brand-gold transition">HOME</a>
                <a href="#about" class="hover:text-brand-gold transition">ABOUT</a>
                <a href="#services" class="hover:text-brand-gold transition">SERVICES</a>
                <a href="#portfolio" class="hover:text-brand-gold transition">PORTFOLIO</a>
                <a href="#team" class="hover:text-brand-gold transition">TEAM</a>
                <a href="#contact" class="px-5 py-2 bg-brand-gold text-black rounded-full hover:bg-white transition">BOOK NOW</a>
            </div>
            <button class="md:hidden text-2xl text-white" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-brand-gray border-t border-gray-700 text-center py-4">
            <a href="#home" class="block py-3 hover:text-brand-gold">Home</a>
            <a href="#services" class="block py-3 hover:text-brand-gold">Services</a>
            <a href="#contact" class="block py-3 text-brand-gold font-bold">Contact Us</a>
        </div>
    </nav>

    <!-- ENHANCED INTERACTIVE HERO -->
    <section id="home" class="hero-bg min-h-screen flex items-center justify-center text-center px-4 pt-20">
        <!-- Floating Particles -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="particle" style="top: 20%; left: 10%; animation-delay: 0s;"></div>
            <div class="particle" style="top: 40%; left: 80%; animation-delay: 2s;"></div>
            <div class="particle" style="top: 60%; left: 30%; animation-delay: 4s;"></div>
            <div class="particle" style="top: 80%; left: 70%; animation-delay: 6s;"></div>
            <div class="particle" style="top: 30%; left: 50%; animation-delay: 3s;"></div>
        </div>

        <div class="hero-content max-w-5xl">
            <!-- Animated Badge -->
            <div class="animate-text mb-6 inline-block">
                <span class="px-6 py-2 bg-brand-gold/10 border border-brand-gold/30 rounded-full text-brand-gold font-bold tracking-[0.2em] uppercase text-sm">
                    <i class="fas fa-star mr-2"></i> Serving Since 1994
                </span>
            </div>

            <!-- Main Heading with Gradient -->
            <h1 class="text-5xl md:text-7xl font-serif font-bold mb-6 animate-text leading-tight">
                <span class="block mb-3">Capturing Moments</span>
                <span class="gradient-text">Creating Memories</span>
            </h1>

            <!-- Animated Subtitle -->
            <p class="text-gray-300 text-lg md:text-xl mb-12 animate-text max-w-3xl mx-auto">
                Your complete media solution for weddings, events, and celebrations. From stunning photography to cinematic videography, professional music production, and comprehensive media services.
            </p>

            <!-- Interactive Service Highlights -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-12 service-showcase">
                <div class="showcase-item bg-brand-gray/50 backdrop-blur-sm p-6 rounded-lg border border-brand-gold/20 hover:border-brand-gold/60 transition">
                    <i class="fas fa-camera text-3xl text-brand-gold icon-glow mb-3 block"></i>
                    <h3 class="font-bold text-sm uppercase tracking-wider">Wedding Photography</h3>
                    <p class="text-xs text-gray-400 mt-2">Professional coverage from pre-wedding to reception</p>
                </div>

                <div class="showcase-item bg-brand-gray/50 backdrop-blur-sm p-6 rounded-lg border border-brand-gold/20 hover:border-brand-gold/60 transition">
                    <i class="fas fa-video text-3xl text-brand-gold icon-glow mb-3 block"></i>
                    <h3 class="font-bold text-sm uppercase tracking-wider">Event Videography</h3>
                    <p class="text-xs text-gray-400 mt-2">4K cinematic videos with drone & storytelling</p>
                </div>

                <div class="showcase-item bg-brand-gray/50 backdrop-blur-sm p-6 rounded-lg border border-brand-gold/20 hover:border-brand-gold/60 transition">
                    <i class="fas fa-music text-3xl text-brand-gold icon-glow mb-3 block"></i>
                    <h3 class="font-bold text-sm uppercase tracking-wider">Music Production</h3>
                    <p class="text-xs text-gray-400 mt-2">Custom songs & professional audio production</p>
                </div>

                <div class="showcase-item bg-brand-gray/50 backdrop-blur-sm p-6 rounded-lg border border-brand-gold/20 hover:border-brand-gold/60 transition">
                    <i class="fas fa-palette text-3xl text-brand-gold icon-glow mb-3 block"></i>
                    <h3 class="font-bold text-sm uppercase tracking-wider">Media Solutions</h3>
                    <p class="text-xs text-gray-400 mt-2">Complete creative services for all your needs</p>
                </div>
            </div>

            <!-- CTA Buttons with Enhanced Styling -->
            <div class="flex flex-col md:flex-row gap-4 justify-center animate-text">
                <a href="#contact" class="px-8 py-4 bg-brand-gold text-black font-bold rounded-lg hover:bg-white transition transform hover:scale-105 shadow-lg hover:shadow-xl">
                    <i class="fas fa-calendar-check mr-2"></i> Book Your Event
                </a>
                <a href="#services" class="px-8 py-4 border-2 border-brand-gold text-brand-gold font-bold rounded-lg hover:bg-brand-gold hover:text-black transition transform hover:scale-105">
                    <i class="fas fa-images mr-2"></i> Explore Services
                </a>
                <a href="#portfolio" class="px-8 py-4 border-2 border-white text-white font-bold rounded-lg hover:bg-white hover:text-black transition transform hover:scale-105">
                    <i class="fas fa-star mr-2"></i> View Gallery
                </a>
            </div>

            <!-- Scroll Indicator -->
            <div class="mt-16 animate-bounce">
                <p class="text-brand-gold text-sm mb-2">Scroll to explore</p>
                <i class="fas fa-chevron-down text-brand-gold text-2xl"></i>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-20 bg-brand-gray">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-brand-gold uppercase tracking-widest text-sm font-bold mb-4">About Us</h2>
                    <h3 class="text-4xl font-serif font-bold mb-6">30 Years of Excellence</h3>
                    <p class="text-gray-300 mb-4">Since 1994, Noor Media Solution has been capturing life's most precious moments with passion and professionalism. We specialize in transforming your special events into timeless memories.</p>
                    <p class="text-gray-300 mb-6">Our team of experienced professionals uses cutting-edge technology and creative expertise to deliver exceptional results in wedding photography, event videography, music production, and comprehensive media solutions.</p>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="text-center">
                            <div class="counter">30+</div>
                            <p class="text-gray-400 text-sm">Years Experience</p>
                        </div>
                        <div class="text-center">
                            <div class="counter">1000+</div>
                            <p class="text-gray-400 text-sm">Events Covered</p>
                        </div>
                        <div class="text-center">
                            <div class="counter">100%</div>
                            <p class="text-gray-400 text-sm">Satisfaction</p>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-brand-gold/20 to-brand-gold/5 rounded-lg p-8 border border-brand-gold/30">
                        <i class="fas fa-video text-8xl text-brand-gold/30 mb-4"></i>
                        <p class="text-gray-300 text-lg">We combine artistic vision with technical excellence to create unforgettable media experiences.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="py-20 bg-brand-dark">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-brand-gold uppercase tracking-widest text-sm font-bold mb-2">Our Expertise</h2>
            <h3 class="text-4xl font-serif font-bold mb-16">Comprehensive Media Solutions</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Wedding Photography -->
                <div class="service-card bg-brand-gray p-8 rounded-lg border border-gray-800">
                    <div class="mb-4">
                        <i class="fas fa-ring text-5xl text-brand-gold icon-glow block"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Wedding Photography</h4>
                    <p class="text-gray-400 text-sm mb-4">Full event coverage from pre-wedding shoots to reception highlights. Professional albums and digital galleries included.</p>
                    <ul class="text-xs text-gray-500 space-y-2">
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Pre-wedding shoots</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Mehndi to Walima coverage</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Premium albums</li>
                    </ul>
                </div>

                <!-- Event Videography -->
                <div class="service-card bg-brand-gray p-8 rounded-lg border border-gray-800">
                    <div class="mb-4">
                        <i class="fas fa-film text-5xl text-brand-gold icon-glow block"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Event Videography</h4>
                    <p class="text-gray-400 text-sm mb-4">Cinematic 4K videos with drone footage, professional editing, and storytelling that brings your event to life.</p>
                    <ul class="text-xs text-gray-500 space-y-2">
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>4K cinematography</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Drone footage</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Professional editing</li>
                    </ul>
                </div>

                <!-- Music Production -->
                <div class="service-card bg-brand-gray p-8 rounded-lg border border-gray-800">
                    <div class="mb-4">
                        <i class="fas fa-music text-5xl text-brand-gold icon-glow block"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Music Production</h4>
                    <p class="text-gray-400 text-sm mb-4">Custom songs, professional recording, mixing, and mastering services for your special moments and celebrations.</p>
                    <ul class="text-xs text-gray-500 space-y-2">
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Custom compositions</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Professional recording</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Audio mastering</li>
                    </ul>
                </div>

                <!-- Digital Albums & Prints -->
                <div class="service-card bg-brand-gray p-8 rounded-lg border border-gray-800">
                    <div class="mb-4">
                        <i class="fas fa-book-open text-5xl text-brand-gold icon-glow block"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Digital Albums & Prints</h4>
                    <p class="text-gray-400 text-sm mb-4">Premium Dubai binding, Karizma prints, digital galleries, and custom merchandise to preserve your memories.</p>
                    <ul class="text-xs text-gray-500 space-y-2">
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Premium binding</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Digital galleries</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Custom prints</li>
                    </ul>
                </div>

                <!-- Corporate Events -->
                <div class="service-card bg-brand-gray p-8 rounded-lg border border-gray-800">
                    <div class="mb-4">
                        <i class="fas fa-briefcase text-5xl text-brand-gold icon-glow block"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Corporate Events</h4>
                    <p class="text-gray-400 text-sm mb-4">Professional coverage for conferences, product launches, corporate gatherings, and business celebrations.</p>
                    <ul class="text-xs text-gray-500 space-y-2">
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Event coverage</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Live streaming</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Highlight reels</li>
                    </ul>
                </div>

                <!-- Social Media Content -->
                <div class="service-card bg-brand-gray p-8 rounded-lg border border-gray-800">
                    <div class="mb-4">
                        <i class="fas fa-share-alt text-5xl text-brand-gold icon-glow block"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Social Media Content</h4>
                    <p class="text-gray-400 text-sm mb-4">Engaging reels, stories, and content creation optimized for all social media platforms to maximize your reach.</p>
                    <ul class="text-xs text-gray-500 space-y-2">
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Reels & stories</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Content creation</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Platform optimization</li>
                    </ul>
                </div>

                <!-- Drone Services -->
                <div class="service-card bg-brand-gray p-8 rounded-lg border border-gray-800">
                    <div class="mb-4">
                        <i class="fas fa-drone text-5xl text-brand-gold icon-glow block"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Aerial Drone Services</h4>
                    <p class="text-gray-400 text-sm mb-4">Stunning aerial photography and videography with professional drone operators for unique perspectives of your events.</p>
                    <ul class="text-xs text-gray-500 space-y-2">
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Aerial photography</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>4K drone video</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Certified operators</li>
                    </ul>
                </div>

                <!-- Complete Media Package -->
                <div class="service-card bg-brand-gray p-8 rounded-lg border border-brand-gold/50 pulse-glow">
                    <div class="mb-4">
                        <i class="fas fa-star text-5xl text-brand-gold icon-glow block"></i>
                    </div>
                    <h4 class="text-xl font-bold mb-3">Complete Media Package</h4>
                    <p class="text-gray-400 text-sm mb-4">All-in-one solution combining photography, videography, music, and creative services for your perfect event.</p>
                    <ul class="text-xs text-gray-500 space-y-2">
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>All services included</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Custom packages</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Best value</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFOLIO PLACEHOLDER -->
    <section id="portfolio" class="py-20 bg-black text-center">
        <h3 class="text-4xl font-serif font-bold mb-8">Our Recent Work</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-2 container mx-auto px-4">
             <!-- Images replaced with colored placeholders for static demo -->
            <div class="bg-gradient-to-br from-brand-gold/30 to-brand-gold/10 h-64 flex items-center justify-center text-gray-600 col-span-2 row-span-2 rounded-lg hover:shadow-lg transition">
                <div class="text-center">
                    <i class="fas fa-images text-4xl text-brand-gold mb-2"></i>
                    <p>Wedding Highlights</p>
                </div>
            </div>
            <div class="bg-gradient-to-br from-brand-gold/20 to-brand-gold/5 h-64 flex items-center justify-center text-gray-600 rounded-lg hover:shadow-lg transition">
                <div class="text-center">
                    <i class="fas fa-camera text-3xl text-brand-gold mb-2"></i>
                    <p>Bride Portrait</p>
                </div>
            </div>
            <div class="bg-gradient-to-br from-brand-gold/20 to-brand-gold/5 h-64 flex items-center justify-center text-gray-600 rounded-lg hover:shadow-lg transition">
                <div class="text-center">
                    <i class="fas fa-sparkles text-3xl text-brand-gold mb-2"></i>
                    <p>Event Decor</p>
                </div>
            </div>
            <div class="bg-gradient-to-br from-brand-gold/20 to-brand-gold/5 h-64 flex items-center justify-center text-gray-600 rounded-lg hover:shadow-lg transition">
                <div class="text-center">
                    <i class="fas fa-heart text-3xl text-brand-gold mb-2"></i>
                    <p>Candid Shot</p>
                </div>
            </div>
            <div class="bg-gradient-to-br from-brand-gold/20 to-brand-gold/5 h-64 flex items-center justify-center text-gray-600 rounded-lg hover:shadow-lg transition">
                <div class="text-center">
                    <i class="fas fa-handshake text-3xl text-brand-gold mb-2"></i>
                    <p>Corporate Event</p>
                </div>
            </div>
        </div>
    </section>

    <!-- TEAM SECTION -->
    <section id="team" class="py-20 bg-brand-gray">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-brand-gold uppercase tracking-widest text-sm font-bold mb-2">The Minds Behind NMS</h2>
            <h3 class="text-4xl font-serif font-bold mb-12">Meet Our Team</h3>
            
            <div class="flex flex-wrap justify-center gap-10">
                <!-- Rizwan Elahi -->
                <div class="bg-brand-dark p-6 rounded-lg w-full md:w-1/3 border border-gray-800 hover:border-brand-gold transition transform hover:scale-105">
                    <div class="w-24 h-24 mx-auto rounded-full bg-gradient-to-br from-brand-gold/30 to-brand-gold/10 mb-4 flex items-center justify-center text-3xl">
                        <i class="fas fa-user-tie text-brand-gold"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-white">Rizwan Elahi</h4>
                    <p class="text-brand-gold uppercase text-sm tracking-wider mt-1">Operation Manager</p>
                    <p class="text-gray-400 text-sm mt-3">Leading our team with expertise and dedication to excellence.</p>
                </div>

                <!-- NoorGee -->
                <div class="bg-brand-dark p-6 rounded-lg w-full md:w-1/3 border border-gray-800 hover:border-brand-gold transition transform hover:scale-105">
                    <div class="w-24 h-24 mx-auto rounded-full bg-gradient-to-br from-brand-gold/30 to-brand-gold/10 mb-4 flex items-center justify-center text-3xl">
                        <i class="fas fa-bullhorn text-brand-gold"></i>
                    </div>
                    <h4 class="text-2xl font-bold text-white">NoorGee</h4>
                    <p class="text-brand-gold uppercase text-sm tracking-wider mt-1">Marketing Director</p>
                    <p class="text-gray-400 text-sm mt-3">Bringing creative vision and strategic direction to our brand.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="py-20 bg-brand-dark">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12">
            <div>
                <h3 class="text-4xl font-serif font-bold mb-6">Get In Touch</h3>
                <p class="text-gray-400 mb-8">Let's discuss how we can capture your memories and bring your vision to life.</p>
                <div class="space-y-4">
                    <p><i class="fas fa-phone-alt text-brand-gold mr-3"></i> +92 332-3320369</p>
                    <p><i class="fas fa-envelope text-brand-gold mr-3"></i> nmspvt121212@gmail.com</p>
                    <p>
                        <a href="https://www.facebook.com/noormediasolution" class="text-blue-500 mr-4 hover:text-blue-400"><i class="fab fa-facebook"></i> Facebook</a>
                        <a href="https://www.youtube.com/@noormediasolution/" class="text-red-500 hover:text-red-400"><i class="fab fa-youtube"></i> YouTube</a>
                    </p>
                </div>
            </div>

            <!-- CONTACT FORM -->
            <div class="bg-brand-gray p-8 rounded-xl border border-gray-800 hover:border-brand-gold/50 transition">
                <form action="submit_message.php" method="POST">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Name</label>
                            <input type="text" name="name" required class="w-full bg-black border border-gray-700 rounded p-3 text-white focus:border-brand-gold outline-none transition">
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 mb-1">Contact No</label>
                            <input type="tel" name="contact" required class="w-full bg-black border border-gray-700 rounded p-3 text-white focus:border-brand-gold outline-none transition">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-xs text-gray-500 mb-1">Email</label>
                        <input type="email" name="email" required class="w-full bg-black border border-gray-700 rounded p-3 text-white focus:border-brand-gold outline-none transition">
                    </div>

                    <div class="mb-4">
                        <label class="block text-xs text-gray-500 mb-1">Subject</label>
                        <input type="text" name="subject" required class="w-full bg-black border border-gray-700 rounded p-3 text-white focus:border-brand-gold outline-none transition">
                    </div>

                    <div class="mb-6">
                        <label class="block text-xs text-gray-500 mb-1">Message</label>
                        <textarea name="message" rows="4" required class="w-full bg-black border border-gray-700 rounded p-3 text-white focus:border-brand-gold outline-none transition"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-brand-gold text-black font-bold py-3 rounded hover:bg-white transition transform hover:scale-105">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-black py-8 border-t border-gray-900 text-center relative">
        <div class="container mx-auto px-4">
            <img src="https://nm.noorgee.pk/asset/Nms-logo.png" alt="Logo" class="h-10 mx-auto mb-4 opacity-70">
            <p class="text-gray-500 text-sm">copyright © 2024 Noor Media Solution.</p>
            
            <!-- Admin Tiny Link -->
            <div class="mt-4">
                <a href="admin.php" class="text-[10px] text-gray-800 hover:text-gray-600" target="_blank">
                    <i class="fas fa-lock"></i> Staff Login
                </a>
            </div>
        </div>
    </footer>
    
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('status') === 'success') {
            alert("Message Sent! We will contact you shortly.");
        }

        // Smooth scroll behavior
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });

        // Navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('bg-black/95');
            } else {
                navbar.classList.remove('bg-black/95');
            }
        });

        // Counter animation
        function animateCounter(element, target, duration = 2000) {
            let current = 0;
            const increment = target / (duration / 16);
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    element.textContent = target + '+';
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current) + '+';
                }
            }, 16);
        }

        // Trigger counter animation when section is in view
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && entry.target.id === 'about') {
                    const counters = entry.target.querySelectorAll('.counter');
                    counters.forEach(counter => {
                        const target = parseInt(counter.textContent);
                        animateCounter(counter, target);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        const aboutSection = document.getElementById('about');
        if (aboutSection) {
            observer.observe(aboutSection);
        }
    </script>
</body>
</html>
