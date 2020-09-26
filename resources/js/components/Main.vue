<template>
  <div class=" h-screen width-of-main flex">
    <div class="flex h-48 flex-wrap container-info-cartera pt-8 pl-4">
      <div class="flex justify-between w-full">
        <div class="pl-2 w-56 h-16 flex flex-wrap justify-start items-center bg-red-400 rounded">
          <h5 class="w-full text-lg">
            Saldo Actual <b>${{ saldoActual }}</b>
          </h5>
          <h5 class="w-full text-lg">
            Flujo de Dinero <b>${{ flujoDinero }}</b>
          </h5>
        </div>
        <div class="pl-2 w-56 h-16 bg-green-400 rounded">
          <h5 class="w-full text-lg">
            Mayor Ingreso <b>${{ menorIngreso }}</b>
          </h5>
          <h5 class="w-full text-lg">
            Mayor egreso <b>${{ mayorIngreso }}</b>
          </h5>
        </div>
      </div>
      <div class="p-2 w-full h-24 bg-blue-400 mt-4 rounded">
        <div class="w-11/12 flex flex-wrap">
          <label
            for="ingresosEgresos"
            class="w-full text-sm font-light"
          >
            Actualizar ingresos/egresos
          </label>

          <input
            id="ingresosEgresos"
            type="number"
            placeholder="4000"
            class="bg-pink-200 placeholder-pink-100 rounded-md pl-2 w-full"
          >
        </div>

        <div class="w-11/12 flex items-center justify-between">
          <div class="w-3/5 flex flex-wrap">
            <label
              for="ingresosEgresos"
              class="w-full text-sm font-light"
            >
              Tipo
            </label>

            <select
              id="ingresosEgresos"
              type="number"
              placeholder="4000"
              class="bg-pink-200 placeholder-pink-100 rounded-md font-light text-pink-600"
            >
              <option
                id="1"
                value="comida"
              >
                Comida
              </option>
              <option
                id="2"
                value="Bebidas"
              >
                Bebidas
              </option>
            </select>
          </div>

          <div class="w-auto h-6 mt-5">
            <button
              class="rounded-full font-semibold bg-green-300 text-black text-opacity-75 px-3"
              @click=""
            >
              Ingreso
            </button>
            <button class="rounded-full font-semibold bg-red-400 text-black">
              Engreso
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name:"Main",

  data() {
    return {
      saldoActual: 6000,
      flujoDinero: 5000,
      menorIngreso: 20,
      mayorIngreso: 22,
      ingresosEgresos: 0,
      tipoIngresoEgreso: 0
    };
  },

  computed: {
    totalRandom() {
      return this.saldoActual + 5000;
    }
  },

  watch: {
    totalRandom(newValue, oldValue) {
      console.log(newValue, oldValue);
    }
  },

  methods: {
    ingresoDeDinero() {
      axios.post('/IngresoDeDinero', {
        ingreso: this.ingresosEgresos,
        tipo: this.tipoIngresoEgreso
      }).then(resolve => {
        console.log(resolve.data);
      });
    }
  }
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
