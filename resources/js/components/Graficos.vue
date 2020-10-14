<template>
  <div class="flex flex-wrap w-full p-2  mt-6 bg-gray-300 rounded-md">
    <div class="w-full flex flex-wrap ">
      <select
        id="graficos"
        v-model="tipoDeGrafico"
        type="number"
        class="bg-red-300 placeholder-red-900 hover:bg-red-400 cursor-pointer rounded-md text-red-900 h-8 transition duration-150"
      >
        <option
          id="1"
          :value="true"
        >
          Ingresos
        </option>
        <option
          id="2"
          :value="false"
        >
          Egresos
        </option>
      </select>
    </div>
    <div
      class="flex w-full mt-4"
    >
      <area-chart
        :colors="(tipoDeGrafico ? ['#9ae6b4'] : ['#feb2b2'])"
        :data="(tipoDeGrafico ? ingresos : egresos).map(item => [item.fecha, (tipoDeGrafico ? item.ingreso : item.egreso)])"
      />
    </div>
  </div>
</template>

<script>
export default {
  name: "Graficos",

  props: {
    ingresos: {
      type: Array,
      required: true,
    },
    egresos: {
      type: Array,
      required: true,
    }
  },

  data() {
    return {
      tipoDeGrafico: true,
    };
  },
};
</script>

<style>

</style>
