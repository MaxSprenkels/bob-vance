<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bob Vance</title>
</head>

<body class="bg-gray-300">
    <?php
    session_start();
    include 'navbar.html';
    include 'dbcon.php';
    ?>
    <div tabindex="0" class="focus:outline-none">
        <div class="mx-auto container py-8">
            <div class="flex flex-wrap items-center lg:justify-between justify-center">
                <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                    <div>
                        <img alt="koelkast" src="https://www.expert.nl/media/frontend/catalog/products/372582717/630x630/372582717-6730760.jpg" tabindex="0" class="focus:outline-none w-full h-44" />
                    </div>
                    <div class="bg-white">
                        <div class="flex items-center justify-between px-4 pt-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                </svg>
                            </div>
                            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center">
                                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">Samsung</h2>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">Yesterday</p>
                            </div>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">De Samsung koelkast is er voor maar 499,99 euro en komt in de kleur grijs, De koelkast is 185,3cm hoog en 59,9cm breed. De koelkast maakt gebruik van energieklasse C</p>
                            <div class="flex mt-4">
                                <div>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                    <div>
                        <img alt="koelkast" src="https://www.smeg.com/binaries/content/gallery/smeg-netherlands/fq60.png/fq60.png/brx%3AsquareMobile" tabindex="0" class="focus:outline-none w-full h-44" />
                    </div>
                    <div class="bg-white">
                        <div class="flex items-center justify-between px-4 pt-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                </svg>
                            </div>
                            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center">
                                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">Amerikaanse zwarte koelkast</h2>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">2 days ago</p>
                            </div>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe aliquam voluptas est itaque natus placeat.</p>
                            <div class="flex mt-4">
                                <div>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                    <div>
                        <img alt="koelkast" src="https://www.smeg.com/binaries/content/gallery/smeg/categories/fab50rrdeu_doubledoor.jpg/fab50rrdeu_doubledoor.jpg/brx%3AsquareMobile" tabindex="0" class="focus:outline-none w-full h-44" />
                    </div>
                    <div class="bg-white">
                        <div class="flex items-center justify-between px-4 pt-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                </svg>
                            </div>
                            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center">
                                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">Rode koelkast</h2>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
                            </div>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. A quasi illum mollitia velit.</p>
                            <div class="flex mt-4">
                                <div>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                    <div>
                        <img alt="koelkast" src="https://www.smeg.com/binaries/content/gallery/smeg/categories/orange_fridge_smeg.jpg/orange_fridge_smeg.jpg/brx%3AsquareMobile" tabindex="0" class="focus:outline-none w-full h-44" />
                    </div>
                    <div class="bg-white">
                        <div class="flex items-center justify-between px-4 pt-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                </svg>
                            </div>
                            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center">
                                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">Oranje koelkast</h2>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">3 days ago</p>
                            </div>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore accusantium magni porro laboriosam.</p>
                            <div class="flex mt-4">
                                <div>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="flex flex-wrap items-center lg:justify-between justify-center pb-10 mt-16">
                <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                    <div>
                        <img alt="girl texting" src="https://alleenwitgoed.nl/wp-content/uploads/2022/03/PI_637526957104368238_zoom.jpg" class="focus:outline-none w-full h-44" />
                    </div>
                    <div class="bg-white">
                        <div class="flex items-center justify-between px-4 pt-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                </svg>
                            </div>
                            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center">
                                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">Amerikaanse koelkast</h2>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 hours ago</p>
                            </div>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur ratione quod ut repellat delectus inventore nobis.</p>
                            <div class="flex mt-4">
                                <div>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                    <div>
                        <img alt="girl texting" src="https://cdn.create-store.com/nl/1015371-product_380x380/retro-koelkast-150.jpg" class="focus:outline-none w-full h-44" />
                    </div>
                    <div class="bg-white">
                        <div class="flex items-center justify-between px-4 pt-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                </svg>
                            </div>
                            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center">
                                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">Zwarte koelkast</h2>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
                            </div>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="flex mt-4">
                                <div>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                    <div>
                        <img alt="girl texting" src="https://cdn.webshopapp.com/shops/39758/files/118590443/900x900x2/polar-mini-koelkast-met-slot-30l-staal-best-verkoc.jpg" class="focus:outline-none w-full h-44" />
                    </div>
                    <div class="bg-white">
                        <div class="flex items-center justify-between px-4 pt-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                </svg>
                            </div>
                            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center">
                                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">Zwarte mini koelkast</h2>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
                            </div>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum animi sint, ea eos reiciendis optio harum illum labore quibusdam?</p>
                            <div class="flex mt-4">
                                <div>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                    <div>
                        <img alt="girl texting" src="http://sc04.alicdn.com/kf/H86b186c70ccd466bbf469341e03d138dw.jpg" class="focus:outline-none w-full h-44" />
                    </div>
                    <div class="bg-white">
                        <div class="flex items-center justify-between px-4 pt-4">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                </svg>
                            </div>
                            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center">
                                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">Red Bull mini koelkast</h2>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">4 days ago</p>
                            </div>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad fuga corrupti quis quasi totam unde id corporis aut.</p>
                            <div class="flex mt-4">
                                <div>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="add-fridge.php" method="$_POST">
        <input type="submit" value="Add Fridge">
    </form>
    <?php
    try {
        $conn = new PDO($dsn, $username, $password);
        $sql = "SELECT * FROM koelkast";
        $koelkast = $conn->query($sql);
        foreach ($koelkast as $koelkast) {
            echo "<tr><td>" . $koelkast["Naam"] . "</td><td>" . $koelkast["Prijs"] . "</td><td>" . $koelkast["Kleur"] . "</td><td>" . $koelkast["Hoogte"] . "</td><td>" . $koelkast["Breedte"] . "</td><td>" . $koelkast["Energieklasse"] . "</td><td> <a href='add-fridge.php?id=" . $koelkast["id"] . "'>Toevoegen</td> </tr>";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>
</body>

</html>