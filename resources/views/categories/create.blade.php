<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <form action="{{ route("categories.store") }}" method="post" class="space-y-4">
            @csrf
            <div>
                <label for="name"></label>
                <input class="w-xl border px-4 py-2 rounded-lg" type="text" name="name" id="name">
            </div>
            <div>
                <label for="slug"></label>
                <input class="w-xl border px-4 py-2 rounded-lg" type="text" name="slug" id="slug">
            </div>
            <input class="bg-blue-500 rounded-lg px-4 py-2 text-white" type="submit" value="Create">
        </form>
    </main>
</x-layout>