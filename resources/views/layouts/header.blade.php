<header class="flex items-center justify-between p-4 bg-white shadow">
    <div class="flex items-center">
        <button class="text-gray-500 focus:outline-none lg:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <h1 class="text-2xl font-semibold text-gray-700 ml-4">Dashboard</h1>
    </div>
    <div class="flex items-center">
        {{-- <!-- Notification -->
        <div class="relative">
            <button class="text-gray-500 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V4a2 2 0 10-4 0v1.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                    </path>
                </svg>
            </button>
            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-20 hidden">
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Notification 1</a>
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Notification 2</a>
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Notification 3</a>
            </div>
        </div> --}}
        <!-- Profile dropdown -->
        <div class="relative ml-4">
            <button class="flex items-center text-gray-500 focus:outline-none">
                <img class="h-8 w-8 rounded-full object-cover" src="https://picsum.photos/150/150" alt="Profile">
                <span class="ml-2">John Doe</span>
                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-20 hidden">
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile</a>
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Settings</a>
                <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Logout</a>
            </div>
        </div>
    </div>
</header>
