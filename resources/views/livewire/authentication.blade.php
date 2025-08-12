<div class="font-poppins text-heading-dark w-dvw h-dvh bg-cover bg-no-repeat flex items-center justify-center"
    style="background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.2)), url('{{ asset('images/login-bg.png') }}');">
    <!-- Login -->
    <form wire:submit='login'
        class="w-96 flex flex-col gap-10 bg-[#ffffffc7] p-10 rounded-3xl backdrop-blur-lg shadow-2xl">
        <!-- logo -->
        <div class="flex flex-col items-center gap-2">
            <img class="w-40" src="{{ asset('images/main-logo.png') }}" alt="" />
            <h1 class="font-normal text-xl">Login</h1>
        </div>

        <!-- Inputs -->
        <div class="flex flex-col gap-4">
            <div class="flex flex-col gap-1">
                <label for="">Username</label>
                <input wire:model="username"
                    class="text-sm bg-white py-1.5 px-3 rounded-xl outline-none border-2 border-white focus:border-amber-600"
                    type="text" placeholder="Enter your username" />
            </div>
            <div class="flex flex-col gap-1">
                <label for="">Password</label>
                <input wire:model="password"
                    class="text-sm bg-white py-1.5 px-3 rounded-xl outline-none border-2 border-white focus:border-amber-600"
                    type="password" placeholder="Enter your password" />
                <a href="#" class="w-fit self-end">Forgot Password?</a>
            </div>
        </div>

        <!-- Login Button -->
        <button type="submit" class="py-1.5 px-3 rounded-xl text-white font-semibold bg-blue-button">
            Login
        </button>
    </form>
</div>
