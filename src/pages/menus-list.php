<div id="menus-list" class="hidden w-4/5 overflow-auto flex-grow max-md:w-full">
    <div class="flex p-6 justify-between pr-20">
        <p class="text-xl">Menus</p>
        <a href="./add-menu-form.php" class="flex items-center gap-1 hover:bg-gray-100 px-4 rounded-md cursor-pointer">
            <span>Add New Menu</span>
            <img src="../assets/images/icons/add-icons.svg" class="size-5" alt="">
        </a>
    </div>
    <div class="h-[70vh] overflow-auto">
        <table
            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">Menu ID</th>
                    <th class="px-6 py-3">title</th>
                    <th class="px-6 py-3">Description</th>
                    <th class="px-6 py-3">plats count</th>
                    <th class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th
                        class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        1
                    </th>
                    <td class="px-6 py-2">Menu #434</td>
                    <td class="px-6 py-2">Lorem ipsum dolor sit amet consectetur adipisicing eli...</td>
                    <td class="px-6 py-2">4</td>
                    <td class="px-6 py-2 flex gap-2">
                        <a
                            href="#"
                            class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete
                        </a>
                        <a
                            href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Update
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>