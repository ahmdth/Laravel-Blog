<x-layout>
    <div class="container max-w-4xl mx-auto">
        @foreach($users as $user)
            <article class="pt-6">
                <p class="font-bold mb-2">{{ $user->name }}</p>
            </article>
        @endforeach
    </div>
</x-layout>
