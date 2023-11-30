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
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");
.Container_Box {
  margin: auto;
  width: 1500px;
}
</style>
