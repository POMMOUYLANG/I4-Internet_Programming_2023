<template>
  <div class="menu_first">
    <SearchBox />
    <div class="MenuBarAll">
      <MenuBarAll
        v-for="i in MenuBarAll"
        :key="i.MenuBarAll"
        :link="i.link"
        :first_bg="i.first_bg"
        :first_icon="i.first_icon"
        :first_color="i.first_color"
        :first_text="i.first_text"
        :text_color="i.text_color"
        :second_bg="i.second_bg"
        :second_icon="i.second_icon"
        :second_color="i.second_color"
        :second_text="i.second_text"></MenuBarAll>
    </div>
  </div>

  <div class="menu_second">
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
        :text_color="i.text_color"
        :second_bg="i.second_bg"
        :second_icon="i.second_icon"
        :second_color="i.second_color"
        :second_text="i.second_text"></MenuItemAll>
    </div>
  </div>
  <!-- <div class="">
    <MenuItems
      v-for="i in MenuItems"
      :key="i.MenuItems"
      :first_bg="i.first_bg"
      :first_icon="i.first_icon"
      :first_color="i.first_color"
      :first_text="i.first_text"
      :second_bg="i.second_bg"
      :second_icon="i.second_icon"
      :second_color="i.second_color"
      :second_text="i.second_text"></MenuItems>
  </div> -->
  <div class="Showcase">
    <ShowCase
      v-for="i in ShowCase"
      :key="i.ShowCase"
      :Bg="i.Bg"
      :Title="i.Title"
      :SubTitle="i.SubTitles"
      :Img="i.Img"></ShowCase>
  </div>
  <Menu :Featured="Feature"></Menu>
  <div class="Categories-Row">
    <Categories
      v-for="i in Categories"
      :key="i.Categories"
      :link="i.link"
      :bg="i.bg"
      :ItemName="i.ItemName"
      :Img="i.Img"
      :ItemNumber="i.ItemNumber">
    </Categories>
  </div>
  <div class="Promotions-Row">
    <Promotions
      v-for="i in Promotions"
      :key="i.Promotions"
      :link="i.link"
      :bg="i.bg"
      :Img="i.Img"
      :Text="i.Text"
      :bgBtn="i.btncolor"
      :TextBtn="i.TextBtn" />
  </div>
  <Menu :Featured="Popular"></Menu>
  <div class="Product-Row">
    <Product
      v-for="i in Product"
      :key="i.Product"
      :id="i.id"
      :Value="i.Value"
      :Bg_value="i.Bg_value"
      :Img="i.Img"
      :Title="i.Title"
      :Star="i.Star"
      :Supvalue="i.Supvalue"
      :Subvalue="i.Subvalue"
      :Bgbtn="i.Bgbtn"
      :Borderbtn="i.Borderbtn" />
  </div>
</template>

<script>
import { useProductStore } from "../stores/ProductStores";
import { mapState } from "pinia";
import Menu from "../components/Menu.vue";
import Categories from "../components/Categories.vue";
import Promotions from "../components/Promotions.vue";
import Button from "../components/Button.vue";
import Product from "../components/Product.vue";
import ButtonAdd from "../components/ButtonAdd.vue";
import ButtonPlus from "../components/ButtonPlus.vue";
import ShowCase from "../components/ShowCase.vue";
import MenuItems from "../components/MenuItems.vue";
import MenuItemAll from "../components/MenuItemAll.vue";
import MenuItemBig from "../components/MenuItemBig.vue";
import MenuBarAll from "../components/MenuBarAll.vue";
import SearchBox from "../components/SearchBox.vue";
export default {
  name: "HomeView",
  components: {
    Categories,
    Promotions,
    Button,
    Menu,
    Product,
    ButtonAdd,
    ButtonPlus,
    ShowCase,
    MenuItemBig,
    MenuItems,
    MenuItemAll,
    MenuBarAll,
    SearchBox,
  },
  data() {
    return {
      Feature: "Featured Categories",
      Popular: "Popular Products",
    };
  },
  computed: {
    ...mapState(useProductStore, ["Categories"]),
    ...mapState(useProductStore, ["Promotions"]),
    ...mapState(useProductStore, ["Product"]),
    ...mapState(useProductStore, ["ShowCase"]),
    ...mapState(useProductStore, ["MenuItems"]),
    ...mapState(useProductStore, ["MenuItemAll"]),
    ...mapState(useProductStore, ["MenuBarAll"]),
  },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");
body {
  margin: auto;
  width: 1500px;
}
.Categories-Row {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 30px;
}
.Promotions-Row {
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 30px;
  margin-bottom: 20px;
}
.Product-Row {
  width: 100%;
  display: grid;
  grid-template-columns: auto auto auto auto auto;
  align-items: center;
  gap: 10px;
  margin-top: 20px;
  margin-bottom: 20px;
}
.Showcase {
  width: 100%;
  margin-bottom: 20px;
}
/* .MenuItem {
  width: 100%;
  margin-bottom: 20px;
} */
.MenuItemAll {
  width: 1000px;
  display: flex;
  justify-content: start;
  align-items: center;
  position: relative;
  bottom: 45px;
  left: 260px;
}
.MenuBarAll {
  display: flex;
  justify-content: end;
  align-items: center;
  position: relative;
  bottom: 40px;
  font-weight: 400;
}
</style>
