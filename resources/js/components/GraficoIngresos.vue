<template>
  <div
    class="flex w-full"
  >
    <line-chart
      :colors="['pink']"
      :data="ingresosList.map(item => [item.fecha, item.ingreso])"
    />
  </div>
</template>

<script>
import axios from 'axios';

export default {
  main: "GraficoIngresos",

  data() {
    return {
      ingresosList: []
    };
  },

  watch: {
    ingresosList(newValue, oldValue) {
      console.log(newValue);
    }
  },

  mounted() {
    this.getIngresosList();
  },

  methods: {
    getIngresosList() {
      axios.get('/api/bringAllIncome')
        .then((response) => {
          this.ingresosList = response.data;
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
