
<x-app-layout>
    <div class="services-list">
        <div class="list-title mt-4 flex gap-6 items-center">
            <a href="/">
                <i class="fas fa-chevron-left"></i>
            </a>
            <h1 class="text-2xl font-bold">Layanan dengan kategori "Desain"</h1>
        </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-2 gap-4 mt-4 px-16">
            {{-- @foreach($services as $service) --}}
            <a href="/checkout" class="bg-white rounded-lg transition duration-300 p-2 border hover:border-gray-300 border-white">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4hG0toOw4r6Kj_oDdf_OmAxXYq5XbrTeNPA&s" alt="Product Image" class="w-full h-40 object-cover rounded-md ">
                <div class="card-body p-2">
                    <h2 class="text-lg font-semibold mb-2">Jasa desain pak kris</h2>
                    <p class="text-gray-600 mb-2">Rp. 250000</p>
                    <div class="flex items-center">
                        <svg class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.618 4.975a1 1 0 00.95.69h5.245c.969 0 1.372 1.24.588 1.81l-4.244 3.086a1 1 0 00-.364 1.118l1.618 4.975c.3.921-.755 1.688-1.538 1.118l-4.244-3.086a1 1 0 00-1.176 0l-4.244 3.086c-.783.57-1.838-.197-1.538-1.118l1.618-4.975a1 1 0 00-.364-1.118L2.596 9.402c-.784-.57-.381-1.81.588-1.81h5.245a1 1 0 00.95-.69l1.618-4.975z"/></svg>
                        <svg class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.618 4.975a1 1 0 00.95.69h5.245c.969 0 1.372 1.24.588 1.81l-4.244 3.086a1 1 0 00-.364 1.118l1.618 4.975c.3.921-.755 1.688-1.538 1.118l-4.244-3.086a1 1 0 00-1.176 0l-4.244 3.086c-.783.57-1.838-.197-1.538-1.118l1.618-4.975a1 1 0 00-.364-1.118L2.596 9.402c-.784-.57-.381-1.81.588-1.81h5.245a1 1 0 00.95-.69l1.618-4.975z"/></svg>
                        <svg class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.618 4.975a1 1 0 00.95.69h5.245c.969 0 1.372 1.24.588 1.81l-4.244 3.086a1 1 0 00-.364 1.118l1.618 4.975c.3.921-.755 1.688-1.538 1.118l-4.244-3.086a1 1 0 00-1.176 0l-4.244 3.086c-.783.57-1.838-.197-1.538-1.118l1.618-4.975a1 1 0 00-.364-1.118L2.596 9.402c-.784-.57-.381-1.81.588-1.81h5.245a1 1 0 00.95-.69l1.618-4.975z"/></svg>
                        <svg class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.618 4.975a1 1 0 00.95.69h5.245c.969 0 1.372 1.24.588 1.81l-4.244 3.086a1 1 0 00-.364 1.118l1.618 4.975c.3.921-.755 1.688-1.538 1.118l-4.244-3.086a1 1 0 00-1.176 0l-4.244 3.086c-.783.57-1.838-.197-1.538-1.118l1.618-4.975a1 1 0 00-.364-1.118L2.596 9.402c-.784-.57-.381-1.81.588-1.81h5.245a1 1 0 00.95-.69l1.618-4.975z"/></svg>
                        <svg class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.618 4.975a1 1 0 00.95.69h5.245c.969 0 1.372 1.24.588 1.81l-4.244 3.086a1 1 0 00-.364 1.118l1.618 4.975c.3.921-.755 1.688-1.538 1.118l-4.244-3.086a1 1 0 00-1.176 0l-4.244 3.086c-.783.57-1.838-.197-1.538-1.118l1.618-4.975a1 1 0 00-.364-1.118L2.596 9.402c-.784-.57-.381-1.81.588-1.81h5.245a1 1 0 00.95-.69l1.618-4.975z"/></svg>
                    </div>
                </div>
            </a>
            {{-- @endforeach --}}
        </div>
    </div>
</x-app-layout>
