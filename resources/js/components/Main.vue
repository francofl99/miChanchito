<template>
  <div class="h-screen width-of-main flex flex-wrap">
    <SeccionIngresosEgresos />
    <GraficoDeIngresosEgresos />
  </div>
</template>

<script>
import SeccionIngresosEgresos from "./SeccionIngresosEgresos";
import GraficoDeIngresosEgresos from "./GraficoDeIngresosEgresos";

export default {
  name: "Main",

  components: {
    SeccionIngresosEgresos,
    GraficoDeIngresosEgresos
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
