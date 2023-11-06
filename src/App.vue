<!-- <template>
  <h1>"This is my first VueJs project"</h1>
</template>  -->

<template>
  <div class="Box">
    <SuperProduct/>
  </div>
</template>

<script>
import SuperProduct from './views/SuperProduct.vue';
export default {
  name: "App",
  components: {
    SuperProduct,
  },
};
</script>

<style scoped>
.Box {
  margin: auto;
  width: 1520px;
}
</style>
