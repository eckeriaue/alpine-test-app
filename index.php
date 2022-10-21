<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://unpkg.com/alpinejs" defer></script>
  <script src="./js/index.js" defer></script>
</head>
<body>

  <?php require "src/include/components.php"; ?>

  <div x-data="{open: false}">
    <button x-on:click="open = !open" >click</button>
    <div x-show="open" x-transition> test text </div>
  </div>

  <test-message> test text3 </test-message>
  <test-message></test-message>
  <test-message></test-message>
  <test-message></test-message>


</body>
</html>