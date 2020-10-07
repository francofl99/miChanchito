<template>
  <div class="pl-2 w-56 h-20 flex flex-wrap justify-start items-center bg-gray-700 rounded">
    <h5 class="w-full text-gray-200">
      Mayor Ingreso <b>${{ getMayorIngreso }}</b>
    </h5>
    <h5 class="w-full text-gray-200">
      Mayor Egreso <b>${{ getMayorEgreso }}</b>
    </h5>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "InformacionMayorIngresoEgreso",

  data() {
    return {
      ingresos: [],
      egresos: [],
    };
  },

  computed: {
    getMayorIngreso() {
      var mayorIngreso = 0;
      this.ingresos.forEach(element => {
        let ingreso = element.ingreso;

        if (mayorIngreso < ingreso) {
          mayorIngreso = ingreso;
        }
      });
      return mayorIngreso;
    },
    getMayorEgreso() {
      var mayorEgreso = 0;
      this.egresos.forEach(element => {
        let egreso = element.egreso;

        if (mayorEgreso < egreso) {
          mayorEgreso = egreso;
        }
      });
      return mayorEgreso;
    },
  },

  mounted() {
    this.getIngresosList();
    this.getEgresosList();
  },

  methods: {
    getIngresosList() {
      axios.get('/api/bringAllIncome')
        .then((response) => {
          this.ingresos = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    },
    getEgresosList() {
      axios.get('/api/bringAllEpanses')
        .then((response) => {
          this.egresos = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    },
  }
};
</script>

<style>

</style>
