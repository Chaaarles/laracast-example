<x-layout>
    <x-slot:heading>Register user</x-slot:heading>

    <form method="post" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="name">Name</x-form-label>
                        <div class="mt-2 mb-2">
                            <x-form-input name="name" id="name" placeholder="John Doe" required/>
                        </div>
                        <x-form-error :name="'name'"/>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" name="email" id="email" placeholder="john@doe.com" required/>
                        </div>
                        <x-form-error :name="'email'"/>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password" id="password" placeholder="********"
                                          required/>
                        </div>
                        <x-form-error :name="'password'"/>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password_confirmation" id="password_confirmation"
                                          placeholder="********"
                                          required/>
                        </div>
                        <x-form-error :name="'password_confirmation'"/>
                    </x-form-field>
                </div>
            </div>
        </div>

        <!-- submit button -->
        <div class="mt-8 flex justify-end">
            <x-form-button>
                Register
            </x-form-button>
        </div>
    </form>

</x-layout>
