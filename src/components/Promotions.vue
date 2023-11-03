<template>
  <div class="Cards-Box" :style="{ backgroundColor: bg }">
    <div>
      <div class="Text">{{ Text }}</div>
      <div class="btn">
        <Button :bgBtn="bgBtn" :TextBtn="TextBtn" />
      </div>
    </div>
    <img class="Img" :src="Img" alt="Item" />
  </div>
</template>

<script>
import Button from './Button.vue';
export default {
  name: "Promotions",
  props: {
    Img: String,
    Text: String,
    bg: String,
    bgBtn: String,
    TextBtn: String,
  },
  components: {
    Button,
  },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");

.Cards-Box {
  width: 482px;
  height: 300px;
  border: 1px solid rgba(129, 177, 61, 1);
  box-shadow: 10px 10px lightgray;
  border-radius: 10px;
  margin-top: 20px;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}
.Img {
  margin-left: 80px;
  width: 400px;
}
.Text {
  font-family: "Quicksand", sans-serif;
  font-size: 22px;
  width: 240px;
  font-weight: 600;
  position: absolute;
  top: 80px;
  left: 40px;
}
.btn {
  position: absolute;
  bottom: 40px;
  left: 40px;
}
</style>
