<template>
  <div
    class="bg-gray-700 w-12 py-64 flex flex-wrap items-center justify-center"
    style="height: calc(100vh - 3rem)"
  >
    <div class="w-10 h-10 bg-red-300 hover:bg-red-400 transition duration-150 rounded-md mx-auto cursor-pointer flex justify-center ">
      <VueHicons
        name="home"
        width-icon="8"
      />
    </div>
  </div>
</template>

<script>
import VueHicons from "vue-hicons";

export default {
  name: "SideBar",

  components: {
    VueHicons
  }

};
</script>

<style>

</style>
