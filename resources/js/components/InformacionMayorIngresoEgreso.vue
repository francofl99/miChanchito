<template>
  <div class="pl-2 w-56 h-16 flex flex-wrap justify-start items-center bg-pink-300 rounded">
    <h5 class="w-full text-pink-900">
      Mayor Ingreso <b>${{ menorIngreso }}</b>
    </h5>
    <h5 class="w-full text-pink-900">
      Mayor egreso <b>${{ mayorIngreso }}</b>
    </h5>
  </div>
</template>

<script>
export default {
  name: "InformacionMayorIngresoEgreso",

  data() {
    return {
      menorIngreso: 20,
      mayorIngreso: 22
    };
  }

};
</script>

<style>

</style>
