<template>
  <div class="p-2 w-full h-32 bg-pink-300 mt-4 rounded">
    <InputActualizarIngresosEgresos />
    <div class="flex">
      <InputTipoIngresosEgresos />
      <BotonesFechaIngresoEgreso />
    </div>
  </div>
</template>

<script>
import InputActualizarIngresosEgresos from "./InputActualizarIngresosEgresos";
import InputTipoIngresosEgresos from "./InputTipoIngresosEgresos";
import BotonesFechaIngresoEgreso from "./BotonesFechaIngresoEgreso";

export default {
  name: "ActualizarIngresosEgresos",

  components: {
    InputActualizarIngresosEgresos,
    InputTipoIngresosEgresos,
    BotonesFechaIngresoEgreso
  }
};
</script>

<style>

</style>
