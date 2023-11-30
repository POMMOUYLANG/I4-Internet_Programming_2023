<template>
  <div class="container_header">
    <div class="category_name">Coke & Milk</div>
    <ul>
      <li>Home</li>
      <li><i class="uil uil-angle-right"></i></li>
      <li>Categiry</li>
      <li><i class="uil uil-angle-right"></i></li>
      <li>Coke & Milk</li>
    </ul>
  </div>
</template>

<script>
export default {
  name: "PageHeader",
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");
.container_header {
  width: 1500px;
  height: 235px;
  font-family: "Quicksand", sans-serif;
  background: rgba(59, 183, 126, 0.2) url("../assets//images//bg.png");
  border-radius: 10px;
}
.container_header .category_name {
  font-size: 48px;
  font-style: normal;
  font-weight: 700;
  padding: 40px 0px 0px 60px;
}
.container_header ul {
  display: flex;
  align-items: center;
  gap: 7px;
  padding: 0px 0px 0px 65px;
}
.container_header ul li {
  list-style: none;
  font-size: 18px;
  font-style: normal;
  font-weight: 400;
  color: rgba(126, 126, 126, 1);
}
.container_header ul .uil {
  color: rgba(182, 182, 182, 1);
}
</style>
