<x-app>
<header class="mb-6 relative">
    <img
        src="/images/default-profile-banner.jpg"
        alt=""
        class="mb-2"
    >

    <div class="flex justify-between items-center mb-4">
        <div>
            <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
            <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
        </div>

        <div>
            <a href="" class="rounded-full border border-gray-300 py-2 px-4 text-xs mr-2">Edit Profile</a>
            <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow Me</a>
        </div>
    </div>

    <img
        src="{{ $user->avatar }}"
        alt=""
        class="rounded-full mr-2"
        style="width: 150px; left: calc(50% - 75px); top: 138px; position: absolute;"
    >

    <p class="text-sm">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et risus quis nisi aliquam blandit pretium at libero. Maecenas vehicula tristique felis. Etiam sagittis, dolor non sagittis vulputate, metus ex maximus ante, in hendrerit purus diam blandit leo. Phasellus id erat odio. Aliquam dignissim urna eu placerat accumsan. Nullam aliquam varius ipsum, eget hendrerit nibh posuere id. Sed lobortis dapibus turpis, in maximus est consequat quis. Donec nisl purus, gravida et fermentum a, vulputate nec libero. Curabitur quis erat eu purus consequat finibus ac ac lacus. Phasellus sed consequat dui, eu egestas ligula. Nunc venenatis eu turpis nec finibus. Aenean vestibulum vestibulum justo ac interdum.
    </p>
</header>

@include ('_timeline', [
    'tweets' => $user->tweets
])
</x-app>
