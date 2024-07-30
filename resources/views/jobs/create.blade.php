<x-layout>
    <x-slot:heading>Create a Job</x-slot:heading>

    <form method="post" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">We'll just need a bit of information from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Job Title</x-form-label>
                        <div class="mt-2 mb-2">
                            <x-form-input name="title" id="title" placeholder="Laravel Developer" required/>
                        </div>
                        <x-form-error :name="'title'"/>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="$60.000 per year" required/>
                        </div>
                        <x-form-error :name="'salary'"/>
                    </x-form-field>

                    <div class="col-span-full">
                        <x-form-label for="description">About</x-form-label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="3" required
                                      class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about the job.</p>
                    </div>
                    <x-form-error :name="'description'"/>
                </div>
            </div>
        </div>
        
        <!-- submit button -->
        <div class="mt-8 flex justify-end">
            <x-form-button>
                Create Job
            </x-form-button>
        </div>
    </form>

</x-layout>
