<template>
  <div class="flex w-full flex-wrap">
    <div class="flex justify-between items-center h-10 w-full bg-pink-300">
      <h3 class="text-pink-900 w-auto ml-4 font-semibold text-lg cursor-pointer">
        Mi Chanchito
      </h3>
      <h3 class="w-auto mr-4 font-base text-base cursor-pointer text-pink-100">
        Inicio
      </h3>
    </div>

    <div
      class="bg-pink-200 w-12 py-64 flex flex-wrap items-center justify-center"
      style="height: calc(100vh - 2.5rem)"
    >
      <div class="w-10 h-10 bg-pink-300 hover:bg-pink-400 transition duration-150 rounded-md mx-auto cursor-pointer" />
    </div>

    <Main />
  </div>
</template>

<script>
import Main from "./Main";

export default {
  components: {
    Main
  }
};
</script>
