<template>
  <ViewContainer>
    <NavBar />
    <SideBar />
    <Main />
  </ViewContainer>
</template>

<script>
import ViewContainer from "./ViewContainer";
import Main from "../js/components/Main";
import SideBar from "../js/components/SideBar";
import NavBar from "../js/components/NavBar";

export default {
  components: {
    ViewContainer,
    Main,
    NavBar,
    SideBar,
  }

};
</script>

<style>

</style>
