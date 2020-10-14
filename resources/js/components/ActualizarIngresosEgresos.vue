<template>
  <div class="p-2 w-full c-style bg-gray-700 mt-4 rounded ">
    <div class="w-full flex flex-wrap">
      <label
        for="ingresosEgresos"
        class="w-full text-gray-200"
      >
        Actualizar ingresos/egresos
      </label>

      <input
        id="ingresosEgresos"
        v-model="ingresosEgresos"
        type="number"
        placeholder="0"
        class="bg-gray-500 placeholder-gray-200 text-gray-200 rounded-md pl-2 mt-2 w-full h-6"
      >
    </div>

    <div class="flex mt-4">
      <div class="w-3/5 flex flex-wrap">
        <label
          for="ingresosEgresos"
          class="w-full text-gray-200"
        >
          Tipo
        </label>

        <select
          id="ingresosEgresos"
          v-model="tipoIngresoEgreso"
          type="number"
          class="bg-gray-500 placeholder-gray-200 rounded-md mt-2 font-light text-gray-200 h-6 "
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

      <div class="w-full flex mt-5 justify-between pr-2 pl-20">
        <DatePicker
          v-model="fechaDeRegistro"
          :popover="{ placement: 'bottom', visibility: 'click' }"
        >
          <button class="transition duration-150 p-2 bg-red-300  hover:bg-red-400 text-red-900 rounded focus:outline-none">
            <VueHicons
              is-filled
              name="calendar"
            />
          </button>
        </DatePicker>
        <button
          class="transition duration-150 rounded-md font-semibold bg-green-300 hover:bg-green-400 text-green-900 px-3 h-8"
          @click="ingresoDeDinero"
        >
          Ingreso
        </button>
        <button
          class="transition duration-150 rounded-md font-semibold bg-red-300 hover:bg-red-400 text-red-900 px-3 h-8"
          @click="egresoDeDinero"
        >
          Engreso
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import DatePicker from 'v-calendar/lib/components/date-picker.umd';
import moment from "moment";
import axios from 'axios';
import VueHicons from "vue-hicons";

export default {
  name: "ActualizarIngresosEgresos",

  components: {
    VueHicons,
    DatePicker
  },

  data () {
    return {
      ingresosEgresos: 0,
      tipoIngresoEgreso: "",
      fechaDeRegistro: ""
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
        })
        .catch(error => {
          console.log(error);
        });
    },

    egresoDeDinero() {
      let parseDateToIso = moment(this.fechaDeRegistro).toISOString();

      axios
        .post("/EgresoDeDinero", {
          egreso: this.ingresosEgresos,
          tipo: this.tipoIngresoEgreso,
          fecha: parseDateToIso
        })
        .then((resolve) => {
          console.log(resolve.data);
        })
        .catch(error => {
          console.log(error);
        });
    }
  }
};
</script>

<style>
.c-style {
  height: 9rem;
}
</style>
