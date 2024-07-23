<form method="GET" action="{{ route('home') }}">
    <input type="text"  class="p-2 border rounded-xl w-[400px]" name="search" value="{{ $searchTerm }}" placeholder="Search for awesome">
</form>
