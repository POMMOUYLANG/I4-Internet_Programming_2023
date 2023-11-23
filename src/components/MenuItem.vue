<template>
  <div class="container_item">
    <div class="item_left">
      <div class="browser_cate">
        <svg width="17" height="17" viewBox="0 0 17 17" fill="none">
          <g clip-path="url(#clip0_1579_709)">
            <path
              d="M8.02297 7.85042H0.689636V2.51709C0.689636 1.98666 0.90035 1.47795 1.27542 1.10288C1.6505 0.727804 2.1592 0.51709 2.68964 0.51709L8.02297 0.51709V7.85042ZM2.02297 6.51709H6.68964V1.85042H2.68964C2.51283 1.85042 2.34326 1.92066 2.21823 2.04569C2.09321 2.17071 2.02297 2.34028 2.02297 2.51709V6.51709Z"
              fill="white" />
            <path
              d="M16.6897 7.85042H9.35632V0.51709H14.6897C15.2201 0.51709 15.7288 0.727804 16.1039 1.10288C16.4789 1.47795 16.6897 1.98666 16.6897 2.51709V7.85042ZM10.6897 6.51709H15.3563V2.51709C15.3563 2.34028 15.2861 2.17071 15.1611 2.04569C15.036 1.92066 14.8665 1.85042 14.6897 1.85042H10.6897V6.51709Z"
              fill="white" />
            <path
              d="M8.02297 16.517H2.68964C2.1592 16.517 1.6505 16.3063 1.27542 15.9313C0.90035 15.5562 0.689636 15.0475 0.689636 14.517L0.689636 9.18372H8.02297V16.517ZM2.02297 10.517V14.517C2.02297 14.6939 2.09321 14.8634 2.21823 14.9885C2.34326 15.1135 2.51283 15.1837 2.68964 15.1837H6.68964V10.517H2.02297Z"
              fill="white" />
            <path
              d="M14.6897 16.517H9.35632V9.18372H16.6897V14.517C16.6897 15.0475 16.4789 15.5562 16.1039 15.9313C15.7288 16.3063 15.2201 16.517 14.6897 16.517ZM10.6897 15.1837H14.6897C14.8665 15.1837 15.036 15.1135 15.1611 14.9885C15.2861 14.8634 15.3563 14.6939 15.3563 14.517V10.517H10.6897V15.1837Z"
              fill="white" />
          </g>
        </svg>
        <span>Browser All Category</span>
        <font-awesome-icon
          :icon="['fas', 'chevron-down']"
          style="font-size: 15px" />
      </div>
      <div class="list_menuitem">
        <ul>
          <div class="fire">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="19"
              height="19"
              viewBox="0 0 20 21"
              fill="none">
              <g clip-path="url(#clip0_1579_722)">
                <path
                  d="M13.6667 3.9104C12.6667 3.0629 11.6367 2.18373 10.5942 1.14457L10 0.554565L9.41669 1.1454C7.54002 3.02707 6.65335 5.91623 6.26835 7.64956C5.97366 7.19282 5.75499 6.69131 5.62085 6.16456L5.26835 4.80373L4.24336 5.76707C2.44752 7.4529 1.25002 9.1254 1.25002 11.8037C1.23325 13.7356 1.86245 15.6177 3.0377 17.1511C4.21294 18.6844 5.86684 19.7812 7.73669 20.2671C8.30008 20.4041 8.87511 20.4878 9.45419 20.5171C9.63525 20.54 9.81752 20.5519 10 20.5529C10.0959 20.5529 10.1892 20.5446 10.2825 20.5387C12.5526 20.4704 14.7068 19.5202 16.2877 17.8896C17.8687 16.259 18.7519 14.0765 18.75 11.8054C18.75 8.22706 16.3942 6.22706 13.6667 3.9104ZM10.1667 18.8721C10.0834 18.8721 10 18.8804 9.91169 18.8796C9.16162 18.8566 8.44984 18.543 7.92674 18.005C7.40363 17.467 7.11017 16.7466 7.10835 15.9962C7.10835 14.9396 7.67502 14.4129 8.95752 13.3212C9.28085 13.0462 9.63252 12.7471 10.0025 12.4046C10.3267 12.6987 10.6417 12.9654 10.9325 13.2129C12.2209 14.3062 12.8934 14.9271 12.8934 15.9937C12.892 16.7308 12.6088 17.4395 12.1019 17.9746C11.595 18.5097 10.9026 18.8308 10.1667 18.8721ZM14.35 17.3962L14.3334 17.4079C14.4829 16.9522 14.5594 16.4758 14.56 15.9962C14.56 14.1087 13.3217 13.0571 12.0117 11.9446C11.5475 11.5512 11.0684 11.1446 10.59 10.6662L10 10.0771L9.41085 10.6662C8.87085 11.2054 8.34252 11.6554 7.87669 12.0521C6.57002 13.1637 5.44085 14.1246 5.44085 15.9962C5.44263 16.4964 5.5271 16.9928 5.69085 17.4654C4.8234 16.7993 4.12166 15.9417 3.64043 14.9596C3.1592 13.9775 2.9115 12.8974 2.91669 11.8037C2.90298 10.3414 3.46897 8.93317 4.49085 7.88706C4.66687 8.24417 4.87554 8.58423 5.11419 8.9029C5.28849 9.1381 5.52781 9.31715 5.80264 9.41799C6.07747 9.51884 6.3758 9.53705 6.66085 9.4704C6.95084 9.40584 7.2161 9.25912 7.42492 9.04779C7.63373 8.83647 7.77727 8.56947 7.83835 8.27873C8.18729 6.36344 8.94195 4.54496 10.0517 2.9454C10.9309 3.77873 11.8017 4.51623 12.5875 5.18373C15.1975 7.4004 17.0875 9.00206 17.0875 11.8087C17.0896 12.8876 16.8437 13.9525 16.3689 14.9213C15.8941 15.8901 15.2031 16.7369 14.3492 17.3962H14.35Z"
                  fill="#3BB77E" />
              </g>
            </svg>
            <li><a href="">Hot Deals</a></li>
          </div>
          <li><a href="">Home</a></li>
          <div class="food">
            <li><a href="">Food</a></li>
            <font-awesome-icon
              :icon="['fas', 'chevron-down']"
              style="font-size: 10px; color: rgba(126, 126, 126, 1)" />
          </div>
          <div class="vege">
            <li><a href="">Vegetable</a></li>
            <font-awesome-icon
              :icon="['fas', 'chevron-down']"
              style="font-size: 10px; color: rgba(126, 126, 126, 1)" />
          </div>
          <li><a href="">Drink</a></li>
          <li><a href="">Cookies</a></li>
          <div class="seafood">
            <li><a href="">Meat & Seafood</a></li>
            <font-awesome-icon
              :icon="['fas', 'chevron-down']"
              style="font-size: 10px; color: rgba(126, 126, 126, 1)" />
          </div>
          <li><a href="">Bakery</a></li>
        </ul>
      </div>
    </div>
    <div class="item_right">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="36"
        height="30"
        viewBox="0 0 36 30"
        fill="none">
        <path
          d="M31.5 15.636V13.5C31.5 9.91958 30.0777 6.4858 27.5459 3.95406C25.0142 1.42232 21.5804 0 18 0C14.4196 0 10.9858 1.42232 8.45404 3.95406C5.9223 6.4858 4.49999 9.91958 4.49999 13.5V15.636C2.92673 16.3287 1.63919 17.5409 0.852919 19.0696C0.0666509 20.5983 -0.170622 22.3506 0.180823 24.0334C0.532268 25.7161 1.4511 27.227 2.78349 28.3132C4.11589 29.3994 5.78097 29.9949 7.49999 30H10.5V15H7.49999V13.5C7.49999 10.7152 8.60623 8.04451 10.5754 6.07538C12.5445 4.10625 15.2152 3 18 3C20.7848 3 23.4555 4.10625 25.4246 6.07538C27.3937 8.04451 28.5 10.7152 28.5 13.5V15H25.5V27H19.5V30H28.5C30.219 29.9949 31.8841 29.3994 33.2165 28.3132C34.5489 27.227 35.4677 25.7161 35.8191 24.0334C36.1706 22.3506 35.9333 20.5983 35.1471 19.0696C34.3608 17.5409 33.0732 16.3287 31.5 15.636ZM7.49999 27C6.30651 27 5.16192 26.5259 4.31801 25.682C3.47409 24.8381 2.99999 23.6935 2.99999 22.5C2.99999 21.3065 3.47409 20.1619 4.31801 19.318C5.16192 18.4741 6.30651 18 7.49999 18V27ZM28.5 27V18C29.6935 18 30.8381 18.4741 31.682 19.318C32.5259 20.1619 33 21.3065 33 22.5C33 23.6935 32.5259 24.8381 31.682 25.682C30.8381 26.5259 29.6935 27 28.5 27Z"
          fill="#253D4E" />
      </svg>
      <div class="time">
        <div class="lg_time">1900 - 8888</div>
        <div class="sm_day">24/7 Support Center</div>
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
  name: "MenuItem",
  components: {
    FontAwesomeIcon,
  },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");
@import "https://unicons.iconscout.com/release/v4.0.0/css/line.css";
.container_item {
  width: 1500px;
  height: 50px;
  display: flex;
}
.container_item .item_left {
  width: 85%;
  height: 100%;
  display: flex;
  justify-content: start;
  align-items: center;
}
.container_item .item_left .browser_cate {
  width: 240px;
  height: 44px;
  font-family: "Quicksand", sans-serif;
  font-size: 16px;
  font-style: normal;
  font-weight: 700;
  border-radius: 5px;
  background-color: rgba(59, 183, 126, 1);
  color: rgba(255, 255, 255, 1);
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 15px;
}
.container_item .item_left .list_menuitem ul {
  display: flex;
  list-style: none;
  display: flex;
  justify-content: start;
  align-items: center;
  gap: 32px;
}
.container_item .item_left .list_menuitem ul li a {
  text-decoration: none;
  color: rgba(37, 61, 78, 1);
  font-family: "Quicksand", sans-serif;
  font-size: 16px;
  font-style: normal;
  font-weight: 700;
}
.fire {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 3px;
}
.food {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 5px;
}
.vege {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 5px;
}
.seafood {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 5px;
}
.container_item .item_right {
  font-family: "Quicksand", sans-serif;
  width: 15%;
  height: 100%;
  display: flex;
  justify-content: end;
  align-items: center;
  gap: 13px;
}
.container_item .item_right .time {
  margin-bottom: 5px;
}
.container_item .item_right .lg_time {
  font-family: "Quicksand", sans-serif;
  font-size: 24px;
  font-style: normal;
  font-weight: 700;
  color: rgba(59, 183, 126, 1);
}
.container_item .item_right .sm_day {
  font-family: "Quicksand", sans-serif;
  font-size: 10px;
  font-style: normal;
  font-weight: 400;
  color: rgba(126, 126, 126, 1);
}
</style>
