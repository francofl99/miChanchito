<template>
  <div class="bg-gray-400 main-style flex flex-wrap p-8 justify-between">
    <SeccionIngresosEgresos
      :ingresos="ingresos"
      :egresos="egresos"
    />
    <InformacionMaximoMinimoGasto />
    <Graficos
      :ingresos="ingresos"
      :egresos="egresos"
    />
  </div>
</template>

<script>
import SeccionIngresosEgresos from "./SeccionIngresosEgresos";
import Graficos from "./Graficos";
import InformacionMaximoMinimoGasto from "./InformacionMaximoMinimoGasto";
import axios from 'axios';

export default {
  name: "Main",

  components: {
    SeccionIngresosEgresos,
    InformacionMaximoMinimoGasto,
    Graficos
  },

  data() {
    return {
      ingresos: [],
      egresos: [],
    };
  },

  created() {
    this.getIngresos();
    this.getEgresos();
  },

  methods: {
    getIngresos() {
      axios.get(`/api/bringAllIncome`)
        .then((response) => {
          this.ingresos = response.data;
        });
    },
    getEgresos() {
      return axios.get(`/api/bringAllEpanses`)
        .then((response) => {
          this.egresos = response.data;
        });
    },
  }
};
</script>

<style>
.main-style {
  width: 96.5%;
}

</style>
