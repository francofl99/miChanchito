<template>
  <div class="flex h-48 flex-wrap container-info-cartera pt-8 pl-4 w-full">
    <div class="flex justify-between w-full">
      <InformacionSaldo />
      <InformacionIngresoEgreso />
    </div>
    <ActualizarIngresosEgresos />
  </div>
</template>

<script>
import InformacionSaldo from "./InformacionSaldo";
import InformacionIngresoEgreso from "./InformacionIngresoEgreso";
import ActualizarIngresosEgresos from "./ActualizarIngresosEgresos";

export default {
  name: "SeccionIngresosEgresos",

  components: {
    InformacionSaldo,
    InformacionIngresoEgreso,
    ActualizarIngresosEgresos
  }

};
</script>

<style>

</style>
