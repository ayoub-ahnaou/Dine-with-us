<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le CHEF - Home</title>
    <link rel="stylesheet" href="../assets/css/input.css?v=2">
    <link rel="stylesheet" href="../assets/css/output.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-[Oswald]">
    <div class="min-h-[100vh] flex flex-col">
        <?php include "../assets/components/navigation.php"; ?>
        <?php
        $eight_menus_stm = $connect->prepare("SELECT menu_id, menu_title, menu_description, menu_picture FROM menu LIMIT 8");
        $eight_menus_stm->execute();
        $eight_menus_stm->bind_result($menu_id, $menu_title, $menu_description, $menu_picture);
        ?>

        <div class="flex-grow flex flex-col gap-4">
            <div class="h-[80vh] relative">
                <img src="https://d2d9hom4y5lr0f.cloudfront.net/2023/02/Kadeau-Copenhagen-Kitchen-Chefs-Marie-Louise-Munkegaard-Six-Michelin-Star-Restaurants-in-Copenhagen-Scandinavia-Standard.jpg" class="w-full object-cover h-full" alt="">
                <div class="absolute top-0 bottom-0 w-full flex items-end justify-center">
                    <div class="gap-3 flex justify-center items-center pb-10 flex-col w-full bg-gradient-to-b from-transparent to-black">
                        <p class="text-5xl text-white p-4 max-md:text-2xl text-center">Welcome to Le Chef – Your Destination for Culinary Excellence!</p>
                        <p class="text-white text-2xl w-2/3 max-lg:w-full px-4 text-center max-md:text-lg">
                            At Le Chef, we believe every meal tells a story. Our mission is to bring you a world of flavors, passion, and creativity straight to your table. From exquisite recipes to expert tips, we’re here to inspire your culinary journey and elevate every dining experience.
                        </p>
                        <button class="bg-white p-2 px-4 rounded-full max-md:text-xs">Ready to awaken your inner chef? Let’s cook something extraordinary together!</button>
                    </div>
                </div>
            </div>

            <section class="flex flex-col gap-4 px-20 max-md:px-6 max-sm:px-2 pb-8">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl">Explore Menus</h1>
                    <a href="./menu.php" class="hover:bg-gray-100 px-4 py-1 text-sm">Show more</a>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <?php
                    while ($eight_menus_stm->fetch()) {
                        echo "<a href='./menu-details.php?menu_id=$menu_id' class='flex flex-col gap-1'>
                                <img class='h-auto max-w-full rounded-lg' src='../../src/assets/images/plats/$menu_picture' alt=''>
                                <p class='text-gray-700'>$menu_title</p>
                                <p class='text-gray-500 text-sm'>$menu_description</p>
                            </a>";
                    }
                    ?>
                </div>
            </section>

            <div class="bg-black h-10"></div>

            <div class="contact_us_6">
                <div class="responsive-mycontainer-block mycontainer">
                    <form class="form-box">
                        <div class="mycontainer-block form-wrapper">
                            <div class="mob-text">
                                <p class="text-blk contactus-head">
                                    Get in Touch
                                </p>
                                <p class="text-blk contactus-subhead">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis diam lectus sapien.
                                </p>
                            </div>
                            <div class="responsive-mycontainer-block" id="i2cbk">
                                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i10mt-3">
                                    <p class="text-blk input-title">
                                        FIRST NAME
                                    </p>
                                    <input class="input" id="ijowk-3" name="FirstName" placeholder="Please enter first name...">
                                </div>
                                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ip1yp">
                                    <p class="text-blk input-title">
                                        EMAIL
                                    </p>
                                    <input class="input" id="ipmgh-3" name="Email" placeholder="Please enter email...">
                                </div>
                                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="ih9wi">
                                    <p class="text-blk input-title">
                                        PHONE NUMBER
                                    </p>
                                    <input class="input" id="imgis-3" name="PhoneNumber" placeholder="Please enter phone number...">
                                </div>
                                <div class="responsive-cell-block wk-tab-12 wk-mobile-12 wk-desk-12 wk-ipadp-12" id="i634i-3">
                                    <p class="text-blk input-title">
                                        WHAT DO YOU HAVE IN MIND ?
                                    </p>
                                    <textarea class="textinput" id="i5vyy-3" placeholder="Please enter query..."></textarea>
                                </div>
                            </div>
                            <button class="submit-btn" id="w-c-s-bgc_p-1-dm-id-2">
                                Submit
                            </button>
                        </div>
                    </form>
                    <div class="responsive-cell-block wk-desk-7 wk-ipadp-12 wk-tab-12 wk-mobile-12" id="i772w">
                        <div class="map-part">
                            <p class="text-blk map-contactus-head" id="w-c-s-fc_p-1-dm-id">
                                Reach us at
                            </p>
                            <p class="text-blk map-contactus-subhead">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis diam lectus sapien.
                            </p>
                            <div class="social-media-links mob">
                                <a class="social-icon-link" href="#" id="ix94i-2-2">
                                    <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-twitter.png">
                                </a>
                                <a class="social-icon-link" href="#" id="itixd">
                                    <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-facebook.png">
                                </a>
                                <a class="social-icon-link" href="#" id="izxvt">
                                    <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-google.png">
                                </a>
                                <a class="social-icon-link" href="#" id="izldf-2-2">
                                    <img class="link-img image-block" src="https://workik-widget-assets.s3.amazonaws.com/Footer1-83/v1/images/Icon-instagram.png">
                                </a>
                            </div>
                            <div class="map-box mycontainer-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-gray-100 p-8 text-sm flex items-center justify-center">
            <p class="text-center">CopyRight 2024 @ All Right Reserved</p>
        </footer>
    </div>
</body>

</html>