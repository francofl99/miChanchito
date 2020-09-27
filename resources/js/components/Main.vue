<template>
  <div class="h-screen width-of-main flex">
    <div class="flex h-48 flex-wrap container-info-cartera pt-8 pl-4">
      <div class="flex justify-between w-full">
        <InformacionSaldo />
        <InformacionIngresoEgreso />
      </div>
      <ActualizarIngresosEgresos />
    </div>

    <GraficoDeIngresosEgresos />
  </div>
</template>

<script>
import InformacionSaldo from "./InformacionSaldo";
import InformacionIngresoEgreso from "./InformacionIngresoEgreso";
import ActualizarIngresosEgresos from "./ActualizarIngresosEgresos";
import GraficoDeIngresosEgresos from "./GraficoDeIngresosEgresos";

export default {
  name: "Main",

  components: {
    InformacionSaldo,
    InformacionIngresoEgreso,
    ActualizarIngresosEgresos,
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
