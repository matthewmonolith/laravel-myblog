@props(['comment'])
<article class="flex bg-gray-100 p-6 rounded-xl border border-gray-200 space-x-4">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60?u={{$comment->user_id}}" alt="avi" width="60" height="60" class="rounded-xl">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{$comment->author->username}}</h3>
            <p class="text-xs">{{$comment->created_at->format('Y D')}}</p>
        </header>

        <p>{{$comment->body}}</p>
    </div>
</article>