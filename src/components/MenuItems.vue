<template>
  <div class="menu_item">
    <a :href="link">
      <div class="first_item" :style="{ backgroundColor: first_bg }">
        <i
          :class="first_icon"
          class="sizeicon"
          :style="{ color: first_color }"></i>
        <div class="first_text" :style="{ color: text_color }">
          {{ first_text }}
        </div>
      </div>
    </a>
    <a :href="link">
      <div class="second_item" :style="{ backgroundColor: second_bg }">
        <div class="second_text">{{ second_text }}</div>
        <i :class="second_icon" :style="{ color: second_color }"></i>
      </div>
    </a>
  </div>
</template>

<script>
export default {
  name: "MenuItems",
  props: [
    "first_bg",
    "first_icon",
    "first_text",
    "first_color",
    "second_bg",
    "second_icon",
    "second_text",
    "second_color",
    "text_color",
    "link",
  ],
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");

.menu_item {
  font-family: "Quicksand", sans-serif;
  font-size: 16px;
  font-weight: 700;
  color: rgba(37, 61, 78, 1);
}
.menu_item .first_item {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 5px;
}
/* .menu_item .first_item .first_text{
  color: rgba(126, 126, 126, 1);
  font-size: 16px;
  font-weight: 400;
} */
.menu_item .second_item {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 3px;
}
a {
  text-decoration: none;
  color: rgba(37, 61, 78, 1);
}
.sizeicon {
  font-size: 20px;
}
</style>
