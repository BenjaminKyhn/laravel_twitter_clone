<x-app>
<header class="mb-6 relative">
    <div class="relative">
        <img
            src="/images/default-profile-banner.jpg"
            alt=""
            class="mb-2"
        >

        <img
            src="{{ $user->avatar }}"
            alt=""
            class="rounded-full mr-2 bottom-0 transform -translate-x-1/2 translate-y-1/2"
            style="left: 50%; width: 150px; position: absolute;"
        >
    </div>

    <div class="flex justify-between items-center mb-6">
        <div style="max-width: 270px">
            <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
            <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
        </div>

        <div class="flex">
            @can ('edit', $user)
            <a href="{{ $user->path('edit') }}" class="rounded-full border border-gray-300 py-2 px-4 text-xs mr-2">Edit Profile</a>
            @endcan

            <x-follow-button :user="$user"></x-follow-button>
        </div>
    </div>

    <p class="text-sm">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et risus quis nisi aliquam blandit pretium at libero. Maecenas vehicula tristique felis. Etiam sagittis, dolor non sagittis vulputate, metus ex maximus ante, in hendrerit purus diam blandit leo. Phasellus id erat odio. Aliquam dignissim urna eu placerat accumsan. Nullam aliquam varius ipsum, eget hendrerit nibh posuere id. Sed lobortis dapibus turpis, in maximus est consequat quis. Donec nisl purus, gravida et fermentum a, vulputate nec libero. Curabitur quis erat eu purus consequat finibus ac ac lacus. Phasellus sed consequat dui, eu egestas ligula. Nunc venenatis eu turpis nec finibus. Aenean vestibulum vestibulum justo ac interdum.
    </p>
</header>

@include ('_timeline', [
    'tweets' => $tweets
])
</x-app>
