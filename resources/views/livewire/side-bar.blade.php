<nav class="bg-white flex flex-col items-center p-6 gap-14 h-full">
    <!-- Logo -->
    <img src="{{ asset('images/main-logo.png') }}" class="w-32" alt="" />

    <!-- Account Info -->
    <div class="flex flex-col gap-2 items-center">
        <img src="{{ asset('images/profile.jpg') }}" class="w-24 rounded-full" alt="" />
        <!-- Profile Pic -->
        <div class="flex flex-col items-center">
            <p class="text-lg">
                <span class="font-semibold leading-none">Geroleo, </span>Dave
            </p>
            <!-- Fullname -->
            <small class="leading-none text-paragraph">Sned Teacher</small>
            <!-- Specializzation -->
        </div>
    </div>

    <!-- Nav Controls -->
    <div class="w-full text-paragraph flex flex-col gap-2">
        @foreach ($sideBarItems as $item)
            <a wire:click="setActiveSideBar('{{ $item['name'] }}')"
                class="cursor-pointer hover:bg-blue-button hover:text-white flex gap-2 px-8 py-4 rounded-xl {{ $activeSideBar === $item['name'] ? 'active:bg-blue-button active:text-white active-nav shadow-blue-button shadow-xl/35' : '' }}">
                <span class="material-symbols-rounded">{{ $item['icon'] }}</span>
                <p class="">{{ $item['name'] }}</p>
            </a>
        @endforeach
        {{-- -------------- --}}
        <a
            class="hover:bg-blue-button hover:text-white flex gap-2 active:bg-blue-button px-8 py-4 active:text-white rounded-xl">
            <span class="material-symbols-rounded">settings</span>
            <p class="">Settings</p>
        </a>
        <a
            class="cursor-pointer hover:bg-blue-button hover:text-white flex gap-2 active:bg-blue-button px-8 py-4 active:text-white rounded-xl">
            <span class="material-symbols-rounded">door_back</span>
            <p class="">Logout</p>
        </a>
    </div>
</nav>
