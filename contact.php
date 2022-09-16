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
    include 'navbar.html';
    ?>
    <div class="w-full md:w-96 md:max-w-full mx-auto">
  <div class="p-6 border border-gray-300 sm:rounded-md">
    <form method="POST" action="">
      <label class="block mb-6">
        <span class="text-gray-700">Je naam</span>
        <input
          type="text"
          name="name"
          class="
            block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
          "
          required
        />
      </label>
      <label class="block mb-6">
        <span class="text-gray-700">Email adres</span>
        <input
          name="email"
          type="email"
          class="
            block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
          "
          required
        />
      </label>
      <label class="block mb-6">
        <span class="text-gray-700">Message</span>
        <textarea
          name="message"
          class="
            block
            w-full
            mt-1
            border-gray-300
            rounded-md
            shadow-sm
            focus:border-indigo-300
            focus:ring
            focus:ring-indigo-200
            focus:ring-opacity-50
          "
          rows="3"
          required
        ></textarea>
      </label>
      <div class="mb-6">
        <button
          type="submit"
          class="
            h-10
            px-5
            text-indigo-100
            bg-indigo-700
            rounded-lg
            transition-colors
            duration-150
            focus:shadow-outline
            hover:bg-indigo-800
          "
        >
          Contact Us
        </button>
      </div>
    </form>
  </div>
</div>

</body>
</html>