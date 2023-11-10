<template>
  <div class="Product-Box">
    <div class="Value" :style="{ backgroundColor: Bg_value }">{{ Value }}</div>
    <img class="Image" :src="Img" alt="Product" />
    <div class="Details">
      <span class="hodo">Hodo Foods</span>
      <div class="Title">{{ Title }}</div>
      <div class="Reviews">
        <div class="Star">
          <font-awesome-icon :icon="['fas', 'star']" style="color: #fdc040" />
          <font-awesome-icon :icon="['fas', 'star']" style="color: #fdc040" />
          <font-awesome-icon :icon="['fas', 'star']" style="color: #fdc040" />
          <font-awesome-icon :icon="['fas', 'star']" style="color: #fdc040" />
          <font-awesome-icon :icon="['fas', 'star']" style="color: #cdcdcd" />
        </div>
        <div class="num">(4.0)</div>
      </div>
      <div class="gram">500gram</div>
      <div class="money">
        <div class="dolla">
          <div class="lg">{{ Supvalue }}</div>
          <div class="sm">{{ Subvalue }}</div>
        </div>
        <button
          class="add"
          :style="{ backgroundColor: Bgbtn, border: Borderbtn }">
          <div class="text">{{ Text }}</div>
          <div class="arrow">{{ Arrow }}</div>
          
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import { fas } from "@fortawesome/free-solid-svg-icons";
import { library } from "@fortawesome/fontawesome-svg-core";

library.add(fas);
export default {
  name: "Product",
  props: [
    "Value",
    "Bg_value",
    "Img",
    "Title",
    "Star",
    "Supvalue",
    "Subvalue",
    "Bgbtn",
    "Borderbtn",
    "Text",
    "Arrow",
  ],
  components: {
    FontAwesomeIcon,
  },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");

.Product-Box {
  width: 298px;
  height: 440px;
  border: 1px solid rgba(188, 227, 201, 1);
  border-radius: 10px;
  font-family: "Quicksand", sans-serif;
}
.Value {
  width: 58px;
  height: 32px;
  border-radius: 0px 30px 30px 0px;
  padding: 10px 15px 10px 15px;
  position: relative;
  top: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 20px;
  font-weight: 400;
}
.Value:hover {
  transform: translate(5px, 5px);
  cursor: pointer;
}
.Image {
  width: 201.893px;
  height: 144.933px;
  position: relative;
  top: 50px;
  left: 37.11px;
}
.Image:hover {
  transform: translate(5px, 5px);
  cursor: pointer;
}
.Details {
  width: 255px;
  height: 160px;
  position: relative;
  top: 65px;
  left: 15px;
}
.Details .hodo {
  font-size: 12px;
  font-weight: 400;
}
.Details .Title {
  font-size: 14px;
  font-weight: 700;
  margin-top: 5px;
}
.Details .Reviews {
  width: 106px;
  height: 18px;
  display: flex;
  justify-content: start;
  align-items: center;
  margin-top: 5px;
}
.Details .Reviews .Star {
  width: 72px;
  height: 14px;
  font-size: 10px;
  /* border: 1px solid black; */
}
.Details .Reviews .num {
  width: 24px;
  height: 18px;
  font-size: 12px;
  font-weight: 400;
}
.Details .gram {
  font-size: 12px;
  font-style: normal;
  font-weight: 400;
  margin-top: 5px;
}
.Details .money {
  width: 260px;
  height: 32px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 20px;
}
.Details .money .dolla {
  width: 86px;
  height: 32px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.Details .money .dolla .lg {
  font-size: 20px;
  font-weight: 700;
  color: rgba(59, 183, 126, 1);
}
.Details .money .dolla .sm {
  font-size: 12px;
  font-weight: 700;
  color: rgba(126, 126, 126, 1);
  position: relative;
  top: 3px;
  text-decoration: line-through;
}
.Details .add {
  width: 67px;
  height: 29px;
  /* border: 1px solid rgba(59, 183, 126, 1); */
  border-radius: 4px;
  color: rgba(59, 183, 126, 1);
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.Details .add:hover {
  transform: translate(5px, 5px);
  cursor: pointer;
}
.Details .add .text {
  font-size: 14px;
  font-weight: 700;
  padding: 4px;
}
.Details .add .arrow {
  font-size: 14px;
  padding: 4px;

}
</style>
