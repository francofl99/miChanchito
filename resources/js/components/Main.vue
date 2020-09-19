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
        <form class="w-full max-w-lg">
          <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <label
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                for="grid-first-name"
              >
                First Name
              </label>
              <input
                id="grid-first-name"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                type="text"
                placeholder="Jane"
              >
              <p class="text-red-500 text-xs italic">
                Please fill out this field.
              </p>
            </div>
            <div class="w-full md:w-1/2 px-3">
              <label
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                for="grid-last-name"
              >
                Last Name
              </label>
              <input
                id="grid-last-name"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                type="text"
                placeholder="Doe"
              >
            </div>
          </div>
        </form>
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
      mayorIngreso: 22
    };
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
