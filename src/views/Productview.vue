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

  <div class="container">
    <div class="navbar">
      <RouterLink to="/"><span class="home">Home</span></RouterLink> >
      Vegetables & tubers >
      {{ productInfo.Title }}
    </div>
    <div class="wrapper">
      <div class="image-container">
        <div class="image">
          <div class="search-bar">
            <i class="pi pi-search"></i>
          </div>
          <div class="main-image">
            <img :src="images[imgIndex]" alt="img" />
          </div>
        </div>
        <div class="sub-image">
          <div @click="handleChangeImageBack" class="arrow">
            <i class="uil uil-arrow-left"></i>
          </div>
          <div class="images">
            <div
              class="img"
              v-for="(img, index) in images"
              :class="{ active: index === imgIndex }"
              @click="imgIndex = index">
              <img :src="img" alt="image" />
            </div>
          </div>
          <div @click="handleChangeImage" class="arrow">
            <i class="uil uil-arrow-right"></i>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="status"><span>In Stock</span></div>
        <div class="title">
          <h1>{{ productInfo.Title }}</h1>
        </div>
        <div class="rate">
          <i v-for="i in 4" class="pi pi-star-fill"></i
          ><i class="pi pi-star"></i>(4.0)
        </div>
        <div class="price">
          <div class="discount-pirce">{{ productInfo.Supvalue }}</div>
          <div class="main-pirce">{{ productInfo.Subvalue }}</div>
        </div>
        <div class="info">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus
          omnis inventore deleniti modi officiis facilis unde a quod nont
          molestiae, cumque, dicta tempora sunt.
        </div>
        <div class="action">
          <div class="qty">
            <input type="number" :value="value" />
          </div>
          <div class="add"><i class="uil uil-shopping-cart"></i>Add to cart</div>
          <div class="wishlist"><i class="uil uil-heart"></i></div>
          <div class="chnage"><i class="uil uil-link"></i></div>
        </div>
        <div class="vender">Vender: NestMart</div>
        <div class="sku">SKU: FWM15VKD</div>
      </div>
    </div>
    <div class="more">
      <div class="more-wrapper">
        <div class="more-navbar">
          <div class="more-button more-active">Description</div>
          <div class="more-button">Additional info</div>
          <div class="more-button">Reviews (4)</div>
        </div>
        <div class="more-content">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo nisi
          laudantium ipsam odit voluptate voluptas dolores non labore rerum ab
          dolore suscipit maxime adipisci, excepturi ducimus ratione magni
          explicabo facilis. Lorem ipsum dolor sit amet consectetur, adipisicing
          elit. Nemo nisi laudantium ipsam odit voluptate voluptas dolores non
          labore rerum ab dolore suscipit maxime adipisci, excepturi ducimus
          ratione magni explicabo facilis. Lorem ipsum dolor sit amet
          consectetur, adipisicing elit. Nemo nisi laudantium ipsam odit
          voluptate voluptas dolores non labore rerum ab dolore suscipit maxime
          adipisci, excepturi ducimus ratione magni explicabo facilis.
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { useProductStore } from "../stores/ProductStores";
import { mapState } from "pinia";
import { RouterLink, useRoute } from "vue-router";
import { ref, computed } from "vue";
import MenuItemAll from "../components/MenuItemAll.vue";
import MenuItemBig from "../components/MenuItemBig.vue";
import SearchBox from "../components/SearchBox.vue";
import MenuBarAll from "../components/MenuBarAll.vue";
export default {
  name: "Categoryview",
  components: {
    MenuItemAll,
    MenuItemBig,
    SearchBox,
    MenuBarAll,
    RouterLink,
  },
  computed: {
    ...mapState(useProductStore, ["MenuItemAll"]),
    ...mapState(useProductStore, ["MenuBarAll"]),
  },
  setup() {
    const route = useRoute();
    const productId = route.params.proId;
    const imgIndex = ref(0);
    const value = ref(1);
    const store = useProductStore();
    const productIndex = store.Product.findIndex((p) => p.id === productId);
    const images = computed(() => {
      return store.Product[productIndex].Img;
    });
    const productInfo = computed(() => {
      return store.Product[productIndex];
    });
    const handleChangeImage = () => {
      if (imgIndex.value >= store.Product[productIndex].Img.length - 1) return;
      imgIndex.value = imgIndex.value + 1;
    };
    const handleChangeImageBack = () => {
      if (imgIndex.value <= 0) return;
      imgIndex.value = imgIndex.value - 1;
    };
    return {
      value,
      images,
      productInfo,
      handleChangeImage,
      imgIndex,
      handleChangeImageBack,
    };
  },
};
</script>

<style scoped>
@import "https://unicons.iconscout.com/release/v4.0.0/css/line.css";
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");
a {
  color: black;
  text-decoration: none;
}
.vender {
  margin-top: 20px;
  font-size: 13px;
}
.sku {
  font-size: 13px;
}
.container {
  width: 100%;
}
.navbar {
  width: 100%;
  padding-top: 12px;
  height: 40px;
  display: flex;
  justify-content: flex-start;
}
.wrapper {
  display: flex;
}
.home {
  color: #116a41;
}
.image-container {
  width: 50%;
  height: 470px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
.image {
  width: 70%;
  height: 80%;
  border-radius: 15px;
  border: 1px solid #d2d6d5;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.search-bar {
  width: 95%;
  height: 30px;
  display: flex;
  justify-content: flex-end;
  align-items: center;
  margin-top: 5px;
}
.main-image {
  width: 80%;
  height: 80%;
  margin-top: 10px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.main-image img {
  width: 100%;
}
.sub-image {
  width: 70%;
  height: 20%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.arrow {
  width: 45px;
  height: 30px;
  background-color: #3bb77e;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 20px;
}
.arrow i {
  color: white;
}
.images {
  width: 80%;
  height: 80%;
  display: flex;
  align-items: center;
  overflow-x: auto;
}
.images::-webkit-scrollbar {
  display: none;
}
.img {
  min-width: 80px;
  height: 95%;
  border: 1px solid #d2d6d5;
  border-radius: 12px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-right: 5px;
}
.img img {
  width: 100%;
}
.active {
  border: 1px solid #3bb77e;
}
.content {
  width: 50%;
  height: 470px;
  display: flex;
  flex-direction: column;
}
.status {
  width: 100%;
  height: 30px;
  display: flex;
  align-items: center;
}
.status span {
  width: 100px;
  height: 100%;
  color: #116a41;
  background-color: #def9ec;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 4px;
}
.title {
  width: 70%;
  height: 100px;
  display: flex;
  align-items: center;
}
.rate {
  width: 100%;
  height: 30px;
  display: flex;
  align-items: center;
}
.rate i {
  margin-right: 5px;
}
.price {
  width: 40%;
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.discount-pirce {
  font-size: 72px;
  font-weight: 700;
  color: #3bb77e;
}
.main-pirce {
  font-size: 32px;
  font-weight: 700;
  color: #b6b6b6;
  text-decoration: line-through;
}
.info {
  width: 70%;
  height: 70px;
  display: flex;
  align-items: center;
}
.action {
  width: 50%;
  height: 70px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.qty input {
  width: 100px;
  height: 40px;
  border-radius: 6px;
  border: 1px solid #3bb77e;
  color: #3bb77e;
  font-size: 20px;
}
.qty input:focus {
  outline: none;
}
.add {
  width: 135px;
  height: 40px;
  border-radius: 6px;
  border: 1px solid #3bb77e;
  color: #ffffff;
  background-color: #3bb77e;
  font-size: 16px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}
.add i {
  margin-right: 8px;
}
.wishlist {
  width: 40px;
  height: 40px;
  border-radius: 6px;
  border: 1px solid #87928d;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}
.chnage {
  width: 40px;
  height: 40px;
  border-radius: 6px;
  border: 1px solid #87928d;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}
.more {
  margin-top: 50px;
  width: 100%;
  height: 200px;
  display: flex;
  justify-content: center;
}
.more-wrapper {
  border: 1px solid #87928d;
  width: 85%;
  height: 100%;
  display: flex;
  align-items: center;
  flex-direction: column;
  border-radius: 12px;
}
.more-navbar {
  width: 90%;
  height: 50px;
  display: flex;
  align-items: center;
  cursor: pointer;
}
.more-button {
  width: 150px;
  height: 30px;
  margin-right: 12px;
  border-radius: 12px;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 1px solid gray;
}
.more-content {
  margin-top: 20px;
  width: 90%;
  display: flex;
  align-items: center;
}
.more-active {
  color: #3bb77e;
}
</style>
