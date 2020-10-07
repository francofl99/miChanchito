<template>
  <div
    class="pl-2 w-56 h-20 flex flex-wrap justify-start items-center bg-gray-700 rounded"
  >
    <h5 class="w-full text-gray-200">
      Saldo Actual <b>${{ getSaldoActual }}</b>
    </h5>
    <h5 class="w-full text-gray-200">
      Flujo de Dinero <b>${{ flujoDinero }}</b>
    </h5>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: "InformacionSaldoActualConFlujoDinero",

  data() {
    return {
      ingresosL: [],
      egresosL: [],
      flujoDinero: 5000
    };
  },

  computed: {
    getSaldoActual() {
      this.getIngresosList();
      this.getEgresosList();
      var ultimoIngreso = this.ingresosL[this.ingresosL.length - 1];
      var ultimoEgreso = this.egresosL[this.egresosL.length - 1];
      var saldoActual = ultimoEgreso.egreso;

      return saldoActual;
    }
  },

  methods: {
    getIngresosList() {
      axios.get('/api/bringAllIncome')
        .then((response) => {
          this.ingresosL = response.data;
        })
        .catch(error => {
          console.log(error);
        });
    },
    getEgresosList() {
      axios.get('/api/bringAllEpanses')
        .then((response) => {
          this.egresosL = response.data;
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
