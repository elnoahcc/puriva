<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PURIVA - Smart UV Food Safety Technology</title>

    <!-- Favicon -->
    <link rel="icon" href="images/iconpuriva.png" type="image/x-icon" />

    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

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

    <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/12.2.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/12.2.1/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCB4aqeSrBoX3sxL0HNxqNz0nQDMH4zpSQ",
    authDomain: "purivia-sma6yogya.firebaseapp.com",
    projectId: "purivia-sma6yogya",
    storageBucket: "purivia-sma6yogya.firebasestorage.app",
    messagingSenderId: "325593898433",
    appId: "1:325593898433:web:f86687e6f648329cf0e340",
    measurementId: "G-EKC7DE7J5L"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>

    <!-- Set Inter sebagai default font untuk seluruh website -->
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>


<body class="bg-gradient-to-br from-puriva-light/30 to-white overflow-x-hidden bg-white text-gray-900 font-inter">
    

  @include('partials.navbar')
    

    <!-- Hero Section -->
    <section id="home" class="pt-32 pb-20 bg-gradient-to-br from-puriva-light/30 to-white">
        <div class="container mx-auto px-6">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div data-aos="fade-right">
                        <div class="inline-flex items-center  px-4 py-2 rounded-full text-puriva-blue font-semibold text-sm mb-8">
                        Innovation Award Winner 2025
                        </div>
                        <h1 class="text-5xl lg:text-7xl font-bold leading-tight mb-6">
                            Smart UV<br>
                            <span class="text-puriva-blue">Food Safety</span><br>
                            Revolution
                        </h1>
                        <p class="text-xl text-gray-600 mb-8 leading-relaxed max-w-xl">
                            Protecting 1.3M+ Indonesian school children from foodborne illnesses with intelligent UV-C sterilization technology.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 mb-12">
                            <button class="bg-puriva-blue text-white px-8 py-4 rounded-xl font-semibold hover:bg-puriva-dark transition-all transform hover:scale-105 shadow-lg">
                                Explore PURIVA
                            </button>
                            <button class="border-2 border-puriva-blue text-puriva-blue px-8 py-4 rounded-xl font-semibold hover:bg-puriva-blue hover:text-white transition-all">
                                Watch Demo
                            </button>
                        </div>
                        <div class="flex items-center space-x-8 text-sm text-gray-500">
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <span>99.9% Pathogen Elimination</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <div class="w-3 h-3 bg-blue-500 rounded-full animate-pulse"></div>
                                <span>IoT Enabled</span>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-left" class="relative">
                        <div class="relativeshadow-2xl">
                            <img src="images/uv chamber.png" alt="PURIVA Smart UV Chamber" class="w-full h-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problem & Impact -->
   <section class="bg-gradient-to-br from-puriva-light/30 to-white py-28 ">
  <div class="container mx-auto px-6">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-20" data-aos="fade-up">
        <h2 class="text-5xl font-extrabold text-gray-900 mb-6">The Crisis We're Solving</h2>
        <p class="text-2xl text-gray-600 max-w-3xl mx-auto">
          Food contamination in Indonesian schools affects thousands of children annually.
        </p>
      </div>

      <div class="grid md:grid-cols-4 gap-10">
        <div class="bg-white rounded-3xl p-10 shadow-xl border border-gray-100 text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="text-5xl font-extrabold text-red-500 mb-3 counter" data-target="1376">0</div>
          <p class="text-gray-600 font-medium">Students Affected</p>
        </div>
        <div class="bg-white rounded-3xl p-10 shadow-xl border border-gray-100 text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="text-5xl font-extrabold text-orange-500 mb-3 counter" data-target="85">0</div>
          <p class="text-gray-600 font-medium">Poor Handling</p>
        </div>
        <div class="bg-white rounded-3xl p-10 shadow-xl border border-gray-100 text-center" data-aos="fade-up" data-aos-delay="300">
          <div class="text-5xl font-extrabold text-yellow-500 mb-3 counter" data-target="60">0</div>
          <p class="text-gray-600 font-medium">No Sterilization</p>
        </div>
        <div class="bg-white rounded-3xl p-10 shadow-xl border border-gray-100 text-center" data-aos="fade-up" data-aos-delay="400">
          <div class="text-5xl font-extrabold text-puriva-blue mb-3 counter" data-target="100">0%</div>
          <p class="text-gray-600 font-medium">Preventable</p>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".counter");

    counters.forEach(counter => {
      const hasPercent = counter.innerText.includes("%"); // cek ada % gak

      const updateCount = () => {
        const target = +counter.getAttribute("data-target");
        const currentText = counter.innerText.replace("%", ""); // buang % dulu
        const count = +currentText;

        const speed = 100;
        const increment = Math.ceil(target / speed);

        if (count < target) {
          counter.innerText = (count + increment) + (hasPercent ? "%" : "");
          setTimeout(updateCount, 20);
        } else {
          counter.innerText = target + (hasPercent ? "%" : "");
        }
      };

      updateCount();
    });
  });
</script>




    <!-- About Us -->
    <section id="about" class="py-20">
        <div class="bg-gradient-to-br from-puriva-light/30 to-white container mx-auto px-6">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div data-aos="fade-right">
                        <div class="relative">
                            <img src="ui app/onboarding.png" alt="PURIVA Team" >
                            <div ></div>
                        </div>
                    </div>
                    <div data-aos="fade-left">
                        <div class="i text-puriva-blue font-semibold text-sm mb-6">
                            Human-Centered Design
                        </div>
                        <h2 class="text-4xl font-bold text-gray-900 mb-6">About PURIVA</h2>
                        <p class="text-lg text-gray-600 mb-8">
                            Smart UV chamber designed for Indonesian school meal programs, combining UV-C technology with IoT monitoring for maximum food safety.
                        </p>
                        
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="bg-puriva-blue text-white p-2 rounded-lg">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold text-gray-900 mb-2">99.9% Pathogen Elimination</h4>
                                    <p class="text-gray-600">Advanced UV-C technology destroys harmful pathogens</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="bg-puriva-blue text-white p-2 rounded-lg">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold text-gray-900 mb-2">Smart IoT Monitoring</h4>
                                    <p class="text-gray-600">Real-time tracking and remote control</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div class="bg-puriva-blue text-white p-2 rounded-lg">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-semibold text-gray-900 mb-2">User-Friendly Design</h4>
                                    <p class="text-gray-600">Easy operation for school staff</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision Mission -->
<section class="py-20 bg-puriva-light/20">
    <div class="container mx-auto px-6">
        <div class="max-w-6xl mx-auto text-center mb-12">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Our Vision & Mission</h1>
            <p class="text-xl text-gray-600">Driving safe and nutritious meals for children through innovative UV sterilization technology.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-12">
            <div class="bg-white rounded-3xl p-10 shadow-lg border border-gray-100" data-aos="fade-right">
                <div class="w-16 h-16 bg-puriva-blue text-white rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Vision</h3>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Safe, nutritious school meals for every Indonesian child through innovative UV sterilization technology.
                </p>
            </div>
            <div class="bg-white rounded-3xl p-10 shadow-lg border border-gray-100" data-aos="fade-left">
                <div class="w-16 h-16 bg-puriva-blue text-white rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2v1a1 1 0 001 1h6a1 1 0 001-1V3a2 2 0 012 2v6.5a1.5 1.5 0 01-3 0V7a1 1 0 00-1-1H7a1 1 0 00-1 1v4.5a1.5 1.5 0 01-3 0V5z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">Mission</h3>
                <div class="space-y-3 text-gray-600">
                    <p>• Develop smart sterilization solutions</p>
                    <p>• Educate food safety standards</p>
                    <p>• Prevent foodborne illnesses</p>
                    <p>• Partner with institutions</p>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- Product -->
    <section id="product" class="py-20">
        <div class="container mx-auto px-6">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">PURIVA Smart UV Chamber</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Advanced food sterilization with intelligent monitoring</p>
                </div>

                <div class="grid lg:grid-cols-2 gap-16 items-center mb-20">
                    <div data-aos="fade-right">
                        <div class="p-8">
                            <img src="images/uv chamber.png" alt="PURIVA Product" class="w-full h-auto">
                        </div>
                    </div>
                    <div data-aos="fade-left" class="space-y-8">
                        <div class="p-6">
                            <div class="flex items-start space-x-4">
                                <div class="bg-puriva-blue text-white p-3 rounded-xl">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">UV-C Sterilization</h4>
                                    <p class="text-gray-600">Eliminates 99.9% of harmful pathogens</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-start space-x-4">
                                <div class="bg-puriva-blue text-white p-3 rounded-xl">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Smart IoT Control</h4>
                                    <p class="text-gray-600">Remote monitoring and automation</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-start space-x-4">
                                <div class="bg-puriva-blue text-white p-3 rounded-xl">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-gray-900 mb-2">Safety Design</h4>
                                    <p class="text-gray-600">Built for school environments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile App -->
                <div class=" rounded-3xl p-12" data-aos="fade-up">
                    <h3 class="text-3xl font-bold text-center text-gray-900 mb-12">Mobile Control</h3>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 mb-6">
                                <img src="ui app/beranda.png" alt="Dashboard" class="w-full h-auto rounded-xl">
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Dashboard</h4>
                            <p class="text-gray-600">Monitor chamber status</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 mb-6">
                                <img src="ui app/control panel.png" alt="Control Panel" class="w-full h-auto rounded-xl">
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Control</h4>
                            <p class="text-gray-600">Remote operation</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 mb-6">
                                <img src="ui app/statisik.png" alt="Analytics" class="w-full h-auto rounded-xl">
                            </div>
                            <h4 class="text-xl font-bold text-gray-900 mb-2">Analytics</h4>
                            <p class="text-gray-600">Usage patterns</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
<section id="pricing" class="py-20 bg-gradient-to-br from-puriva-light/30 to-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-6xl mx-auto">
      <!-- Header -->
      <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Simple, Transparent Pricing</h2>
        <p class="text-lg sm:text-xl text-gray-600">Invest in your students' health and safety</p>
      </div>

      <!-- Pricing Card -->
      <div class="max-w-md lg:max-w-lg mx-auto">
        <div class="bg-white rounded-3xl p-8 sm:p-10 shadow-2xl border-2 border-puriva-blue relative" data-aos="fade-up">
          <!-- Popular Badge -->
          <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
            <div class="bg-puriva-blue text-white px-6 py-2 rounded-full text-sm font-semibold">Most Popular</div>
          </div>

          <div class="text-center mb-8">
            <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">PURIVA Smart UV Chamber</h3>
            <div class="mb-6">
              <span class="text-4xl sm:text-5xl font-bold text-puriva-blue">$99</span>
              <span class="text-gray-600 ml-2">/ unit</span>
            </div>
            <div class="text-gray-500 text-sm sm:text-base">
              Equivalent to <span class="font-semibold text-gray-700">Rp 1.600.000</span>
            </div>
          </div>

          <!-- Features -->
          <div class="space-y-3 sm:space-y-4 mb-8">
            <div class="flex items-center space-x-3 text-sm sm:text-base">
              <div class="bg-green-100 p-1 rounded-full">
                <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"></path>
                </svg>
              </div>
              <span>99.9% Pathogen Elimination</span>
            </div>
            <!-- Tambahkan fitur lain sama seperti di original -->
          </div>

          <!-- Order Form -->
          <form id="orderForm" class="space-y-4">
            <div>
              <label class="block text-sm sm:text-base font-semibold text-gray-700 mb-2">School/Institution Name</label>
              <input type="text" id="schoolName" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-puriva-blue focus:border-transparent transition-all">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm sm:text-base font-semibold text-gray-700 mb-2">Contact Name</label>
                <input type="text" id="contactName" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-puriva-blue focus:border-transparent transition-all">
              </div>
              <div>
                <label class="block text-sm sm:text-base font-semibold text-gray-700 mb-2">Phone Number</label>
                <input type="tel" id="phoneNumber" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-puriva-blue focus:border-transparent transition-all">
              </div>
            </div>

            <div>
              <label class="block text-sm sm:text-base font-semibold text-gray-700 mb-2">Quantity Needed</label>
              <select id="quantity" required class="w-full px-3 sm:px-4 py-3 text-sm sm:text-base border border-gray-300 rounded-xl focus:ring-2 focus:ring-puriva-blue focus:border-transparent transition-all">
                <option value="">Select quantity</option>
                <option value="1">1 Unit - $99</option>
                <option value="2">2 Units - $198</option>
                <option value="3">3 Units - $297</option>
                <option value="5">5 Units - $495 (5% discount)</option>
                <option value="10">10+ Units - Contact for bulk pricing</option>
              </select>
            </div>

            <div>
              <label class="block text-sm sm:text-base font-semibold text-gray-700 mb-2">Additional Notes (Optional)</label>
              <textarea id="notes" rows="3" class="w-full px-3 sm:px-4 py-3 text-sm sm:text-base border border-gray-300 rounded-xl focus:ring-2 focus:ring-puriva-blue focus:border-transparent transition-all resize-none" placeholder="Any special requirements or questions..."></textarea>
            </div>

            <button type="submit" class="w-full bg-green-600 text-white py-4 rounded-xl font-semibold hover:bg-green-700 transition-all transform hover:scale-105 shadow-lg flex items-center justify-center space-x-2">
              <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12.017 1.995c-.5 0-.948.139-1.289.435L9.438 3.64c-.34.295-.66.693-.66 1.165v1.195h-.998c-.55 0-.998.448-.998.998v12c0 .55.448.998.998.998h9.44c.55 0 .998-.448.998-.998v-12c0-.55-.448-.998-.998-.998h-.998V4.805c0-.472-.32-.87-.66-1.165L13.306 2.43c-.341-.296-.789-.435-1.289-.435zm0 1.995c.198 0 .321.067.424.155l1.29 1.21c.103.097.169.236.169.445v1.2h-3.766v-1.2c0-.209.066-.348.169-.445l1.29-1.21c.103-.088.226-.155.424-.155zm-2.017 5v1h4v-1h2v10h-8v-10h2zm1 3v1h2v-1h-2zm0 3v1h2v-1h-2z"/>
              </svg>
              <span>Order via WhatsApp</span>
            </button>
          </form>

          <div class="text-center mt-6 text-sm sm:text-base text-gray-500">
            <p>Secure ordering • Free consultation • Quick response</p>
          </div>
        </div>
      </div>

      <!-- Additional Info -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 max-w-4xl mx-auto mt-16">
        <!-- Item 1 -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="bg-puriva-blue text-white p-4 rounded-2xl w-16 h-16 flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
              <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
            </svg>
          </div>
          <h4 class="text-lg font-bold text-gray-900 mb-2">Flexible Payment</h4>
          <p class="text-gray-600 text-sm sm:text-base">Multiple payment options available</p>
        </div>
        <!-- Item 2 -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="200">
          <div class="bg-puriva-blue text-white p-4 rounded-2xl w-16 h-16 flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
              <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path>
              <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 000-2h1a1 1 0 011 1v9a1 1 0 01-1 1h-1a1 1 0 000-2h-1V7h1z"></path>
            </svg>
          </div>
          <h4 class="text-lg font-bold text-gray-900 mb-2">Fast Delivery</h4>
          <p class="text-gray-600 text-sm sm:text-base">2-3 weeks delivery across Indonesia</p>
        </div>
        <!-- Item 3 -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="300">
          <div class="bg-puriva-blue text-white p-4 rounded-2xl w-16 h-16 flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
          </div>
          <h4 class="text-lg font-bold text-gray-900 mb-2">Expert Support</h4>
          <p class="text-gray-600 text-sm sm:text-base">Dedicated customer success team</p>
        </div>
      </div>
    </div>
  </div>
</section>


<script>
document.getElementById('orderForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Get form data
    const schoolName = document.getElementById('schoolName').value;
    const contactName = document.getElementById('contactName').value;
    const phoneNumber = document.getElementById('phoneNumber').value;
    const quantity = document.getElementById('quantity').value;
    const notes = document.getElementById('notes').value;
    
    // Validate required fields
    if (!schoolName || !contactName || !phoneNumber || !quantity) {
        alert('Please fill in all required fields');
        return;
    }
    
    // Create WhatsApp message
    const message = `Halo PURIVA! 👋

Saya ingin memesan PURIVA Smart UV Chamber dengan detail berikut:

🏫 *Nama Sekolah/Institusi:* ${schoolName}
👤 *Nama Kontak:* ${contactName}
📱 *Nomor Telepon:* ${phoneNumber}
📦 *Jumlah Pesanan:* ${quantity}
${notes ? `📝 *Catatan Tambahan:* ${notes}` : ''}

Mohon informasi lebih lanjut tentang:
- Konfirmasi harga dan ketersediaan
- Proses pembayaran
- Jadwal pengiriman
- Instalasi dan training

Terima kasih! 🙏`;

    // Encode message for URL
    const encodedMessage = encodeURIComponent(message);
    
    // PURIVA WhatsApp number (replace with actual number)
    const whatsappNumber = '6289618530996'; // Format: country code + number without +
    
    // Create WhatsApp URL
    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;
    
    // Open WhatsApp
    window.open(whatsappUrl, '_blank');
});
</script>



<section id="news" class="py-20">
  <div class="container mx-auto px-6">
    <div class="max-w-7xl mx-auto">
      <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Latest News</h2>
        <p class="text-xl text-gray-600">Stay updated with PURIVA's innovations</p>
      </div>

      <!-- Grid News -->
      <div class="grid md:grid-cols-3 gap-8">
        @foreach($news as $index => $item)
          <article 
            data-news-index="{{ $index }}"
            class="bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 {{ $index >= 3 ? 'hidden' : '' }}"
            data-aos="fade-up" 
            data-aos-delay="{{ ($index + 1) * 100 }}"
          >
            <div class="h-48">
              @php
                  $imageUrl = $item->image ? Storage::url($item->image) : asset('images/default-news.jpg');
              @endphp
              <img src="{{ $imageUrl }}" alt="{{ $item->title }}" class="w-full h-full object-cover" />
            </div>

            <div class="p-6">
              <div class="flex items-center space-x-2 text-sm text-gray-500 mb-3">
                <span>{{ $item->published_at ? $item->published_at->format('F d, Y') : $item->created_at->format('F d, Y') }}</span>
                <span>•</span>
                <span>{{ $item->category }}</span>
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $item->title }}</h3>
              <p class="text-gray-600 mb-4">
                {{ $item->excerpt ?: Str::limit(strip_tags($item->content), 100) }}
              </p>
              <button onclick="openModal('news{{ $item->id }}')" class="text-puriva-blue font-semibold hover:text-puriva-dark transition-colors">Read More →</button>
            </div>
          </article>
        @endforeach
      </div>

      <!-- Tombol Selengkapnya -->
      @if($news->count() > 3)
        <div class="text-center mt-10">
          <button 
            id="toggleNewsBtn"
            class="px-6 py-3 bg-puriva-blue text-white rounded-xl font-semibold shadow-md hover:bg-puriva-dark transition"
            onclick="toggleNews()"
          >
            Lihat Selengkapnya
          </button>
        </div>
      @endif
    </div>
  </div>
</section>

<!-- Modals -->
@foreach($news as $item)
<div id="news{{ $item->id }}" class="fixed inset-0 hidden bg-black bg-opacity-60 z-50 flex items-center justify-center p-4">
  <div class="bg-white rounded-2xl max-w-2xl w-full p-6 relative max-h-[90vh] overflow-y-auto">
    <button onclick="closeModal('news{{ $item->id }}')" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 z-10">✕</button>
    
    @if($item->image)
      <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}" class="w-full h-64 object-cover rounded-xl mb-6" />
    @else
      @php
        $defaultImages = [
          'Award' => 'images/sdgs 3.png',
          'Partnership' => 'images/sma 6 yogyakarta.jpg', 
          'Research' => 'images/uv chamber.png'
        ];
        $defaultImage = $defaultImages[$item->category] ?? 'images/default-news.jpg';
      @endphp
      <img src="{{ asset($defaultImage) }}" alt="{{ $item->title }}" class="w-full h-64 object-cover rounded-xl mb-6" />
    @endif
    
    <div class="mb-4">
      <div class="flex items-center space-x-2 text-sm text-gray-500 mb-2">
        <span>{{ $item->published_at ? $item->published_at->format('F d, Y') : $item->created_at->format('F d, Y') }}</span>
        <span>•</span>
        <span>{{ $item->category }}</span>
      </div>
      <h3 class="text-2xl font-bold mb-4">{{ $item->title }}</h3>
    </div>
    
    <div class="text-gray-600 prose max-w-none">
      {!! $item->content !!}
    </div>
  </div>
</div>
@endforeach

<script>
  let showAll = false;
  function toggleNews() {
    showAll = !showAll;
    document.querySelectorAll('[data-news-index]').forEach((el, i) => {
      if (i >= 3) { // semua berita setelah 3 pertama
        if (showAll) {
          el.classList.remove('hidden');
        } else {
          el.classList.add('hidden');
        }
      }
    });
    document.getElementById('toggleNewsBtn').innerText = showAll ? 'Tutup' : 'Lihat Selengkapnya';
  }

  function openModal(id) {
    document.getElementById(id).classList.remove('hidden');
  }
  function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
  }
</script>






    <!-- SDGs & Partners -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="max-w-7xl mx-auto">
                <!-- SDGs -->
                <div class="text-center mb-16" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Supporting UN SDGs</h2>
                </div>
                <div class="grid md:grid-cols-2 gap-12 max-w-4xl mx-auto mb-20">
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 text-center" data-aos="fade-right">
                        <img src="images/sdgs 3.png" alt="SDG 3" class="w-20 h-20 mx-auto mb-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Good Health</h3>
                        <p class="text-gray-600">Ensuring healthy lives for children</p>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 text-center" data-aos="fade-left">
                        <img src="images/sdgs 6.png" alt="SDG 6" class="w-20 h-20 mx-auto mb-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Clean Water & Sanitation</h3>
                        <p class="text-gray-600">Promoting hygiene standards</p>
                    </div>
                </div>

                <!-- Partners -->
                <div class="text-center mb-12" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Trusted Partners</h2>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-5xl mx-auto">
                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100 flex items-center justify-center" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/sma 6 yogyakarta.jpg" alt="SMA 6 Yogyakarta" class="h-12 max-w-full object-contain">
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100 flex items-center justify-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="images/partner-logoenuam.png" alt="Enuma Technology" class="h-12 max-w-full object-contain">
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100 flex items-center justify-center" data-aos="fade-up" data-aos-delay="300">
                        <img src="images/partner-logomersif.png" alt="Mersif" class="h-12 max-w-full object-contain">
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg border border-gray-100 flex items-center justify-center" data-aos="fade-up" data-aos-delay="400">
                        <img src="images/partner-mersif academy.png" alt="Mersif Academy" class="h-12 max-w-full object-contain">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
<!-- Contact -->
<section id="contact" class="py-20 bg-gray-50">
  <div class="container mx-auto px-6">
    <div class="max-w-6xl mx-auto">
      <div class="text-center mb-16" data-aos="fade-up">
        <h2 class="text-4xl font-bold text-gray-900 mb-4">Ready to Transform Food Safety?</h2>
        <p class="text-xl text-gray-600">Let's discuss how PURIVA can protect your students</p>
      </div>
      
      <div class="grid lg:grid-cols-2 gap-16">
        <!-- Contact Info -->
        <div data-aos="fade-right">
  <div class="bg-puriva-blue text-white rounded-3xl p-10">
    <h3 class="text-2xl font-bold mb-8">Get in Touch</h3>
    <div class="space-y-6">
      <!-- Email -->
      <div class="flex items-center space-x-4">
        <div class="bg-white/20 p-3 rounded-lg">
          <!-- Mail Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16v16H4V4z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M22 6l-10 7L2 6" />
          </svg>
        </div>
        <div>
          <p class="font-semibold">Email</p>
          <p>puriva2025@gmail.com</p>
        </div>
      </div>

      <!-- Phone -->
      <div class="flex items-center space-x-4">
        <div class="bg-white/20 p-3 rounded-lg">
          <!-- Phone Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.95.68l1.2 3.6a1 1 0 01-.27 1.05L9.12 10.6a16.1 16.1 0 006.28 6.28l2.27-2.04a1 1 0 011.05-.27l3.6 1.2a1 1 0 01.68.95V19a2 2 0 01-2 2h-1C9.82 21 3 14.18 3 6V5z" />
          </svg>
        </div>
        <div>
          <p class="font-semibold">Phone</p>
          <p>+62 896 1853 0996</p>
        </div>
      </div>

      <!-- Social Media -->
      <div class="flex items-center space-x-4">
        <div class="bg-white/20 p-3 rounded-lg">
          <!-- Globe Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4a8 8 0 100 16 8 8 0 000-16z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20" />
          </svg>
        </div>
        <div>
          <p class="font-semibold">Social Media</p>
          <p>@official_puriva</p>
        </div>
      </div>
    </div>
  </div>
</div>


        <!-- Form -->
        <div data-aos="fade-left">
          <form id="contactForm" class="bg-white rounded-3xl p-10 shadow-2xl border border-gray-100">
            <div class="space-y-6">
              <div class="grid md:grid-cols-2 gap-6">
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-2">Name</label>
                  <input id="name" type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-xl">
                </div>
                <div>
                  <label class="block text-sm font-semibold text-gray-700 mb-2">Institution</label>
                  <input id="institution" type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-xl">
                </div>
              </div>
              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                <input id="email" type="email" required class="w-full px-4 py-3 border border-gray-300 rounded-xl">
              </div>
              <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                <textarea id="message" rows="5" required class="w-full px-4 py-3 border border-gray-300 rounded-xl" placeholder="Tell us about your needs..."></textarea>
              </div>
              <button type="submit" class="w-full bg-puriva-blue text-white py-4 rounded-xl font-semibold hover:bg-puriva-dark transition-all transform hover:scale-105 shadow-lg">
                Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.getElementById("contactForm").addEventListener("submit", function(e){
  e.preventDefault();

  let name = document.getElementById("name").value;
  let institution = document.getElementById("institution").value;
  let email = document.getElementById("email").value;
  let message = document.getElementById("message").value;

  // nomor tujuan (format internasional tanpa +)
  let phone = "6288216118101";

  // format pesan
  let text = `Halo, saya ${name} dari ${institution}.%0AEmail: ${email}%0APesan: ${message}`;

  // redirect ke WhatsApp
  let url = `https://wa.me/${phone}?text=${text}`;
  window.open(url, "_blank");
});
</script>

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

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
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