<!-- <template>
  <h1>"This is my first VueJs project"</h1>
</template>  -->

<script setup>
import { RouterLink, RouterView } from "vue-router";
</script>

<template>
  <div class="Container_Box">
    <RouterView />
  </div>
</template>

<script>
export default {
  name: "App",
  components: {
    RouterView,
    RouterLink,
  },
};
</script>

<style>
@import "https://unicons.iconscout.com/release/v4.0.0/css/line.css";
.Container_Box {
  margin: 0;
  width: 1500px;
}
</style>
