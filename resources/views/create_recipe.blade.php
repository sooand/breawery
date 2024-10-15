
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Recipe') }}
        </h2>
    </x-slot>   
   <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md mt-8">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/create_recipe" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Recipe Name</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div class="mb-4" x-data="{inputs: ['']}">
                <label class="block text-gray-700 font-bold mb-2">Fermentables</label>
                <div id="ingredients" class="mb-2">
                    <div class="flex flex-col items-center mb-2">
                        <template x-for="(input, index) in inputs" :key="index">
                            <div class="flex w-full">
                                <input type="text" x-model="inputs[index]" name="ingredients[]" class="w-full grow mt-4 px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                <template x-if="inputs.length > 1">
                                    <button @click.prevent="inputs.splice(index, 1)" class="text-blue-500 flex-none mx-3">-</button>
                                </template>
                                
                            </div>
                        </template>
                    </div>
                </div>
                <button @click.prevent="inputs.push('')" class="text-blue-500">+</button>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Secondary (hops, spices etc.)</label>
                <div id="instructions" class="mb-2">
                    <div class="flex items-center mb-2">
                        <input type="text" name="instructions[]" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                </div>
                <button type="button" class="text-blue-500" onclick="addInput('instructions')">+</button>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Yeast</label>
                <div id="yeast" class="mb-2">
                    <div class="flex items-center mb-2">
                        <input type="text" name="yeast[]" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                </div>
                <button type="button" class="text-blue-500" onclick="addInput('yeast')">+</button>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Create Recipe</button>
            </div>
        </form>
    </div>
</x-app-layout>
