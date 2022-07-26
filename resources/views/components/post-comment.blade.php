@props(['comment'])

<article class="flex bg-gray-100 p-6 rounded-xl border mt-6">
  <div class="flex-shrink-0 mr-4">
    <img class="rounded-xl" width="50" height="50" src="https://i.pravatar.cc/50" alt="Avatar" />
  </div>
  <div>
    <header class="mb-2">
      <h3 class="font-bold mb-1">{{ $comment->user->name }}</h3>
      <p class="text-xs">{{ $comment->created_at->format('F j, Y, g:i a') }}</p>
    </header>
    <p>{{ $comment->body }}</p>
  </div>
</article>