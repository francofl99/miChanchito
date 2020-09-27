<template>
  <div
    class="pl-2 w-56 h-16 flex flex-wrap justify-start items-center bg-pink-300 rounded"
  >
    <h5 class="w-full text-pink-900">
      Saldo Actual <b>${{ saldoActual }}</b>
    </h5>
    <h5 class="w-full text-pink-900">
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
