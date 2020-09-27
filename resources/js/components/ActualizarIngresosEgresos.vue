<template>
  <div class="p-2 w-full h-32 bg-pink-300 mt-4 rounded">
    <div class="w-11/12 flex flex-wrap">
      <label
        for="ingresosEgresos"
        class="w-full text-sm font-light"
      >
        Actualizar ingresos/egresos
      </label>

      <input
        id="ingresosEgresos"
        v-model="ingresosEgresos"
        type="number"
        placeholder="4000"
        class="bg-pink-200 placeholder-black rounded-md pl-2 w-full"
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
          v-model="tipoIngresoEgreso"
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

      <div class="w-full h-6 mt-5 flex justify-between">
        <DatePicker
          v-model="fechaDeRegistro"
          :popover="{ placement: 'bottom', visibility: 'click' }"
        >
          <button class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded focus:outline-none">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              class="w-4 h-4 fill-current"
            >
              <path d="M1 4c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4zm2 2v12h14V6H3zm2-6h2v2H5V0zm8 0h2v2h-2V0zM5 9h2v2H5V9zm0 4h2v2H5v-2zm4-4h2v2H9V9zm0 4h2v2H9v-2zm4-4h2v2h-2V9zm0 4h2v2h-2v-2z" />
            </svg>
          </button>
        </DatePicker>
        <button
          class="rounded-full font-semibold bg-green-300 text-black text-opacity-75 px-3"
          @click="ingresoDeDinero"
        >
          Ingreso
        </button>
        <button class="rounded-full font-semibold bg-red-400 text-black">
          Engreso
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import DatePicker from 'v-calendar/lib/components/date-picker.umd';
import moment from "moment";

export default {
  name: "ActualizarIngresosEgresos",

  components: {
    DatePicker
  },

  data() {
    return {
      ingresosEgresos: 0,
      tipoIngresoEgreso: "",
      fechaDeRegistro: "",
    };
  },

  methods: {
    ingresoDeDinero() {
      let parseDateToIso = moment(this.fechaDeRegistro).toISOString();

      axios
        .post("/IngresoDeDinero", {
          ingreso: this.ingresosEgresos,
          tipo: this.tipoIngresoEgreso,
          fecha: parseDateToIso
        })
        .then((resolve) => {
          console.log(resolve.data);
        });
    }
  }


};
</script>

<style>
.width-of-main {
  width: calc(100vw - 5rem);
}

.container-info-cartera {
  width: 32rem;
}
</style>
