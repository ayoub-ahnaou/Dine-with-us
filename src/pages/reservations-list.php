<?php 
$all_reservations = $connect->prepare("SELECT r.reservation_id, r.user_id, user.username, reservation_date, user.phone, user.email, status
FROM reservation_menu AS rm, menu AS m, reservation AS r, user
WHERE rm.reservation_id = r.reservation_id AND rm.menu_id = m.menu_id AND user.user_id = r.user_id");

$all_reservations->execute();
$all_reservations->bind_result($reservation_id, $user_id, $username, $reservation_date, $phone, $email, $status);
?>

<div id="reservations-list" class="hidden w-4/5 overflow-auto flex-grow max-md:w-full">
    <div class="flex p-6">
        <p class="text-xl">Reservations</p>
    </div>
    <table
        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead
            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-3">Reservation ID</th>
                <th class="px-6 py-3">Username</th>
                <th class="px-6 py-3">Date</th>
                <th class="px-6 py-3">Phone</th>
                <th class="px-6 py-3">Email</th>
                <th class="px-6 py-3">Status</th>
                <th class="px-6 py-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            while($all_reservations->fetch()){
                echo "<tr
                class='odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700'>
                <th
                    class='px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white'>
                    $reservation_id
                </th>
                <td class='px-6 py-2'>$username</td>
                <td class='px-6 py-2'>$reservation_date</td>
                <td class='px-6 py-2'>$phone</td>
                <td class='px-6 py-2'>$email</td>
                <td class='px-6 py-2'>$status</td>
                <td class='px-6 py-2 flex gap-2'>
                    <a
                        href='#'
                        class='font-medium text-red-600 dark:text-red-500 hover:underline'>Delete
                    </a>
                    <a
                        href='./process/mark-res-done.php?reservation_id=$reservation_id&user_id=$user_id'
                        class='font-medium text-green-600 dark:text-green-500 hover:underline'>Marke as Done
                    </a>
                </td>
            </tr>";
            }
            ?>
        </tbody>
    </table>
</div>