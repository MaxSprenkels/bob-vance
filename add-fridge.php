<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
     <link href="style.css" rel="stylesheet">
    <title>Add fridge</title>
</head>
<body>
    <?php
    include 'dbcon.php';
    include 'navbar.html'
    ?>
    <!-- component -->
<style>
  .login_img_section {
  background: linear-gradient(rgba(2,2,2,.7),rgba(0,0,0,.7)),url(https://images0.persgroep.net/rcs/uZc0I5oZ15AJu7JLIg6FjpnrQHs/diocontent/165711715/_fitwidth/694/?appId=21791a8992982cd8da851550a453bd7f&quality=0.8) no-repeat;
}
</style>
<div class="h-screen flex">
          <div class="hidden lg:flex w-full lg:w-1/2 login_img_section
          justify-around items-center">
            <div
                  class="
                  bg-black
                  opacity-20
                  inset-0
                  z-0"
                  >

                  </div>
            <div class="w-full mx-auto px-20 flex-col items-center space-y-6">
              <h1 class="text-white font-bold text-4xl font-sans">Voeg hier een koelkast toe</h1>
            </div>
          </div>
          <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
            <div class="w-full px-8 md:px-32 lg:px-24">
            <form class="bg-white rounded-md shadow-2xl p-5">
              <h1 class="text-gray-800 font-bold text-2xl mb-1">Bij dit formulier kan je je koelkast toevoegen</h1><br>
              <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                <input id="naam" class=" pl-2 w-full outline-none border-none" type="text" name="Naam" placeholder="Naam" />
              </div>
              <div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl ">
                <input class="pl-2 w-full outline-none border-none" type="number" name="Prijs" id="prijs" placeholder="Prijs" />
              </div>
              <div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl ">
                <input class="pl-2 w-full outline-none border-none" type="text" name="Kleur" id="kleur" placeholder="Kleur" />
              </div>
              <div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl ">
                <input class="pl-2 w-full outline-none border-none" type="number" name="Hoogte" id="hoogte" placeholder="Hoogte" />
              </div>
              <div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl ">
                <input class="pl-2 w-full outline-none border-none" type="number" name="Breedte" id="breedte" placeholder="Breedte" />
              </div>
              <div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl ">
                <input class="pl-2 w-full outline-none border-none" type="text" name="Energieklasse" id="energieklasse" placeholder="Energieklasse" />
              </div>
              <button type="submit" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Login</button>
              <div class="flex justify-between mt-4">
                <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Forgot Password ?</span>

                <a href="#" class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Don't have an account yet?</a>
              </div>
            </form>
            </div>
          </div>
      </div>
</body>
</html>