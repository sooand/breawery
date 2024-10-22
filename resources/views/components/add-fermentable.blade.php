<div>
    <h4 class="text-center font-bold w-full grow mb-2">Name of fermentable</h4>
    <input type="text" name="name" class="w-full grow px-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 mb-4" required>

    <div class="grid grid-cols-2 gap-4">
        <div class="flex w-full flex-col col-span-1">
            <h4 class="text-center font-bold grow">Moisture (%)</h4>
            <input type="text" name="moisture" class="col-span-1 row-span-1 px-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex w-full flex-col col-span-1">
            <h4 class="text-center font-bold grow">Diastatic Power (DP linter)</h4>
            <input type="text" name="diastatic_power" class="col-span-1 row-span-1 px-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex w-full flex-col">
            <h4 class="text-center font-bold grow">Protein (%)</h4>
            <input type="text" name="protein" class="col-span-1 row-span-1 px-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex w-full flex-col">
            <h4 class="text-center font-bold grow">Yield/Extract (%)</h4>
            <input type="text" name="yield_extract" class="col-span-1 row-span-1 px-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex w-full flex-col">
            <h4 class="text-center font-bold grow">Wort Color (EBC)</h4>
            <input type="text" name="wort_color" class="col-span-1 row-span-1 px-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
    </div>
    <form>
        <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600 mt-4">
            <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800 ">
                <label for="comment" class="sr-only">Your comment</label>
                <textarea id="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400 " placeholder="Write a description..."></textarea>
            </div>
        </div>
    </form>

</div>