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
        .hero-slider {
            position: relative;
            overflow: hidden;
        }
        .hero-slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .hero-slide.active {
            opacity: 1;
        }
        .hero-slide::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.6));
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
        .portfolio-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .portfolio-item:hover .portfolio-img {
            transform: scale(1.1);
        }
    </style>
</head>
<body class="bg-brand-dark text-white antialiased">
    <!-- Facebook SDK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v24.0"></script>

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
                <a href="#facebook-activity" class="hover:text-brand-gold transition">FACEBOOK</a>
                <a href="#contact" class="px-5 py-2 bg-brand-gold text-black rounded-full hover:bg-white transition">BOOK NOW</a>
            </div>
            <button class="md:hidden text-2xl text-white" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div id="mobile-menu" class="hidden md:hidden bg-brand-gray border-t border-gray-700 text-center py-4">
            <a href="#home" class="block py-3 hover:text-brand-gold">Home</a>
            <a href="#services" class="block py-3 hover:text-brand-gold">Services</a>
            <a href="#facebook-activity" class="block py-3 hover:text-brand-gold">Facebook</a>
            <a href="#contact" class="block py-3 text-brand-gold font-bold">Contact Us</a>
        </div>
    </nav>

    <!-- ENHANCED INTERACTIVE HERO -->
    <section id="home" class="hero-slider min-h-screen flex items-center justify-center text-center px-4 pt-20">
        <!-- Slides -->
        <div class="hero-slide active" style="background-image: url('https://images.unsplash.com/photo-1519741497674-611481863552?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');"></div>
        <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1511795409834-ef04bbd61622?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');"></div>
        <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1492684223066-81342ee5ff30?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');"></div>
        <div class="hero-slide" style="background-image: url('https://images.unsplash.com/photo-1470225620780-dba8ba36b745?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');"></div>

        <div class="hero-content max-w-5xl relative z-10">
            <div id="hero-content-wrapper">
                <!-- Content will be injected by JS -->
            </div>

            <!-- Interactive Service Highlights -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-12 service-showcase">
                <div class="showcase-item bg-brand-gray/50 backdrop-blur-sm p-6 rounded-lg border border-brand-gold/20 hover:border-brand-gold/60 transition-all duration-500 hover:-translate-y-2 group">
                    <i class="fas fa-camera text-3xl text-brand-gold icon-glow mb-3 block group-hover:scale-110 transition-transform"></i>
                    <h3 class="font-bold text-sm uppercase tracking-wider">Wedding Photography</h3>
                    <p class="text-xs text-gray-400 mt-2">Professional coverage from pre-wedding to reception</p>
                </div>

                <div class="showcase-item bg-brand-gray/50 backdrop-blur-sm p-6 rounded-lg border border-brand-gold/20 hover:border-brand-gold/60 transition-all duration-500 hover:-translate-y-2 group">
                    <i class="fas fa-video text-3xl text-brand-gold icon-glow mb-3 block group-hover:scale-110 transition-transform"></i>
                    <h3 class="font-bold text-sm uppercase tracking-wider">Event Videography</h3>
                    <p class="text-xs text-gray-400 mt-2">4K cinematic videos with drone & storytelling</p>
                </div>

                <div class="showcase-item bg-brand-gray/50 backdrop-blur-sm p-6 rounded-lg border border-brand-gold/20 hover:border-brand-gold/60 transition-all duration-500 hover:-translate-y-2 group">
                    <i class="fas fa-music text-3xl text-brand-gold icon-glow mb-3 block group-hover:scale-110 transition-transform"></i>
                    <h3 class="font-bold text-sm uppercase tracking-wider">Music Production</h3>
                    <p class="text-xs text-gray-400 mt-2">Custom songs & professional audio production</p>
                </div>

                <div class="showcase-item bg-brand-gray/50 backdrop-blur-sm p-6 rounded-lg border border-brand-gold/20 hover:border-brand-gold/60 transition-all duration-500 hover:-translate-y-2 group">
                    <i class="fas fa-palette text-3xl text-brand-gold icon-glow mb-3 block group-hover:scale-110 transition-transform"></i>
                    <h3 class="font-bold text-sm uppercase tracking-wider">Media Solutions</h3>
                    <p class="text-xs text-gray-400 mt-2">Complete creative services for all your needs</p>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col md:flex-row gap-4 justify-center">
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
                <div class="relative group">
                    <div class="absolute -inset-1 bg-gradient-to-r from-brand-gold to-yellow-600 rounded-lg blur opacity-25 group-hover:opacity-50 transition duration-1000 group-hover:duration-200"></div>
                    <div class="relative bg-brand-dark rounded-lg overflow-hidden border border-brand-gold/30">
                        <img src="/asset/30-year_n.jpg" alt="30 Years of Excellence" class="w-full h-auto object-cover transform group-hover:scale-105 transition duration-700">
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6">
                            <p class="text-brand-gold font-serif italic text-lg">"30 Years of Excellence in Every Frame"</p>
                        </div>
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
                    <div class="mb-4"><i class="fas fa-ring text-5xl text-brand-gold icon-glow block"></i></div>
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
                    <div class="mb-4"><i class="fas fa-film text-5xl text-brand-gold icon-glow block"></i></div>
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
                    <div class="mb-4"><i class="fas fa-music text-5xl text-brand-gold icon-glow block"></i></div>
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
                    <div class="mb-4"><i class="fas fa-book-open text-5xl text-brand-gold icon-glow block"></i></div>
                    <h4 class="text-xl font-bold mb-3">Digital Albums & Prints</h4>
                    <p class="text-gray-400 text-sm mb-4">Premium Dubai binding, Karizma prints, digital galleries, and custom merchandise to preserve your memories.</p>
                    <ul class="text-xs text-gray-500 space-y-2">
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Premium binding</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Digital galleries</li>
                        <li><i class="fas fa-check text-brand-gold mr-2"></i>Custom prints</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



  <!-- PORTFOLIO SECTION -->
    <section id="portfolio" class="py-20 bg-black text-center">
        <h2 class="text-brand-gold uppercase tracking-widest text-sm font-bold mb-2">Our Portfolio</h2>
        <h3 class="text-4xl font-serif font-bold mb-12">Our Recent Work</h3>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 container mx-auto px-4">
            <!-- Big Feature: Wedding Highlight -->
            <div class="portfolio-item relative overflow-hidden rounded-lg md:col-span-2 md:row-span-2 group">
                <img src="http://nm.noorgee.pk/asset/Wedding-highlight.png" alt="Wedding Highlights" class="portfolio-img">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <p class="text-white font-bold text-xl">Wedding Highlights</p>
                </div>
            </div>
            <!-- Bride Portrait -->
            <div class="portfolio-item relative overflow-hidden rounded-lg group h-64">
                <img src="http://nm.noorgee.pk/asset/Bride-Portrait.png" alt="Bride Portrait" class="portfolio-img">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <p class="text-white font-bold">Bride Portrait</p>
                </div>
            </div>
            <!-- Event Decor -->
            <div class="portfolio-item relative overflow-hidden rounded-lg group h-64">
                <img src="http://nm.noorgee.pk/asset/Event-decore.png" alt="Event Decor" class="portfolio-img">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <p class="text-white font-bold">Event Decor</p>
                </div>
            </div>
            <!-- Candid Shot -->
            <div class="portfolio-item relative overflow-hidden rounded-lg group h-64">
                <img src="http://nm.noorgee.pk/asset/Candid-Shot.png" alt="Candid Shot" class="portfolio-img">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <p class="text-white font-bold">Candid Shot</p>
                </div>
            </div>
            <!-- Corporate Event -->
            <div class="portfolio-item relative overflow-hidden rounded-lg group h-64">
                <img src="http://nm.noorgee.pk/asset/Corporae-Event.png" alt="Corporate Event" class="portfolio-img">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <p class="text-white font-bold">Corporate Event</p>
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
                <div class="bg-brand-dark p-8 rounded-lg w-full md:w-1/3 border border-gray-800 hover:border-brand-gold transition group">
                    <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-gray-800 group-hover:border-brand-gold mb-6 transition">
                        <img src="http://nm.noorgee.pk/asset/riz.jpg" alt="Rizwan Elahi" class="w-full h-full object-cover">
                    </div>
                    <h4 class="text-2xl font-bold text-white">Rizwan Elahi</h4>
                    <p class="text-brand-gold uppercase text-sm tracking-wider mt-1 font-semibold">Operation Manager</p>
                    <div class="mt-6 pt-6 border-t border-gray-700 space-y-3">
                        <div class="flex items-center justify-center gap-2 text-gray-300 hover:text-brand-gold transition">
                            <i class="fab fa-whatsapp text-lg"></i>
                            <a href="https://wa.me/923452866181" target="_blank" class="text-sm hover:underline">+92 345 2866181</a>
                        </div>
                        <div class="flex items-center justify-center gap-2 text-gray-300 hover:text-brand-gold transition">
                            <i class="fas fa-envelope text-lg"></i>
                            <a href="mailto:nmspvt121212@gmail.com" class="text-sm hover:underline">nmspvt121212@gmail.com</a>
                        </div>
                        <div class="flex items-center justify-center gap-2 text-gray-300 hover:text-brand-gold transition">
                            <i class="fab fa-facebook text-lg"></i>
                            <a href="https://m.me/rizwanelahi.rizwanelahi" target="_blank" class="text-sm hover:underline">Facebook Message</a>
                        </div>
                    </div>
                </div>

                <!-- Noor-ud-Din -->
                <div class="bg-brand-dark p-8 rounded-lg w-full md:w-1/3 border border-gray-800 hover:border-brand-gold transition group">
                    <div class="w-32 h-32 mx-auto rounded-full overflow-hidden border-4 border-gray-800 group-hover:border-brand-gold mb-6 transition">
                        <img src="http://nm.noorgee.pk/asset/ng-gr.jpg" alt="Noor-ud-Din" class="w-full h-full object-cover">
                    </div>
                    <h4 class="text-2xl font-bold text-white">Noor-ud-Din</h4>
                    <p class="text-brand-gold uppercase text-sm tracking-wider mt-1 font-semibold">Marketing Director</p>
                    <div class="mt-6 pt-6 border-t border-gray-700 space-y-3">
                        <div class="flex items-center justify-center gap-2 text-gray-300 hover:text-brand-gold transition">
                            <i class="fab fa-whatsapp text-lg"></i>
                            <a href="https://wa.me/923323320369" target="_blank" class="text-sm hover:underline">+92 332-3320369</a>
                        </div>
                        <div class="flex items-center justify-center gap-2 text-gray-300 hover:text-brand-gold transition">
                            <i class="fas fa-envelope text-lg"></i>
                            <a href="mailto:moon060781@gmail.com" class="text-sm hover:underline">moon060781@gmail.com</a>
                        </div>
                        <div class="flex items-center justify-center gap-2 text-gray-300 hover:text-brand-gold transition">
                            <i class="fab fa-facebook text-lg"></i>
                            <a href="https://m.me/moon060781" target="_blank" class="text-sm hover:underline">Facebook Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FACEBOOK ACTIVITY SECTION -->
    <section id="facebook-activity" class="py-20 bg-black">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-12 items-start">
                <!-- Text Content -->
                <div class="md:w-1/2">
                    <h2 class="text-brand-gold uppercase tracking-widest text-sm font-bold mb-2">Stay Connected</h2>
                    <h3 class="text-4xl font-serif font-bold mb-6">Our Facebook Activity</h3>
                    <p class="text-gray-400 mb-8 text-lg">
                        Follow our latest updates, behind-the-scenes moments, and recent event highlights directly from our Facebook page.
                    </p>
                    <div class="flex gap-4">
                        <a href="https://www.facebook.com/noormediasolution" target="_blank" class="px-6 py-3 bg-blue-600 text-white font-bold rounded hover:bg-blue-700 transition flex items-center gap-2">
                            <i class="fab fa-facebook-f"></i> View Full Facebook Page
                        </a>
                    </div>
                </div>
                
                <!-- Facebook Feed Box -->
                <div class="md:w-1/2 w-full flex justify-center md:justify-end">
                    <div class="bg-brand-gray p-4 rounded-xl border border-gray-800 shadow-2xl">
                        <div class="fb-page" 
                             data-href="https://www.facebook.com/noormediasolution" 
                             data-tabs="timeline" 
                             data-width="700" 
                             data-height="600" 
                             data-small-header="false" 
                             data-adapt-container-width="true" 
                             data-hide-cover="false" 
                             data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/noormediasolution" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/noormediasolution">Noor Media Solution</a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="py-20 bg-brand-dark">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-12">
            <div>
                <h3 class="text-4xl font-serif font-bold mb-6">Get In Touch</h3>
                <p class="text-gray-400 mb-8">Let's discuss how we can capture your memories.</p>
                <div class="space-y-4">
                    <p><i class="fas fa-phone-alt text-brand-gold mr-3"></i> +92 332-3320369</p>
                    <p><i class="fas fa-envelope text-brand-gold mr-3"></i> nmspvt121212@gmail.com</p>
                    <p>
                        <a href="https://www.facebook.com/noormediasolution" target="_blank" class="text-blue-500 mr-4"><i class="fab fa-facebook"></i> Facebook</a>
                        <a href="https://www.youtube.com/@noormediasolution/" target="_blank" class="text-red-500"><i class="fab fa-youtube"></i> YouTube</a>
                    </p>
                </div>
            </div>

            <!-- CONTACT FORM -->
            <div class="bg-brand-gray p-8 rounded-xl border border-gray-800">
                <form action="submit_message.php" method="POST">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="block text-xs text-gray-500 mb-1 font-bold uppercase tracking-wider">Name</label>
                            <input type="text" name="name" required class="w-full bg-gray-300 border border-gray-400 rounded p-3 text-black focus:border-brand-gold outline-none placeholder-gray-600">
                        </div>
                        <div>
                            <label class="block text-xs text-gray-500 mb-1 font-bold uppercase tracking-wider">Contact No</label>
                            <input type="tel" name="contact" required class="w-full bg-gray-300 border border-gray-400 rounded p-3 text-black focus:border-brand-gold outline-none placeholder-gray-600">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-xs text-gray-500 mb-1 font-bold uppercase tracking-wider">Email</label>
                        <input type="email" name="email" required class="w-full bg-gray-300 border border-gray-400 rounded p-3 text-black focus:border-brand-gold outline-none placeholder-gray-600">
                    </div>

                    <div class="mb-4">
                        <label class="block text-xs text-gray-500 mb-1 font-bold uppercase tracking-wider">Subject</label>
                        <input type="text" name="subject" required class="w-full bg-gray-300 border border-gray-400 rounded p-3 text-black focus:border-brand-gold outline-none placeholder-gray-600">
                    </div>

                    <div class="mb-6">
                        <label class="block text-xs text-gray-500 mb-1 font-bold uppercase tracking-wider">Message</label>
                        <textarea name="message" rows="4" required class="w-full bg-gray-300 border border-gray-400 rounded p-3 text-black focus:border-brand-gold outline-none placeholder-gray-600"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-gray-300 text-black font-bold py-3 rounded hover:bg-gray-200 transition uppercase tracking-widest">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-black py-8 border-t border-gray-900 text-center relative">
        <div class="container mx-auto px-4">
            <img src="http://nm.noorgee.pk/asset/Nms-logo.png" alt="Logo" class="h-10 mx-auto mb-4 opacity-70">
            <p class="text-gray-500 text-sm">copyright © 2024 Noor Media Solution.</p>
            
            <div class="mt-4 flex justify-center gap-4">
                <a href="admin.php" class="text-[10px] text-gray-800 hover:text-gray-600" target="_blank">
                    <i class="fas fa-lock"></i> Staff Login
                </a>
                <a href="deploy.php" class="text-[10px] text-gray-800 hover:text-gray-600" target="_blank">
                    <i class="fas fa-server"></i> #
                </a>
            </div>
        </div>
    </footer>
    
    <script>
        // Hero Slider Logic
        const slides = document.querySelectorAll('.hero-slide');
        const contentWrapper = document.getElementById('hero-content-wrapper');
        const slideContent = [
            {
                badge: "Serving Since 1994",
                h1: "Capturing Moments<br><span class='text-brand-gold'>Creating Memories</span>",
                p: "Your complete media solution for weddings, events, and celebrations. 30 years of excellence in every frame."
            },
            {
                badge: "Cinematic Excellence",
                h1: "Your Story Told<br><span class='text-brand-gold'>Through Our Lens</span>",
                p: "From grand weddings to corporate milestones, we bring your vision to life with cinematic precision."
            },
            {
                badge: "Professional Media",
                h1: "Beyond Just<br><span class='text-brand-gold'>Photography</span>",
                p: "Comprehensive media solutions including music production, drone coverage, and creative storytelling."
            },
            {
                badge: "Book Now",
                h1: "Let's Make Your<br><span class='text-brand-gold'>Event Unforgettable</span>",
                p: "Join thousands of happy clients who trusted Noor Media Solution for their most precious moments."
            }
        ];

        let currentSlide = 0;

        function updateHeroContent(index) {
            const content = slideContent[index];
            contentWrapper.innerHTML = `
                <div class="animate-fade-up mb-6 inline-block">
                    <span class="px-6 py-2 bg-brand-gold/10 border border-brand-gold/30 rounded-full text-brand-gold font-bold tracking-[0.2em] uppercase text-sm">
                        <i class="fas fa-star mr-2"></i> ${content.badge}
                    </span>
                </div>
                <h1 class="text-5xl md:text-7xl font-serif font-bold mb-6 animate-fade-up delay-1 leading-tight">
                    ${content.h1}
                </h1>
                <p class="text-gray-300 text-lg md:text-xl mb-12 animate-fade-up delay-2 max-w-3xl mx-auto">
                    ${content.p}
                </p>
            `;
        }

        function nextSlide() {
            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % slides.length;
            slides[currentSlide].classList.add('active');
            updateHeroContent(currentSlide);
        }

        // Initialize first slide
        updateHeroContent(0);
        setInterval(nextSlide, 5000);

        // Success Message Bubble Handler
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('status') === 'success') {
            // Create success message bubble
            const successBubble = document.createElement('div');
            successBubble.id = 'success-message';
            successBubble.innerHTML = `
                <div class="fixed top-8 right-8 bg-green-500 text-white px-8 py-4 rounded-lg shadow-2xl flex items-center gap-3 z-50 animate-slideIn">
                    <i class="fas fa-check-circle text-2xl"></i>
                    <div>
                        <p class="font-bold text-lg">Success!</p>
                        <p class="text-sm">Your message has been sent successfully. We will contact you shortly.</p>
                    </div>
                </div>
                <style>
                    @keyframes slideIn {
                        from {
                            transform: translateX(400px);
                            opacity: 0;
                        }
                        to {
                            transform: translateX(0);
                            opacity: 1;
                        }
                    }
                    @keyframes slideOut {
                        from {
                            transform: translateX(0);
                            opacity: 1;
                        }
                        to {
                            transform: translateX(400px);
                            opacity: 0;
                        }
                    }
                    .animate-slideIn {
                        animation: slideIn 0.5s ease-out;
                    }
                    .animate-slideOut {
                        animation: slideOut 0.5s ease-out forwards;
                    }
                </style>
            `;
            document.body.appendChild(successBubble);
            
            // Remove URL parameter to clean up the address bar
            window.history.replaceState({}, document.title, window.location.pathname);
            
            // Auto-dismiss after 10 seconds
            setTimeout(() => {
                const messageBubble = document.getElementById('success-message');
                if (messageBubble) {
                    const messageDiv = messageBubble.querySelector('div');
                    messageDiv.classList.remove('animate-slideIn');
                    messageDiv.classList.add('animate-slideOut');
                    setTimeout(() => {
                        messageBubble.remove();
                    }, 500);
                }
            }, 10000);
        }
    </script>
</body>
</html>
