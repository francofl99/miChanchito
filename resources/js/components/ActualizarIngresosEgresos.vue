<template>
  <div class="p-2 w-full h-32 bg-pink-300 mt-4 rounded">
    <div class="w-full flex flex-wrap">
      <label
        for="ingresosEgresos"
        class="w-full text-pink-900"
      >
        Actualizar ingresos/egresos
      </label>

      <input
        id="ingresosEgresos"
        v-model="ingresosEgresos"
        type="number"
        placeholder="0"
        class="bg-pink-200 placeholder-pink-900 rounded-md pl-2 w-full"
      >
    </div>

    <div class="flex">
      <div class="w-3/5 flex flex-wrap">
        <label
          for="ingresosEgresos"
          class="w-full text-pink-900"
        >
          Tipo
        </label>

        <select
          id="ingresosEgresos"
          v-model="tipoIngresoEgreso"
          type="number"
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

      <div class="w-full flex h-6 mt-5 ">
        <DatePicker
          v-model="fechaDeRegistro"
          :popover="{ placement: 'bottom', visibility: 'click' }"
        >
          <button class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded focus:outline-none">
            <VueHicons name="calendar" />
          </button>
        </DatePicker>
        <button
          class="rounded-full font-semibold bg-green-300 text-black text-opacity-75 px-3"
          @click="ingresoDeDinero"
        >
          Ingreso
        </button>
        <button class="rounded-full font-semibold bg-red-400 text-black" @click="egresoDeDinero">
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

</style>
