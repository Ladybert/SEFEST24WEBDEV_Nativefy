<x-chat-layouts>
    <!-- Chat List for Mobile -->
    <div class="w-full bg-white py-4 fixed bottom-0 left-0 right-0 border-t border-gray-300 flex flex-col md:hidden overflow-y-auto h-full">
        <div class="p-4">
            <h2 class="text-xl font-semibold">Chats</h2>
        </div>
        <div class="p-4 space-y-4">
            <a href="/chat" class="flex items-center p-2 border rounded-lg hover:bg-gray-100 cursor-pointer">
                <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/150" alt="Profile">
                <div class="ml-3">
                    <p class="font-semibold">Username 1</p>
                    <p class="text-sm text-gray-500">Last message...</p>
                </div>
            </a>
            <a href="/chat" class="flex items-center p-2 border rounded-lg hover:bg-gray-100 cursor-pointer">
                <img class="w-10 h-10 rounded-full" src="https://via.placeholder.com/150" alt="Profile">
                <div class="ml-3">
                    <p class="font-semibold">Username 2</p>
                    <p class="text-sm text-gray-500">Last message...</p>
                </div>
            </a>
            <!-- More chat rooms -->
        </div>
    </div>
</x-chat-layouts>
