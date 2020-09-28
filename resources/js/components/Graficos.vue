<template>
  <div>
    <div class="w-3/5 flex flex-wrap">
      <label
        for="graficos"
        class="w-full text-pink-900"
      >
        Grafico
      </label>

      <select
        id="graficos"
        v-model="grafico"
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
      v-if="cambiarDeGrafico"
    >
      <GraficoIngresos />
    </div>
    <div
      v-else
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
      grafico: ""
    };
  },

  computed: {
    cambiarDeGrafico: function() {
      return this.grafico == "Ingresos";
    }
  }
};
</script>

<style>

</style>
