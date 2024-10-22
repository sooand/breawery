<div x-data="{inputs: ['']}">
    
    <div id="{{ $slot }}" class="mb-2">
        <div class="grid grid-cols-3 gap-4 mb-2">
            <template x-for="(input, index) in inputs" :key="index">
                <div class="col-span-3 grid grid-cols-2 grid-rows-2 gap-4 relative pr-10">
                    <div class="col-span-2 mt-8">
                        <input type="text" class="w-full grow px-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $slot }}"></label>
                    </div>
                    <div class="flex w-full flex-col">
                        <h4 class="text-center font-bold w-full grow mb-2">Ingredient</h4>
                        <input type="text" x-model="inputs[index]" name="ingredients[]" class="col-span-1 row-span-1 px-3border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div class="flex w-full flex-col">
                        <h4 class="text-center font-bold grow">Amount (g)</h4>
                        <input type="text" x-model="inputs[index]" name="amount[]" class="col-span-1 row-span-1 px-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div class="flex w-full flex-col">
                        <h4 class="text-center font-bold grow">Time in</h4>
                        <input type="text" x-model="inputs[index]" name="time[]" class="col-span-1 row-span-1 px-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    <div class="flex w-full flex-col">
                        <h4 class="text-center font-bold grow">Duration</h4>
                        <input type="text" x-model="inputs[index]" name="duration[]" class="col-span-1 row-span-1 px-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                    </div>
                    
                    <template x-if="inputs.length > 1">
                        <button @click.prevent="inputs.splice(index, 1)" class="absolute top-0 right-0 text-blue-500 flex-none mx-3 text-2xl">-</button>
                    </template>
                </div>
            </template>
        </div>
    </div>
    <button @click.prevent="inputs.push('')" class="text-blue-500 text-2xl mb-5">+</button>
</div>
