<template>
  <div class="w-3/5 flex flex-wrap">
    <label
      for="ingresosEgresos"
      class="w-full text-pink-900"
    >
      Tipo
    </label>

    <select
      id="ingresosEgresos"
      v-model="tipoIngresoEgreso"
      type="number"
      class="bg-pink-200 placeholder-pink-100 rounded-md font-light text-pink-600"
    >
      <option
        id="1"
        value="comida"
      >
        Comida
      </option>
      <option
        id="2"
        value="Bebidas"
      >
        Bebidas
      </option>
    </select>
  </div>
</template>

<script>
export default {
  name: "InputTipoIngresosEgresos",

  data() {
    return {
      tipoIngresoEgreso: ""
    };
  }

};
</script>

<style>

</style>
