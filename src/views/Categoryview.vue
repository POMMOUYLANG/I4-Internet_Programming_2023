<template>
  <div class="menutop">
    <SearchBox></SearchBox>
    <div class="MenuBarAll">
      <MenuBarAll
        v-for="i in MenuBarAll"
        :key="i.MenuBarAll"
        :link="i.link"
        :first_bg="i.first_bg"
        :first_icon="i.first_icon"
        :first_color="i.first_color"
        :first_text="i.first_text"
        :second_bg="i.second_bg"
        :second_icon="i.second_icon"
        :second_color="i.second_color"
        :second_text="i.second_text"></MenuBarAll>
    </div>
  </div>

  <div class="menufirst">
    <div class="MenuItemBig">
      <MenuItemBig />
    </div>
    <div class="MenuItemAll">
      <MenuItemAll
        v-for="i in MenuItemAll"
        :key="i.MenuItemAll"
        :link="i.link"
        :first_bg="i.first_bg"
        :first_icon="i.first_icon"
        :first_color="i.first_color"
        :first_text="i.first_text"
        :second_bg="i.second_bg"
        :second_icon="i.second_icon"
        :second_color="i.second_color"
        :second_text="i.second_text"></MenuItemAll>
    </div>
  </div>
  <PageHeaderVue />
</template>


<script>
import { useProductStore } from "../stores/ProductStores";
import { mapState } from "pinia";
import MenuItemAll from "../components/MenuItemAll.vue";
import MenuItemBig from "../components/MenuItemBig.vue";
import SearchBox from "../components/SearchBox.vue";
import MenuBarAll from "../components/MenuBarAll.vue";
import PageHeaderVue from "../components/PageHeader.vue";

export default {
  name: "Categoryview",
  components: {
    MenuItemAll,
    MenuItemBig,
    SearchBox,
    MenuBarAll,
    PageHeaderVue,
  },
  computed: {
    ...mapState(useProductStore, ["MenuItemAll"]),
    ...mapState(useProductStore, ["MenuBarAll"]),
  },
};
</script>

<style>
body {
  margin: auto;
  width: 1500px;
}
</style>
