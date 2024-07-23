<x-chat-layouts>
<div class="flex flex-col md:flex-row h-full md:pb-0">
    <!-- Sidebar for Chat Rooms -->
    <div class="md:w-1/4 bg-white md:border-r border  border-gray-300 overflow-y-auto">
        <div class="p-4 md:flex items-center gap-2 hidden md:block">
            <a href="/">
                <i class="fas fa-chevron-left"></i>
            </a>
            <h2 class="text-xl font-semibold">Chats</h2>
        </div>
        <div class="p-4 space-y-4 hidden md:block">
            <div class="flex items-center p-2 border rounded-lg hover:bg-gray-100 cursor-pointer">
                <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/150" alt="Profile">
                <div class="ml-3">
                    <p class="font-semibold">Seller</p>
                    <p class="text-sm text-gray-500">Last message...</p>
                </div>
            </div>
            <div class="flex items-center p-2 border rounded-lg hover:bg-gray-100 cursor-pointer">
                <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/150" alt="Profile">
                <div class="ml-3">
                    <p class="font-semibold">Seller</p>
                    <p class="text-sm text-gray-500">Last message...</p>
                </div>
            </div>
            <!-- More chat rooms -->
        </div>
    </div>

    <div class="flex-1 flex flex-col">
        <!-- Header -->
        <div class="flex items-center justify-between p-4 bg-white border-b border-gray-300">
            <div class="flex items-center">
                <a href="/chat/home">
                    <i class="fa-solid fa-chevron-left mr-4"></i>
                </a>
                <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/150" alt="Profile">
                <div class="ml-3">
                    <p class="font-semibold">Seller</p>
                    <p class="text-sm text-gray-500">Online</p>
                </div>
            </div>
        </div>

        <!-- Chat Messages -->
        <div class="flex-1 overflow-y-auto p-4 space-y-4">
            <div class="flex justify-start">
                <div class="bg-gray-200 rounded-lg p-3">
                    <p>Hello, how are you?</p>
                </div>
            </div>
            <div class="flex justify-end">
                <div class="bg-blue-500 text-white rounded-lg p-3">
                    <p>I'm good, thank you! How about you?</p>
                </div>
            </div>
            <!-- More messages -->
        </div>

        <!-- Message Input -->
        <div class="p-4 bg-white border-t border-gray-300">
            <div class="flex items-center">
                <input type="text" placeholder="Type a message..." class="flex-1 px-4 py-2 border rounded-lg focus:outline-none">
                <button class="ml-4 text-blue-500">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>
</div>
</x-chat-layouts>
