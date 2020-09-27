<template>
  <div class="flex justify-between w-full">
    <InformacionSaldoActualConFlujoDinero />
    <InformacionMayorIngresoEgreso />
  </div>
</template>

<script>
import InformacionSaldoActualConFlujoDinero from "./InformacionSaldoActualConFlujoDinero";
import InformacionMayorIngresoEgreso from "./InformacionMayorIngresoEgreso";

export default {
  main: "InformacionIngresosEgresos",

  components: {
    InformacionSaldoActualConFlujoDinero,
    InformacionMayorIngresoEgreso
  }

};
</script>

<style>

</style>
