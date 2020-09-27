<template>
  <div class="flex flex-wrap w-full">
    <area-chart
      class="w-full"
      :colors="['pink']"
      :data="ingresosList.map(item => [item.fecha, item.ingreso])"
    />
  </div>
</template>

<script>
export default {
  main: "GraficoIngresosEgresos",

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
      axios.get("/api/bringAllIncome").then(response => this.ingresosList = response.data);
    },
  },

};
</script>

<style>

</style>
