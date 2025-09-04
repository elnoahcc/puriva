<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team PURIVA - Support Team Puriva</title>

    <!-- Favicon -->
    <link rel="icon" href="images/iconpuriva.png" type="image/x-icon" />

    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AOS (Animate On Scroll) -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'puriva-blue': '#2563eb',
                        'puriva-light': '#dbeafe',
                        'puriva-dark': '#1e40af'
                    },
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <!-- Set Inter sebagai default font untuk seluruh website -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-white text-gray-900 font-inter">
    
    @include('partials.navbar')

    <!-- Hero Section -->
    <section class="pt-32 pb-20 ">
        <div class="container mx-auto px-6">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <div class="inline-flex items-center   text-puriva-blue font-semibold text-sm mb-8">
                        Meet The Innovators
                    </div>
                    <h1 class="text-5xl lg:text-6xl font-bold leading-tight mb-6">
                        The Team Behind<br>
                        <span class="text-puriva-blue">PURIVA Revolution</span>
                    </h1>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                        Six passionate innovators united to protect Indonesian children from foodborne illnesses.
                    </p>
                </div>
                
                <!-- Team Photo -->
            <div class="text-center mb-20" data-aos="fade-up" data-aos-delay="200">
  <div class="relative inline-block w-full max-w-5xl">
    <!-- Image -->
    <img src="images/team.png" alt="PURIVA Team" class="rounded-2xl w-full">

    <!-- Gradient overlay di bawah, lebih tebal -->
    <div class="absolute bottom-0 left-0 w-full h-60 bg-gradient-to-t from-white/100 to-white/0 rounded-b-2xl"></div>
  </div>
</div>



            </div>
        </div>
    </section>

    <!-- Team Members -->
    <section class="py-20 bg-gradient-to-br from-puriva-light/30 to-white">
        <div class="container mx-auto px-6">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Expert Team</h2>
                    <p class="text-xl text-gray-600">Each member brings unique expertise to revolutionize food safety</p>
                </div>
                
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Dhamma -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-center">
                            <div class="relative mb-6">
                                <img src="images/dhamma.png" alt="Dhamma Panna Vajrapani" class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-puriva-light">
                                
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Dhamma Panna Vajrapani</h3>
                            <p class="text-puriva-blue font-semibold mb-3">Research & Strategy Lead</p>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Strategic planning and evidence-based research to ensure PURIVA addresses real-world food safety challenges.
                            </p>
                        </div>
                    </div>

                    <!-- Kezia -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-center">
                            <div class="relative mb-6">
                                <img src="images/kezia.png" alt="Chaterine Kezia Kurniawan" class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-puriva-light">
                               
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Chaterine Kezia Kurniawan</h3>
                            <p class="text-puriva-blue font-semibold mb-3">UI/UX Designer</p>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Creates intuitive interfaces ensuring PURIVA technology is accessible for school staff and administrators.
                            </p>
                        </div>
                    </div>

                    <!-- Khalila -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                        <div class="text-center">
                            <div class="relative mb-6">
                                <img src="images/khalila.png" alt="Khalila Hasna Achava" class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-puriva-light">
                                
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Khalila Hasna Achava</h3>
                            <p class="text-puriva-blue font-semibold mb-3">Data & Documentation</p>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Manages comprehensive data analysis and documentation ensuring transparency and evidence-based decisions.
                            </p>
                        </div>
                    </div>

                    <!-- Alya -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="400">
                        <div class="text-center">
                            <div class="relative mb-6">
                                <img src="images/alya.png" alt="Alya Titiana Kalisha" class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-puriva-light">
                               
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Alya Titiana Kalisha</h3>
                            <p class="text-puriva-blue font-semibold mb-3">App Developer</p>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Develops mobile application and IoT integration bringing PURIVA's smart monitoring features to life.
                            </p>
                        </div>
                    </div>

                    <!-- Arina -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="500">
                        <div class="text-center">
                            <div class="relative mb-6">
                                <img src="images/arina.png" alt="Arina Zulfa Nashita" class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-puriva-light">
                               
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Arina Zulfa Nashita</h3>
                            <p class="text-puriva-blue font-semibold mb-3">Communication Lead</p>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Leads external communications and presentations, effectively conveying PURIVA's mission to stakeholders.
                            </p>
                        </div>
                    </div>

                    <!-- Sandya -->
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-all transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center">
                            <div class="relative mb-6">
                                <img src="images/sandya.png" alt="Sandya Nariswari" class="w-32 h-32 rounded-full mx-auto object-cover border-4 border-puriva-light">
                               
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Sandya Nariswari</h3>
                            <p class="text-puriva-blue font-semibold mb-3">Prototyping & Visual</p>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Creates product prototypes and compelling visual designs transforming concepts into tangible solutions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Values -->
    <section class="py-20 ">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">Our Values</h2>
                    <p class="text-xl text-gray-600">Principles driving our mission</p>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="w-16 h-16 bg-puriva-blue text-white rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Innovation</h3>
                        <p class="text-gray-600">Pioneering solutions for food safety challenges</p>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="w-16 h-16 bg-puriva-blue text-white rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Care</h3>
                        <p class="text-gray-600">Protecting children's health and well-being</p>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="w-16 h-16 bg-puriva-blue text-white rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Collaboration</h3>
                        <p class="text-gray-600">Working together for meaningful impact</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-br from-puriva-light/30 to-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center">
                <div class="bg-gradient-to-br from-puriva-blue to-puriva-dark text-white rounded-3xl p-12" data-aos="fade-up">
                    <h2 class="text-4xl font-bold mb-6">Join Our Mission</h2>
                    <p class="text-xl mb-8 opacity-90">
                        Connect with our team and discover how PURIVA can transform food safety.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="index.html#contact" class="bg-white text-puriva-blue px-8 py-4 rounded-xl font-semibold hover:bg-gray-100 transition-all transform hover:scale-105">
                            Contact Our Team
                        </a>
                        <a href="index.html#product" class="border-2 border-white text-white px-8 py-4 rounded-xl font-semibold hover:bg-white hover:text-puriva-blue transition-all">
                            Explore PURIVA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

   @include('partials.footer')

    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        document.getElementById('menu-btn').addEventListener('click', function() {
            // Mobile menu implementation
        });

        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.querySelector('div > div').classList.add('bg-white', 'shadow-lg');
                nav.querySelector('div > div').classList.remove('bg-white/95');
            } else {
                nav.querySelector('div > div').classList.remove('bg-white', 'shadow-lg');
                nav.querySelector('div > div').classList.add('bg-white/95');
            }
        });
    </script>
</body>
</html>