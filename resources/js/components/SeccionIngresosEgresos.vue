<template>
  <div class="h-48 container-info-cartera">
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
