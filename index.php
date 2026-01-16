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
        .hero-bg {
            background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.6)), url('https://images.unsplash.com/photo-1519741497674-611481863552?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
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

    <!-- HERO -->
    <section id="home" class="hero-bg h-screen flex items-center justify-center text-center px-4">
        <div class="max-w-4xl">
            <p class="text-brand-gold font-bold tracking-[0.3em] mb-4 uppercase">Serving Since 1994</p>
            <h1 class="text-5xl md:text-7xl font-serif font-bold mb-6">Capturing Moments <br> Creating Memories</h1>
            <p class="text-gray-300 text-lg mb-10">Professional Wedding Photography & Cinematic Videography.</p>
            <div class="flex gap-4 justify-center">
                <a href="#contact" class="px-8 py-4 bg-brand-gold text-black font-bold rounded hover:bg-white transition">Book Event</a>
                <a href="#portfolio" class="px-8 py-4 border border-white text-white font-bold rounded hover:bg-white hover:text-black transition">Gallery</a>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="py-20 bg-brand-dark">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-brand-gold uppercase tracking-widest text-sm font-bold mb-2">Our Expertise</h2>
            <h3 class="text-4xl font-serif font-bold mb-16">Services We Provide</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-brand-gray p-8 rounded-lg border border-gray-800 hover:border-brand-gold transition">
                    <i class="fas fa-rings text-4xl text-brand-gold mb-4"></i>
                    <h4 class="text-xl font-bold mb-2">Wedding Photography</h4>
                    <p class="text-gray-400">Full event coverage from Mehndi to Walima.</p>
                </div>
                <div class="bg-brand-gray p-8 rounded-lg border border-gray-800 hover:border-brand-gold transition">
                    <i class="fas fa-film text-4xl text-brand-gold mb-4"></i>
                    <h4 class="text-xl font-bold mb-2">Cinematic Video</h4>
                    <p class="text-gray-400">4K Highlights, Drone shots & Storytelling.</p>
                </div>
                <div class="bg-brand-gray p-8 rounded-lg border border-gray-800 hover:border-brand-gold transition">
                    <i class="fas fa-book-open text-4xl text-brand-gold mb-4"></i>
                    <h4 class="text-xl font-bold mb-2">Digital Albums</h4>
                    <p class="text-gray-400">Premium Dubai binding & Karizma prints.</p>
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
                            <a href="https://www.facebook.com/rizwanelahi.rizwanelahi" target="_blank" class="text-sm hover:underline">Facebook Message</a>
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
                            <a href="https://www.facebook.com/moon060781" target="_blank" class="text-sm hover:underline">Facebook Message</a>
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
                             data-width="500" 
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
