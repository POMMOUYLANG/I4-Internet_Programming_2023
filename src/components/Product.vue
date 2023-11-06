<template>
  <div class="Product-Box"></div>
</template>

<script>
export default {
  name: "Product",
  props: [
    "percent",
    "Img",
    "Title",
    "Star",
    "Gram",
    "Sup_value",
    "Sub_value",
    "btnAdd",
  ],
};
</script>

<style scoped>
.Product-Box {
  width: 298px;
  height: 402px;
}
</style>
