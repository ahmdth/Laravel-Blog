@props(["categories"])
<div x-data="{ open: false }" @click.away="open=false" class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8 z-50">
    <!--  Category -->
    <div @click="open=!open" class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
        <button class="inline-flex relative text-sm text-left lg:w-40 w-40 font-bold px-3 py-2">
            <span>Category</span>
            <x-chevron-icon />
        </button>
        <div x-show="open" class="absolute top-12 bg-gray-100 rounded-xl w-full p-2 max-h-40 overflow-x-auto z-50"  style="display: none">
            <!-- style="display: none"-->
            @foreach($categories as $category)
                <a href="/?category={{ $category->slug }}"
                    class="block text-sm hover:bg-blue-600 focus:bg-blue-600 focus:text-white focus:outline-none focus:rounded-md focus:ring-blue-200 hover:rounded-md hover:text-white transition-all duration-300 text-left px-3 py-1">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>
    </div>
</div>
