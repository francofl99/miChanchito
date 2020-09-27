<template>
  <div class="w-full flex flex-wrap">
    <label
      for="ingresosEgresos"
      class="w-full text-pink-900"
    >
      Actualizar ingresos/egresos
    </label>

    <input
      id="ingresosEgresos"
      v-model="ingresosEgresos"
      type="number"
      placeholder="0"
      class="bg-pink-200 placeholder-pink-900 rounded-md pl-2 w-full"
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
