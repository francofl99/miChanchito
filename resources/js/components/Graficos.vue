<template>
  <div class="flex flex-wrap w-full mt-4">
    <div class="w-full flex flex-wrap">
      <label
        for="graficos"
        class="w-full text-pink-900"
      >
        Grafico:
      </label>

      <select
        id="graficos"
        v-model="tipoDeGrafico"
        type="number"
        class="bg-pink-200 placeholder-pink-100 rounded-md font-light text-pink-600"
      >
        <option
          id="1"
          value="Ingresos"
        >
          Ingresos
        </option>
        <option
          id="2"
          value="Egresos"
        >
          Egresos
        </option>
      </select>
    </div>

    <div
      v-if="estaGraficoDeIngresosActivo"
      class="w-full mt-4"
    >
      <GraficoIngresos />
    </div>
    <div
      v-else
      class="w-full mt-4"
    >
      <GraficoEgresos />
    </div>
  </div>
</template>

<script>
import GraficoIngresos from "./GraficoIngresos";
import GraficoEgresos from "./GraficoEgresos";

export default {
  name: "Graficos",

  components: {
    GraficoIngresos,
    GraficoEgresos
  },

  data() {
    return {
      tipoDeGrafico: "Ingresos"
    };
  },

  computed: {
    estaGraficoDeIngresosActivo: function() {
      return this.tipoDeGrafico == "Ingresos";
    }
  }
};
</script>

<style>

</style>
