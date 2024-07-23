<div class="md:w-1/8 bg-white h-screen py-4 fixed border-r border-gray-300 md:flex flex-col items-center justify-between hidden">
    <div class="flex items-center space-x-2 mb-8">
        <div class="bg-gray-800 rounded-full">
            <img src="{{ asset('images/logo/app-logo.png') }}" class="w-8" alt="logo.png">
        </div>
    </div>
    <ul class="flex flex-col gap-16">
        <li>
            <a href="/" class="p-7 {{ request()->is('/') || request()->is('checkout*') ? 'border-r-4 border-black' : '' }}">
                <i class="fas fa-home"></i>
            </a>
        </li>
        <li>
            <a href="/cart" class="p-7 {{ request()->is('cart') ? 'border-r-4 border-black' : '' }}">
                <i class="fas fa-shopping-cart"></i>
            </a>
        </li>
        <li>
            <a href="/chat" class="p-7 {{ request()->is('chat') ? 'border-r-4 border-black' : '' }}">
                <i class="fas fa-comment"></i>
            </a>
        </li>
    </ul>

    <ul class="flex flex-col items-center gap-8 justify-center">
        <li>
            <a href="/profile">
                <div class="avatar">
                    <div class="w-10 rounded-full flex items-center justify-center">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </li>
    </ul>
</div>

<!-- Bottom Bar for Mobile -->
<div class="w-full bg-white py-2 fixed bottom-0 left-0 right-0 border-t border-gray-300 flex md:hidden justify-between" style="z-index: 99999">
    <ul class="flex justify-between w-full">
        <li class="w-1/5 text-center">
            <a href="/" class="p-3 block {{ request()->is('/') || request()->is('checkout*') ? 'border-b-4 border-black' : '' }}">
                <i class="fas fa-home"></i>
            </a>
        </li>
        <li class="w-1/5 text-center">
            <a href="/cart" class="p-3 block {{ request()->is('cart') ? 'border-b-4 border-black' : '' }}">
                <i class="fas fa-shopping-cart"></i>
            </a>
        </li>
        <li class="w-1/5 text-center">
            <a href="/chat/home" class="p-3 block {{ request()->is('chat/home') || request()->is('chat') ? 'border-b-4 border-black' : '' }}">
                <i class="fas fa-comment"></i>
            </a>
        </li>
        <li class="w-1/5 text-center">
            <a href="/profile" class="p-3 block">
                <div class="avatar inline-block">
                    <div class="w-6 rounded-full">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </a>
        </li>
        <li class="w-1/5 text-center">
            <a href="#" class="p-3 block">
                <i class="fas fa-sign-out-alt"></i>
            </a>
        </li>
    </ul>
</div>
