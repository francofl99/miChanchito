<template>
  <div
    class="pl-2 w-56 h-20 flex flex-wrap justify-start items-center bg-gray-700 rounded"
  >
    <h5 class="w-full text-gray-200">
      Saldo Actual <b>${{ saldoActual }}</b>
    </h5>
    <h5 class="w-full text-gray-200">
      Flujo de Dinero <b>${{ flujoDinero }}</b>
    </h5>
  </div>
</template>

<script>
export default {
  name: "InformacionSaldoActualConFlujoDinero",

  data() {
    return {
      saldoActual: 6000,
      flujoDinero: 5000
    };

  }
};
</script>

<style>

</style>
