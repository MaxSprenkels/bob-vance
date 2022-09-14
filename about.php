<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>About</title>
</head>
<body>
<?php include 'navbar.html'; ?>
    <!-- component -->
<div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 h-screen">
      <div class="max-h-96 md:h-screen">
        <img class="w-screen h-screen object-cover object-top" src="img/koelkast.jpg" alt="">
      </div>
      <div class="flex bg-gray-300 p-10">
        <div class="mb-auto mt-auto max-w-lg">
          <h1 class="text-3xl uppercase">Bob Vance</h1>
          <p class="font-semibold mb-5">Koelkast verkoper</p>
          <p>Bob Vance verkoopt koelkasten en heeft al meer dan 10 jaar ervaring met het verkopen van koelkasten in California, Los Angeles.<br><br>
          Zijn bedrijf heeft verschillende diensten: Het verkopen van gebruikte koelkasten, Verzekeren van nieuwe koelkasten en reperaties.
            </p>
          <button class="bg-black rounded-md py-3 px-7 mt-6 text-white">Email Me</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>