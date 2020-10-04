<template>
  <div class="flex flex-wrap w-full p-2  mt-6 bg-gray-300 rounded-md">
    <div class="w-full flex flex-wrap ">
      <select
        id="graficos"
        v-model="tipoDeGrafico"
        type="number"
        class="bg-red-300 placeholder-red-900 rounded-md text-red-900 h-8"
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
      class="flex w-full mt-4"
    >
      <area-chart
        :colors="(tipoDeGrafico == 'Ingresos' ? ['#9ae6b4'] : ['#feb2b2'])"
        :data="(tipoDeGrafico == 'Ingresos' ? graficoIngresos : graficoEgresos).map(item => [item.fecha, (tipoDeGrafico == 'Ingresos' ? item.ingreso : item.egreso)])"
      />
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: "Graficos",

  data() {
    return {
      tipoDeGrafico: "Ingresos",
      graficoIngresos: [],
      graficoEgresos: []
    };
  },
  
  mounted() {
    this.getIngresosList();
    this.getEgresosList();
  },

  methods: {
    getEgresosList() {
      axios.get('/api/bringAllEpanses')
        .then((response) => {
          this.graficoEgresos = response.data;
        })
        .catch(error => {
          console.log(error);
        });

    },
    getIngresosList() {
      axios.get('/api/bringAllIncome')
        .then((response) => {
          this.graficoIngresos = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>

<style>

</style>
