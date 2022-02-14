<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="dept" :value="__('Department')" />

                <x-input id="dept" class="block mt-1 w-full" type="text" name="dept" :value="old('dept')" required />
            </div>

            <div class="mt-4">
                <x-label for="position" :value="__('Position')" />

                <x-input id="position" class="block mt-1 w-full" type="text" name="position" required />
            </div>

            <div class="mt-4">
                <x-label for="contact_no" :value="__('Contact No')" />

                <x-input id="contact_no" class="block mt-1 w-full" type="text" name="contact_no" required />
            </div>

            <div class="mt-4">
                <x-label for="username" :value="__('Username')" />

                <x-input id="position" class="block mt-1 w-full" type="text" name="username" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div class="mt-4">
                <x-label for="role_id">Register as:</x-label>
                <select name="role_id" id="">
                    <option value="admin">Admin</option>
                    <option value="dsc">DSC</option>
                    <option value="ndsc">NDSC</option>
                </select>
            <div>

            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
