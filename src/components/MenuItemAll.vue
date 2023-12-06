<template>
    <RouterLink :to="`/category/${ItemName}`">
    <div class="list_menuitem">
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
  </RouterLink>
</template>

<script>
import MenuItems from "./MenuItems.vue";
export default {
  name: "MenuItemAll",
  components: {
    MenuItems,
  },
  props:["Itemname"],
  data(){
    return{
      ItemName:"Hot Deals",
    }
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
.list_menuitem .list {
  display: flex;
  gap: 20px;
}
</style>
