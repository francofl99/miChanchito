<template>
  <div class="rounded-md p-2 h-64 container-info-cartera bg-gray-300">
    <InformacionDeIngresosEgresos
      :ingresos="ingresos"
      :egresos="egresos"
    />
    <ActualizarIngresosEgresos />
  </div>
</template>

<script>
import ActualizarIngresosEgresos from "./ActualizarIngresosEgresos";
import InformacionDeIngresosEgresos from "./InformacionDeIngresosEgresos";

export default {
  name: "SeccionIngresosEgresos",

  components: {
    ActualizarIngresosEgresos,
    InformacionDeIngresosEgresos
  },

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
};
</script>

<style>
.container-info-cartera {
  width: 32rem;
}
</style>
