<template>
  <div class="flex w-full flex-wrap">
    <NavBar />
    <SideBar />
    <slot />
  </div>
</template>

<script>
import SideBar from "../js/components/SideBar";
import NavBar from "../js/components/NavBar";

export default {
  components: {
    SideBar,
    NavBar
  }
};

</script>
