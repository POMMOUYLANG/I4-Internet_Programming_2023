<template>
  <div class="list_menubar">
    <MenuItems
      class="list"
      :link="link"
      :first_bg="first_bg"
      :first_icon="first_icon"
      :first_color="first_color"
      :first_text="first_text"
      :text_color="text_color"
      :second_bg="second_bg"
      :second_icon="second_icon"
      :second_color="second_color"
      :second_text="second_text"></MenuItems>
  </div>
</template>

<script>
import MenuItems from "./MenuItems.vue";
export default {
  name: "MenuBarAll",
  components: {
    MenuItems,
  },
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

<style scoped>
.list_menubar .list {
  display: flex;
  justify-content: end;
  margin: 0px 0px 0px 15px ;
}
</style>
