<template>
  <div class="h-screen width-of-main flex flex-wrap p-6">
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
.width-of-main {
  width: calc(100vw - 5rem);
}
</style>
