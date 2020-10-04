<template>
  <div class="rounded-md p-2 h-64 container-info-cartera bg-gray-300">
    <InformacionIngresosEgresos />
    <ActualizarIngresosEgresos />
  </div>
</template>

<script>
import InformacionIngresosEgresos from "./InformacionIngresosEgresos";
import ActualizarIngresosEgresos from "./ActualizarIngresosEgresos";

export default {
  name: "SeccionIngresosEgresos",

  components: {
    InformacionIngresosEgresos,
    ActualizarIngresosEgresos
  }

};
</script>

<style>
.container-info-cartera {
  width: 32rem;
}
</style>
