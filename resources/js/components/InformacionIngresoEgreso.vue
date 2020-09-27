<template>
  <div class="pl-2 w-56 h-16 bg-pink-300 rounded">
    <h5 class="w-full text-lg">
      Mayor Ingreso <b>${{ menorIngreso }}</b>
    </h5>
    <h5 class="w-full text-lg">
      Mayor egreso <b>${{ mayorIngreso }}</b>
    </h5>
  </div>
</template>

<script>
export default {
  name: "InformacionIngresoEgreso",

  data() {
    return {
      menorIngreso: 20,
      mayorIngreso: 22
    };
  }

};
</script>

<style>
.width-of-main {
  width: calc(100vw - 5rem);
}

.container-info-cartera {
  width: 32rem;
}
</style>
