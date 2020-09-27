<template>
  <div class="w-11/12 flex flex-wrap">
    <label
      for="ingresosEgresos"
      class="w-full text-sm font-light"
    >
      Actualizar ingresos/egresos
    </label>

    <input
      id="ingresosEgresos"
      v-model="ingresosEgresos"
      type="number"
      placeholder="4000"
      class="bg-pink-200 placeholder-black rounded-md pl-2 w-full"
    >
  </div>
</template>

<script>
export default {
  name: "InputActualizarIngresosEgresos",

  data() {
    return {
      ingresosEgresos: 0
    };
  }

};
</script>

<style>

</style>
