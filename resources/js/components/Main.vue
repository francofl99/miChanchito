<template>
  <div class=" bg-gray-400 main-style flex flex-wrap p-8 justify-between">
    <SeccionIngresosEgresos />
    <InformacionMaximoMinimoGasto />
    <Graficos />
  </div>
</template>

<script>
import SeccionIngresosEgresos from "./SeccionIngresosEgresos";
import Graficos from "./Graficos";
import InformacionMaximoMinimoGasto from "./InformacionMaximoMinimoGasto";


export default {
  name: "Main",

  components: {
    SeccionIngresosEgresos,
    InformacionMaximoMinimoGasto,
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
