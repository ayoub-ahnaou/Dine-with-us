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

        <?php
        $title = $type = $ingradiants = $picture = "";
        $query_err = $title_err = $type_err = $ingradiants_err = $picture_err = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $title = $_POST["plat_title"];
            $type = $_POST["plat_type"];
            $ingradiants = $_POST["ingrediants"];
            $picture = $_POST["plat_picture"];

            if(empty($title)) $title_err = "Plat title is required";
            if(empty($type)) $type_err = "Plat type is required";
            if(empty($ingradiants)) $ingradiants_err = "Plat ingradiants is required";
            if(empty($picture)) $picture_err = "Plat picture is required";

            if(!empty($title) && !empty($type) && !empty($ingradiants) && !empty($picture)){
                $insert_plat_statment = $connect->prepare("INSERT INTO plat (plat_title, ingredients, plat_type, plat_picture) VALUES (?, ?, ?, ?)");
                $insert_plat_statment->bind_param("ssss", $title, $ingradiants, $type, $picture);

                if($insert_plat_statment->execute()){
                    header("location: dashboard.php");
                }
                else {
                    $error_query = "Something Went Wrong While Inserting, Try Again Later";
                }
            }
        }
        ?>

        <div class="bg-black h-6"></div>
        <div class="flex justify-center items-center flex-grow flex-col gap-4 px-20 max-md:px-6 max-sm:px-2 py-4 bg-white">
            <form method="post" class="max-w-lg mx-auto bg-white shadow-md h-auto p-2 rounded-md w-1/2 text-sm">
                <p class="text-xl pb-4">Plat Informations</p>
                <div id="plats_container" class="flex flex-col gap-2 text-sm">
                    <div class="flex flex-col relative">
                        <label name="query_err" class="text-red-500 bg-red-50"></label>
                        <div class="flex flex-col">
                            <label for="plat_title" class="text-gray-500">Plat Title</label>
                            <input value="<?php echo $title; ?>" type="text" name="plat_title" id="plat_title" placeholder="e.g: Entrée, Principale, Dessert..." class="bg-gray-100 rounded-sm p-1">
                            <label name="title_err" class="text-red-500"><?php echo $title_err; ?></label>
                        </div>
                        <div class="flex flex-col">
                            <label for="plat_type" class="text-gray-500">Plat Type</label>
                            <input value="<?php echo $type ; ?>" type="text" name="plat_type" id="plat-_type" placeholder="e.g: Entrée, Principale, Dessert..." class="bg-gray-100 rounded-sm p-1">
                            <label name="plat_type_err" class="text-red-500"><?php echo $type_err; ?></label>
                        </div>
                        <div class="flex flex-col">
                            <label for="ingrediants" class="text-gray-500">Ingrediants</label>
                            <input value="<?php echo $ingradiants; ?>" type="text" name="ingrediants" id="ingrediants" placeholder="Enter the ingradiants of your plat" class="bg-gray-100 rounded-sm p-1">
                            <label name="ingradiants_err" class="text-red-500"><?php echo $ingradiants_err; ?></label>
                        </div>
                        <div class="flex flex-col">
                            <label class="text-gray-500" for="plat_picture">Plat Picture</label>
                            <input value="<?php echo $picture; ?>" class="text-gray-900 cursor-pointer bg-gray-100" name="plat_picture" id="plat_picture" type="file">
                            <label name="picture_err" class="text-red-500"><?php echo $picture_err; ?></label>
                        </div>
                    </div>
                </div>

                <div class="flex gap-1 mt-4 justify-end">
                    <input type="submit" class="bg-black px-6 py-1 text-white rounded-md" value="Create Plat" name="" id="">
                </div>
            </form>
        </div>

        <footer class="bg-gray-100 p-8 text-sm flex items-center justify-center">
            <p class="text-center">CopyRight 2024 @ All Right Reserved</p>
        </footer>
    </div>
</body>

</html>