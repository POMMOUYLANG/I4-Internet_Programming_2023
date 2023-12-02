<template>
  <!-- not use -->
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
import MenuItemAll from "./MenuItemAll.vue";
import MenuItems from "./MenuItems.vue";

library.add(fas);
export default {
  name: "MenuItemBig",
  components: {
    FontAwesomeIcon,
    MenuItemAll,
    MenuItems,
  },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Kantumruy+Pro:ital,wght@1,300;1,400;1,500;1,600;1,700&family=Poppins:wght@300;400;500;600;800&family=Quicksand:wght@400;600;700&display=swap");
@import "https://unicons.iconscout.com/release/v4.0.0/css/line.css";
.container_item {
  width: 1500px;
  height: 50px;
  display: flex;
  border-top: 2px solid rgba(229, 229, 229, 1);
  border-bottom: 2px solid rgba(229, 229, 229, 1);
  padding: 6px 0px 6px 0px;
}
.container_item .item_left {
  width: 85%;
  height: 100%;
  display: flex;
  justify-content: space-between;
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
