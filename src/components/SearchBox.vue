<template>
  <div class="container">
    <div class="container_logo">
      <div class="logo">
        <img src="../assets/images/melon.png" alt="logo" />
      </div>
      <div class="logo_text">
        <div class="lg_text">Melon</div>
        <div class="sm_text">MART & GRACERY</div>
      </div>
    </div>
    <div class="container_seach">
      <div class="all_category">
        <div class="cate_text">All Categories</div>
        <div class="cate_icon"><i class="uil uil-angle-down"></i></div>
      </div>
      <div class="search_two">
        <div>| <input type="text" placeholder="Search for items" /></div>
        <i class="uil uil-search"></i>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SearchBox",
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");

.container {
  font-family: "Quicksand", sans-serif;
  display: flex;
  justify-content: start;
  align-items: center;
  gap: 60px;
}
.container .container_logo {
  display: flex;
  gap: 10px;
}
.container .container_logo .logo img {
  width: 78px;
  height: 60px;
  position: relative;
  top: 10px;
}
.container .container_logo .logo_text .lg_text {
  font-size: 40px;
  font-weight: 700;
  color: rgba(59, 183, 126, 1);
}
.container .container_logo .logo_text .sm_text {
  font-size: 10.9px;
  font-weight: 600;
  color: #253d4e;
}
.container_seach {
  width: 700px;
  height: 50px;
  padding: 0px 15px 0px 15px;
  border: 2px solid rgba(59, 183, 126, 1);
  border-radius: 5px;
  display: flex;
  justify-content: start;
  align-items: center;
  gap: 10px;
}
.container_seach .all_category {
  width: 20%;
  font-size: 14px;
  font-weight: 700;
  color: #253d4e;
  display: flex;
  gap: 10px;
}
.container_seach .all_category .cate_icon {
  color: rgba(126, 126, 126, 1);
}
.container_seach .search_two {
  width: 80%;
  color: rgba(182, 182, 182, 1);
  display: flex;
  justify-content: space-between;
}

.container_seach .search_two input {
  font-size: 12px;
  font-weight: 400;
  outline: none;
  border: none;
  color: rgba(182, 182, 182, 1);
}
.container_seach .search_two .uil {
  color: rgba(126, 126, 126, 1);
}
</style>
