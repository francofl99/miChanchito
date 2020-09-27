<template>
  <div class="flex w-full flex-wrap">
    <NavBar />
    <SideBar />
    <Main />
  </div>
</template>

<script>
import Main from "./Main";
import SideBar from "./SideBar";
import NavBar from "./NavBar";

export default {
  components: {
    Main,
    NavBar,
    SideBar
  }
};
</script>
