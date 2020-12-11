@if (count($favorites) > 0)
    <ul class="list-unstyled">
        @foreach ($favorites as $micropost)
            <li class="media">  
                {{-- ユーザーのメールアドレスをもとにGravatarを取得して表示 --}} 
                <img class="mr-2 rounded" src="{{ Gravatar::get($user->email,['size' => 50]) }}" alt="">
                <div class="media-body">
                    <div>
                        {{ $user->name }}
                    </div>
                    <p class="mb-0">{!! nl2br(e($micropost->content)) !!}</p>
                    @include('favorites.favorite_button')
                </div>
            </li>
        @endforeach
    </ul>
    {{-- ページネーションのリンク --}}
    {{ $favorites->links() }}
@endif