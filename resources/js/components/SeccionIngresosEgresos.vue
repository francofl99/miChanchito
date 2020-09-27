<template>
  <div class="h-48 container-info-cartera">
    <Informacion />
    <ActualizarIngresosEgresos />
  </div>
</template>

<script>
import Informacion from "./Informacion";
import ActualizarIngresosEgresos from "./ActualizarIngresosEgresos";

export default {
  name: "SeccionIngresosEgresos",

  components: {
    Informacion,
    ActualizarIngresosEgresos
  }

};
</script>

<style>
.container-info-cartera {
  width: 32rem;
}
</style>
