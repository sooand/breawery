<div x-data="{inputs: ['']}">
    <label class="block text-gray-700 font-bold">{{ $slot }}</label>
    <div id="{{ $slot }}" class="mb-2">
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