<?php 
$all_plats_statment = $connect->prepare("SELECT plat_id, plat_title, ingredients, plat_type, plat_picture FROM plat");
$all_plats_statment->execute();
$all_plats_statment->bind_result($plat_id, $plat_title, $ingredients, $plat_type, $plat_picture);
?>

<div id="plats-list" class="hidden w-4/5 overflow-auto flex-grow max-md:w-full">
    <div class="flex p-6 justify-between pr-20">
        <p class="text-xl">Plats</p>
        <a href="./add-plat-form.php" class="flex items-center gap-1 hover:bg-gray-100 px-4 rounded-md cursor-pointer">
            <span>Add New Plat</span>
            <img src="../assets/images/icons/add-icons.svg" class="size-5" alt="">
        </a>
    </div>
    <div class="h-[70vh] overflow-auto">
        <table
            class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead
                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3">Plat ID</th>
                    <th class="px-6 py-3">title</th>
                    <th class="px-6 py-3">type</th>
                    <th class="px-6 py-3">Ingrediants</th>
                    <th class="px-6 py-3">Price</th>
                    <th class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    while($all_plats_statment->fetch()){
                        echo "<tr
                            class='odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700'>
                            <th
                                class='px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white'>
                                $plat_id
                            </th>
                            <td class='px-6 py-2'>$plat_title</td>
                            <td class='px-6 py-2'>$plat_type</td>
                            <td class='px-6 py-2'>$ingredients</td>
                            <td class='px-6 py-2'>99.99$</td>
                            <td class='px-6 py-2 flex gap-2'>
                                <a
                                    href='#'
                                    class='font-medium text-red-600 dark:text-red-500 hover:underline'>Delete
                                </a>
                                <a
                                    href='#'
                                    class='font-medium text-blue-600 dark:text-blue-500 hover:underline'>Update
                                </a>
                            </td>
                        </tr>";
                    }
                    // echo "<p class='text-red-500 bg-red-50 p-1'>No plats is available</p>";
                ?>
            </tbody>
        </table>
    </div>
</div>