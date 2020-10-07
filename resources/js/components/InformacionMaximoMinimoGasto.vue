<template>
  <div class="rounded-md p-2 container h-64 bg-gray-300 flex">
    <label for="Menor Ingreso">Menor</label>
    <div
      id="Menor Ingreso"
      class="flex mt-16 text-gray-700"
    >
      <area-chart
        label="Menor Ingreso"
        height="180px"
        width="400px"
      />
    </div>

    <div class="flex ml-20 mt-16">
      <area-chart
        height="180px"
        width="400px"
      />
    </div>
  </div>
</template>

<script>
export default {
  name: "InformacionMaximoMinimoGasto",

};
</script>

<style>
.container {
    width: 57rem;
}

</style>
