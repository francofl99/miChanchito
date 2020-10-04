<template>
  <div
    class="flex"
  >
    <line-chart
      :colors="['gray']"
      :data="egresosList.map(item => [item.fecha, item.egreso])"
    />
  </div>
</template>

<script>
import axios from 'axios';

export default {
  main: "GraficoEgresos",

  data() {
    return {
      egresosList: []
    };
  },

  mounted() {
    this.getEgresosList();
  },

  methods: {
    getEgresosList() {
      axios.get('/api/bringAllEpanses')
        .then((response) => {
          this.egresosList = response.data;
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
