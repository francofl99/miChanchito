<template>
  <div
    class="bg-gray-700 side-style py-64 flex flex-wrap items-center justify-center"
    style="height: calc(100vh - 3rem)"
  >
    <div
      v-for="(icon, i) in sections"
      :key="i"
      class="text-red-900 w-10 h-10 bg-red-300 hover:bg-red-400 transition duration-150 rounded-md my-2 mx-auto cursor-pointer flex justify-center"
      @click="goToRoute(icon.route)"
    >
      <VueHicons
        :name="icon.icon"
        is-filled
        :width-icon="8"
      />
    </div>
  </div>
</template>

<script>
import VueHicons from "vue-hicons";

export default {
  name: "SideBar",

  components: {
    VueHicons
  },

  data() {
    return {
      sections: [{
        icon: "home",
        route: 'Home'
      },
      {
        icon: "currency_dollar",
        route: 'exchance'
      },
      {
        icon: "cog",
        route: "settings"
      },
      {
        icon: "database",
        route: "any"
      }]
    };
  },

  methods: {
    goToRoute(route) {
      let currentRoute = this.$router.currentRoute.name;
      if (route != currentRoute) {
        this.$router.push(`/${route}`);
      }
    }
  }
};
</script>

<style>
.side-style {
  width: 3.5%;
}

</style>
