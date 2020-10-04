<template>
  <div class="pl-2 w-56 h-20 flex flex-wrap justify-start items-center bg-gray-700 rounded">
    <h5 class="w-full text-gray-200">
      Mayor Ingreso <b>${{ menorIngreso }}</b>
    </h5>
    <h5 class="w-full text-gray-200">
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
