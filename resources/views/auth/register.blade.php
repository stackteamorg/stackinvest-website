<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
		<!-- Startup Name -->
		<div>
			<x-input-label for="startup_name" :value="__('StartUp name')" />
			<x-text-input id="startup_name" class="block mt-1 w-full" type="text" name="startup_name" :value="old('startup_name')" required autofocus />
			<x-input-error :messages="$errors->get('startup_name')" class="mt-2" />
		</div>
				<!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

				<!-- lastname -->
		<div>
			<x-input-label for="lastname" :value="__('Lastname')" />
			<x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus />
			<x-input-error :messages="$errors->get('lastname')" class="mt-2" />
		</div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>


		<!-- Mobile -->
		<div>
			<x-input-label for="mobile" :value="__('Mobile')" />
			<x-text-input id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required autofocus />
			<x-input-error :messages="$errors->get('mobile')" class="mt-2" />
		</div>



		<select name="level" id="level">
			<option value="mvp">mvp</option>
			<option value="prototype">prototype</option>
			<option value="idea">idea </option>
		</select>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
