<nav class="fixed w-full z-50 top-4">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto bg-white/95 backdrop-blur-lg shadow-lg border border-gray-200 rounded-2xl px-6 md:px-8 py-4 flex justify-between items-center">
            
            <!-- Logo -->
            <div class="flex items-center">
                <img src="images/logo puriva.png" alt="PURIVA" class="h-12 w-auto">
            </div>

            <!-- Menu & Auth -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="#home" class="text-gray-700 hover:text-puriva-blue font-medium transition-colors">Home</a>
                <a href="#about" class="text-gray-700 hover:text-puriva-blue font-medium transition-colors">About Us</a>
                <a href="#product" class="text-gray-700 hover:text-puriva-blue font-medium transition-colors">Product</a>
                <a href="#news" class="text-gray-700 hover:text-puriva-blue font-medium transition-colors">News</a>
                <a href="{{ url('/team') }}" class="text-gray-700 hover:text-puriva-blue font-medium transition-colors">Team</a>
                <a href="#contact" class="bg-puriva-blue text-white px-6 py-2 rounded-full hover:bg-puriva-dark transition-colors">Contact</a>

                <!-- Auth -->
                @if(Auth::check())
                    <!-- Profile Icon -->
                    <div class="relative group">
                        <button class="flex items-center space-x-2 bg-gray-100 p-2 rounded-full hover:bg-gray-200 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-puriva-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A7.962 7.962 0 0112 15c1.657 0 3.156.502 4.379 1.362M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </button>
                        <!-- Dropdown -->
                        <div class="absolute right-0 mt-2 w-40 bg-white shadow-lg rounded-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all">
                            <div class="p-3 text-gray-700 font-medium border-b">{{ Auth::user()->name }}</div>
                            <a href="{{ url('/profile') }}" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                            <form method="POST" action="{{ url('/logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">Logout</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ url('/login') }}" class="bg-white text-puriva-blue border border-puriva-blue px-6 py-2 rounded-full hover:bg-puriva-blue hover:text-white transition-colors">Masuk</a>
                @endif
            </div>

        </div>
    </div>
</nav>
