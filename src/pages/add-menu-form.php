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
            <form class="max-w-lg mx-auto bg-white shadow-md h-auto p-2 rounded-md w-1/2 text-sm">
                <p class="text-xl pb-4">Menu Informations</p>
                <div class="flex flex-col">
                    <label for="menu-title" class="text-gray-500">Menu Title</label>
                    <input type="text" name="menu-title" id="menu-title" placeholder="Enter The Title of Your Menu" class="bg-gray-100 rounded-sm p-1">
                </div>
                <div class="flex flex-col">
                    <label for="menu-description" class="text-gray-500">Menu Description</label>
                    <input type="text" name="menu-description" id="menu-description" placeholder="Enter The Description of Your Menu" class="bg-gray-100 rounded-sm p-1">
                </div> 
                <div class="flex flex-col">
                    <label class="text-gray-500" for="plat_picture">Menu Picture</label>
                    <input class="text-gray-900 cursor-pointer bg-gray-100" id="plat_picture" type="file">
                </div>
                <hr class="my-4">
                <p class="text-lg pb-4">Plat Informations</p>
                <div id="plats_container" class="flex flex-col gap-2">
                    <div class="border p-1 rounded-md flex flex-col relative">
                        <div class="flex flex-col">
                            <label for="plat-type" class="text-gray-500">Plat Type</label>
                            <input type="text" name="plat-type" id="plat-type" placeholder="e.g: Entrée, Principale, Dessert..." class="bg-gray-100 rounded-sm p-1">
                        </div>
                        <div class="flex flex-col">
                            <label for="ingrediants" class="text-gray-500">Ingrediants</label>
                            <input type="text" name="ingrediants" id="ingrediants" placeholder="Enter the ingradiants of your plat" class="bg-gray-100 rounded-sm p-1">
                        </div>
                        <div class="flex flex-col">
                            <label class="text-gray-500" for="plat_picture">Plat Picture</label>
                            <input class="text-gray-900 cursor-pointer bg-gray-100" id="plat_picture" type="file">
                        </div>
                    </div>
                </div>

                <div class="flex gap-1 mt-4 justify-end">
                    <input type="button" class="bg-gray-200 px-6 py-1 rounded-md" value="Add Another Plat" id="add_plat_btn">
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
    document.getElementById("add_plat_btn").onclick = () => {
        document.getElementById("plats_container").innerHTML += `
            <div class="border p-1 rounded-md flex flex-col relative">
                <img src="../assets/images/icons/trash.svg" class="size-5 absolute top-0 right-1 cursor-pointer" alt="">
                <div class="flex flex-col">
                    <label for="plat-type" class="text-gray-500">Plat Type</label>
                    <input type="text" name="plat-type" id="plat-type" placeholder="e.g: Entrée, Principale, Dessert..." class="bg-gray-100 rounded-sm p-1">
                </div>
                <div class="flex flex-col">
                    <label for="ingrediants" class="text-gray-500">Ingrediants</label>
                    <input type="text" name="ingrediants" id="ingrediants" placeholder="Enter the ingradiants of your plat" class="bg-gray-100 rounded-sm p-1">
                </div>
                <div class="flex flex-col">
                    <label class="text-gray-500" for="plat_picture">Plat Picture</label>
                    <input class="text-gray-900 cursor-pointer bg-gray-100" id="plat_picture" type="file">
                </div>
            </div>
        `;
    }
</script>