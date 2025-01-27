<header class="bg-white shadow sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{route('welcome')}}" class="text-2xl font-bold text-indigo-600">TaskTrail</a>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="#features" class="text-gray-700 hover:text-indigo-600">Features</a></li>
                <li><a href="#pricing" class="text-gray-700 hover:text-indigo-600">Pricing</a></li>
                <li><a href="#contact" class="text-gray-700 hover:text-indigo-600">Contact</a></li>
                @if (Route::has('login'))
                    @auth
                        <a href="{{route('dashboard')}}"
                           class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                            Dashboard
                        </a>
                    @else
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}"
                                   class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">
                                    Get Started
                                </a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </nav>
    </div>
</header>
