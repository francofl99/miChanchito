<template>
  <div class="flex w-screen h-screen bg-gray-400 items-center justify-center flex-col">
    <h1 class="text-4xl text-gray-700 font-semibold">
      404
    </h1>
    <div class="flex flex-wrap space-y-4">
      <h5 class="text-2xl text-gray-700 font-semibold w-full text-center">
        Pagina no encontrada
      </h5>
      <button
        class="w-11/12 mx-auto rounded-full bg-gray-700 hover:bg-gray-800 transition duration-150 cursor-pointer text-center p-4 text-gray-400 font-bold text-xl"
        @click="volverAInicio"
      >
        Volver a nicio
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: "PageNotFound",

  methods: {
    volverAInicio() {
      this.$router.push("/home");
    }
  }

};
</script>

<style>

</style>
