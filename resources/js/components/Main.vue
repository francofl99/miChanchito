<template>
  <div class="h-screen width-of-main flex">
    <div class="flex h-48 flex-wrap container-info-cartera pt-8 pl-4">
      <div class="flex justify-between w-full">
        <InformacionSaldo />
        <InformacionIngresoEgreso />
      </div>
      <ActualizarIngresosEgresos />
    </div>

    <div class="w-full">
      <area-chart
        class="w-full"
        :colors="['pink']"
        :data="ingresosList.map(item => [item.fecha, item.ingreso])"
      />
    </div>
  </div>
</template>

<script>
import InformacionSaldo from "./InformacionSaldo";
import InformacionIngresoEgreso from "./InformacionIngresoEgreso";
import ActualizarIngresosEgresos from "./ActualizarIngresosEgresos";

export default {
  name: "Main",

  components: {
    InformacionSaldo,
    InformacionIngresoEgreso,
    ActualizarIngresosEgresos
  },

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

<style scoped>
.width-of-main {
  width: calc(100vw - 5rem);
}

.container-info-cartera {
  width: 32rem;
}
</style>
