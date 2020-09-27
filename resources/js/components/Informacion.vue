<template>
  <div class="flex justify-between w-full">
    <InformacionSaldo />
    <InformacionIngresoEgreso />
  </div>
</template>

<script>
import InformacionSaldo from "./InformacionSaldo";
import InformacionIngresoEgreso from "./InformacionIngresoEgreso";

export default {
  main: "Informacion",

  components: {
    InformacionSaldo,
    InformacionIngresoEgreso
  }

};
</script>

<style>

</style>
