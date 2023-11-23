<template>
  <div class="container_showcase" :style="{ backgroundColor: Bg }">
    <div class="title_left">
      <div class="title">{{ Title }}</div>
      <div class="sub_title">{{ SubTitle }}</div>
      <div class="subscribe">
        <div class="search">
          <font-awesome-icon
            :icon="['fas', 'paper-plane']"
            style="color: rgba(126, 126, 126, 1)" />
          <div class="smtitle">
            <input type="text" name="" id="" placeholder="your email address" />
          </div>
        </div>

        <button class="box_subscribe">Subscribe</button>
      </div>
    </div>
    <div class="image"><img :src="Img" alt="Img" /></div>
  </div>
</template>

<script>
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { fas } from "@fortawesome/free-solid-svg-icons";
import { library } from "@fortawesome/fontawesome-svg-core";

library.add(fas);
export default {
  name: "ShowCase",
  props: ["Title", "SubTitle", "Img", "Bg"],
  components: {
    FontAwesomeIcon,
  },
};
</script>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");
.container_showcase {
  width: 1500px;
  height: 538px;
  flex-shrink: 0;
  border-radius: 20px;
  display: flex;
  justify-content: space-between;
  background: url(../assets/images/bg.png), lightgray 50% / cover no-repeat;
}
.container_showcase .title_left {
  width: 800px;
  padding: 50px 0px 0px 140px;
}
.container_showcase .title_left .title {
  font-family: "Quicksand", sans-serif;
  font-size: 58px;
  font-weight: 700;
  margin-top: 20px;
}
.container_showcase .title_left .sub_title {
  font-family: "Quicksand", sans-serif;
  font-size: 28px;
  font-weight: 400;
  color: #7e7e7e;
  margin-top: 25px;
}
.container_showcase img {
  width: 800px;
}
.container_showcase .subscribe {
  width: 442px;
  height: 50px;
  border-radius: 30px;
  background: #fff;
  margin-top: 60px;
  display: flex;
  justify-content: space-between;
}
.container_showcase .subscribe .search {
  width: 65%;
  height: 100%;
  display: flex;
  justify-content: start;
  align-items: center;
  gap: 10px;
  margin-left: 20px;
}
.container_showcase .subscribe .box_subscribe {
  font-family: "Quicksand", sans-serif;
  width: 149px;
  height: 50px;
  border-radius: 30px;
  background: #3bb77e;
  color: white;
  border: none;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 16px;
  font-weight: 700;
}
.container_showcase .subscribe .smtitle {
  font-family: "Quicksand", sans-serif;
  font-size: 12px;
  font-style: normal;
  font-weight: 400;
}
input {
  border: none;
  outline: none;
}
</style>
