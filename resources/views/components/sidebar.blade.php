<div class="md:w-1/8 bg-white h-screen py-4 fixed border border-r-gray-10 md:flex-col items-center justify-between md:flex hidden">
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

    <ul class="flex flex-col items-center gap-8">
        <li>
            <a href="/profile">
                <div class="avatar">
                    <div class="w-10 rounded-full">
                        <img src="https://t3.ftcdn.net/jpg/02/33/46/24/360_F_233462402_Fx1yke4ng4GA8TJikJZoiATrkncvW6Ib.jpg" />
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
