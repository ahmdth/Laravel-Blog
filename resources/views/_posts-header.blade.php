<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>

    <p class="text-sm mt-14">
        Another year. Another update. We're refreshing the popular Laravel series with new content.
        I'm going to keep you guys up to speed with what's going on!
    </p>
    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-8">
        <div class="relative lg:inline-flex items-center rounded-xl">
            <x-dropdown :categories="$categories"/>
        </div>

        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl lg:w-56 w-full z-10">
            <form method="GET" action="#" class="lg:w-56  w-full">
                <input
                    type="text"
                    name="search"
                    placeholder="Find something"
                    value="{{ request("search") }}"
                    class="bg-transparent px-3 py-2 w-full lg:w-56 font-semibold text-sm focus:outline-none focus:ring"
                />
            </form>
        </div>
    </div>
</header>
