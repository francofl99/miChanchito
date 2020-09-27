<template>
  <div class="h-screen width-of-main flex flex-wrap">
    <SeccionIngresosEgresos />
    <GraficoIngresosEgresos />
  </div>
</template>

<script>
import SeccionIngresosEgresos from "./SeccionIngresosEgresos";
import GraficoIngresosEgresos from "./GraficoIngresosEgresos";

export default {
  name: "Main",

  components: {
    SeccionIngresosEgresos,
    GraficoIngresosEgresos
  }
};
</script>

<style scoped>
.width-of-main {
  width: calc(100vw - 5rem);
}

.container-info-cartera {
  width: 32rem;
}
</style>
