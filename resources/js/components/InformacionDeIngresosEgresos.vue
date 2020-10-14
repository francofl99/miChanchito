<template>
  <div class="flex justify-between w-full">
    <div
      class="pl-2 w-56 h-20 flex flex-wrap justify-start items-center bg-gray-700 rounded"
    >
      <h5 class="w-full text-gray-200">
        Saldo Actual: <b>$ {{ saldoActual }}</b>
      </h5>
      <h5 class="w-full text-gray-200">
        Flujo de Dinero: <b>s</b>
      </h5>
    </div>
    <div class="pl-2 w-56 h-20 flex flex-wrap justify-start items-center bg-gray-700 rounded">
      <h5 class="w-full text-gray-200">
        Mayor Ingreso: <b>$ {{ maxIngreso }}</b>
      </h5>
      <h5 class="w-full text-gray-200">
        Mayor Egreso <b>$ {{ maxEgreso }}</b>
      </h5>
    </div>
  </div>
</template>

<script>
Array.prototype.isEmpty = function () {
  return !this.length ? true : false;
};

export default {
  props: {
    ingresos: {
      type: Array,
      required: true
    },
    egresos: {
      type: Array,
      required: true
    },
  },

  computed: {
    ingresosTotales() {
      return this.calcularSaldoMaximo();
    },

    maxIngreso() {
      return this.getMaxIngreso();
    },

    maxEgreso() {
      return this.getMaxEgreso();
    },

    gastosTotales() {
      return this.calcularGastosTotales();
    },

    saldoActual() {
      return this.ingresosTotales - this.gastosTotales;
    },
  },

  methods: {
    getMaxIngreso() {
      let maxIngreso = 0;

      this.ingresos.forEach(ingreso => {
        let currentIngreso = ingreso.ingreso;

        if (currentIngreso > maxIngreso) {
          maxIngreso = currentIngreso;
        }
      });

      return maxIngreso;
    },
    getMaxEgreso() {
      let maxEgreso = 0;

      this.egresos.forEach(egreso => {
        let currentEgreso = egreso.egreso;

        if (currentEgreso > maxEgreso) {
          maxEgreso = currentEgreso;
        }
      });

      return maxEgreso;
    },
    calcularSaldoMaximo() {
      let totalDeIngresos = 0;

      this.ingresos.map(ingreso => totalDeIngresos += ingreso.ingreso);

      return totalDeIngresos;
    },
    calcularGastosTotales() {
      let totalDeGastos = 0;

      this.egresos.map(egreso => totalDeGastos += egreso.egreso);

      return totalDeGastos;
    }
  },
};
</script>

<style>

</style>
