<?php
$all_users = $connect->prepare("SELECT user_id, username, phone, email, user.role_id, role_name FROM user, role WHERE user.role_id = role.role_id");
$all_users->execute();
$all_users->bind_result($user_id, $username, $phone, $email, $role_id, $role_name);
?>

<div id="users-list" class="hidden w-4/5 overflow-auto flex-grow max-md:w-full">
    <div class="flex p-6">
        <p class="text-xl">Users</p>
    </div>
    <table
        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead
            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-3">User ID</th>
                <th class="px-6 py-3">Username</th>
                <th class="px-6 py-3">Phone</th>
                <th class="px-6 py-3">Email</th>
                <th class="px-6 py-3">Role</th>
                <th class="px-6 py-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($all_users->fetch()) {
                echo "<tr
                    class='odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700'>
                    <th
                        class='px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white'>
                        $user_id
                    </th>
                    <td class='px-6 py-2'>$username</td>
                    <td class='px-6 py-2'>$phone</td>
                    <td class='px-6 py-2'>$email</td>
                    <td class='px-6 py-2'>$role_name</td>
                    <td class='px-6 py-2 flex gap-2'>
                        <a
                            href='#'
                            class='font-medium text-red-600 dark:text-red-500 hover:underline'>Delete</a>
                    </td>
                </tr>";
            }
            $all_users->close();
            ?>
        </tbody>
    </table>
</div>