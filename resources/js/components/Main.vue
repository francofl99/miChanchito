<template>
  <div class=" bg-gray-400 main-style flex flex-wrap p-8">
    <SeccionIngresosEgresos />
    <Graficos />
  </div>
</template>

<script>
import SeccionIngresosEgresos from "./SeccionIngresosEgresos";
import Graficos from "./Graficos";


export default {
  name: "Main",

  components: {
    SeccionIngresosEgresos,
    Graficos
  }
};
</script>

<style scoped>
.main-style {
  width: calc(100vw - 3rem);
  height: calc(100vh - 3rem);
}
</style>
