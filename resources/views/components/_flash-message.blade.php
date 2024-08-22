@if (session()->has('success'))
  <script>
    $(() => {
      setTimeout(() => {

        $("#flash-message").slideDown("slow");

        setTimeout(() => {
          $("#flash-message").slideUp("slow");
        }, 3500);

      }, 500);
    });
  </script>
  <div class="fixed w-full top-5 flex justify-center" style="display: none;" id="flash-message">
    <p class="w-10/12 text-center px-4 py-2 text-lg text-black bg-green-300 rounded-xl">
      {{ session("success") }}
    </p>
  </div>
@endif

@if (session()->has('failure'))
  <script>
    $(() => {
      setTimeout(() => {

        $("#flash-message").slideDown("slow");

        setTimeout(() => {
          $("#flash-message").slideUp("slow");
        }, 3500);

      }, 500);
    });
  </script>
  <div class="fixed w-full top-5 flex justify-center" style="display: none;" id="flash-message">
    <p class="w-10/12 text-center px-4 py-2 text-lg text-black bg-red-300 rounded-xl">
      {{ session("failure") }}
    </p>
  </div>
@endif
