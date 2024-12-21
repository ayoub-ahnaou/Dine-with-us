<?php
include "../config/connection.php";
$error_query = "";
// inputs values
$title = "";
$description = "";
$picture = "";
// labels of errors messages
$title_err = "";
$description_err = "";
$picture_err = "";

// select options

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["menu_title"];
    $description = $_POST["menu_description"];
    $picture = $_POST["menu_picture"];

    if (empty($title)) $title_err = "Menu title is required";
    if (empty($description)) $description_err = "Menu description is required";
    if (empty($picture)) $picture_err = "Menu picture is required";
    if (empty($_POST["plats"])) $error_query = "No Plats is Selected..";

    if(!empty($title && !empty($description && !empty($picture) && !empty($_POST["plats"])))){
        $insert_menu_statment = $connect->prepare("INSERT INTO menu (menu_title, menu_description, menu_picture) VALUES (?, ?, ?)");
        $insert_menu_statment->bind_param("sss", $title, $description, $picture);
        if($insert_menu_statment->execute()){
            $insert_menu_statment->close();
    
            $menu_last_inserted = $connect->prepare("SELECT menu_id FROM menu ORDER BY menu_id DESC LIMIT 1");
            $menu_last_inserted->execute();
            $menu_last_inserted->bind_result($last_menu_id);
            $menu_last_inserted->fetch();
            $menu_last_inserted->close();
    
            foreach($_POST["plats"] as $plat){
                $plat_id = $plat["plat_id"];
                $update_menu_plats_statment = $connect->prepare("UPDATE plat SET menu_id = ? WHERE plat_id = ?");
                $update_menu_plats_statment->bind_param("ii", $last_menu_id, $plat_id);
                if($update_menu_plats_statment->execute()){
                    $update_menu_plats_statment->close();
                    header("location: ./dashboard.php");
                }
                else{
                    echo "<p class='text-red-600 bg-red-100 p-1'>Error while inserting plats's data...</p>";
                    exit;
                }
            }
        }
        else {
            echo "<p class='text-red-600 bg-red-100 p-1'>Something went wrong while inserting menu's data...</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le CHEF - Menu</title>
    <link rel="stylesheet" href="../assets/css/input.css?v=2">
    <link rel="stylesheet" href="../assets/css/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-[Oswald]">
    <div class="min-h-[100vh] flex flex-col">
        <?php include "../assets/components/navigation.php"; ?>

        <div class="bg-black h-6"></div>
        <div class="flex flex-grow flex-col gap-4 px-20 max-md:px-6 max-sm:px-2 py-4 bg-white">
            <form method="post" class="max-w-lg mx-auto bg-white shadow-md h-auto p-2 rounded-md w-1/2 text-sm">
                <p class="text-xl">Menu Informations</p>
                <hr class="pb-4">
                <label name="error_query" class="bg-red-50 text-red-500 w-full flex mb-2"><?php echo $error_query; ?></label>
                <div class="flex flex-col">
                    <label for="menu_title" class="text-gray-500">Menu Title</label>
                    <input value="<?php echo $title; ?>" type="text" name="menu_title" id="menu_title" placeholder="Enter The Title of Your Menu" class="bg-gray-100 rounded-sm p-1">
                    <label name="title_err" class="text-red-600"><?php echo $title_err; ?></label>
                </div>
                <div class="flex flex-col">
                    <label for="menu_description" class="text-gray-500">Menu Description</label>
                    <input value="<?php echo $description; ?>" type="text" name="menu_description" id="menu_description" placeholder="Enter The Description of Your Menu" class="bg-gray-100 rounded-sm p-1">
                    <label name="description_err" class="text-red-600"><?php echo $description_err; ?></label>
                </div>
                <div class="flex flex-col">
                    <label class="text-gray-500" for="menu_picture">Menu Picture</label>
                    <input value="<?php echo $picture; ?>" name="menu_picture" class="text-gray-900 cursor-pointer bg-gray-100" id="menu_picture" type="file">
                    <label name="picture_err" class="text-red-600"><?php echo $picture_err; ?></label>
                </div>
                <hr class="my-4">
                <?php
                $all_plats_statment = $connect->prepare("SELECT plat_id, plat_title FROM plat");
                $all_plats_statment->execute();
                $all_plats_statment->bind_result($plat_id, $plat_title);
                ?>
                <p class="text-lg">Plat Informations</p>
                <hr class="pb-4">
                <div id="plats_container" class="flex flex-col gap-2">
                </div>

                <div class="flex gap-1 mt-4 justify-end">
                    <input type="button" class="bg-gray-200 px-6 py-1 rounded-md" value="Add a Plat" id="add_plat_btn">
                    <input type="submit" class="bg-black px-6 py-1 text-white rounded-md" value="Create Menu" name="" id="">
                </div>

            </form>
        </div>

        <footer class="bg-gray-100 p-8 text-sm flex items-center justify-center">
            <p class="text-center">CopyRight 2024 @ All Right Reserved</p>
        </footer>
    </div>
</body>

</html>

<script>
    let counter = 0;
    document.getElementById("add_plat_btn").onclick = () => {
        counter++;
        const plat_area = `
            <div class="border p-1 rounded-md flex flex-col relative">
                <div class="flex flex-col">
                    <label for="plat_value" class="text-gray-500">Plat Type</label>
                    <select name="plats[${counter}][plat_id]" class="bg-gray-100 rounded-sm p-1" name="plat_value" id="plat_value">
                        <?php
                        while ($all_plats_statment->fetch()) {
                            echo "<option  value='$plat_id'>$plat_title</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
        `;
        document.getElementById("plats_container").innerHTML += plat_area;
    }

    function removePlatArea(plat) {
        plat.parentElement.remove();
    }
</script>