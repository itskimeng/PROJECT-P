<script>
import { computed } from 'vue'
import { useRoute } from 'vue-router'
import { collapsed } from './state'
export default {
  props: {
    to: { type: String, required: true },
    class: {type: String, required: true},
    icon: { type: String, required: true },
  },
}

</script>

<template>  
  <router-link :to="to" :class="class" >
    <i class="icon" :class="icon" />
    <transition name="fade">
      <span>
        <slot />
      </span>
    </transition>
  </router-link>

</template>

<style scoped>

.link {
  display: flex;
  align-items: center;
  cursor: pointer;
  position: relative;
  font-weight: 400;
  user-select: none;
  margin: 0.1em 0;
  padding: 1.5em;
  border-radius: 0.25em;
  height: 1.5em;
  color: rgb(58, 4, 74);
  text-decoration: none;
}
.link:hover {
  background-color: var(--sidebar-item-hover);
  color:#fff;
}
.router-link-active {
  background-color: var(--sidebar-item-active);
  color:#fff;
}
.link .icon {
  flex-shrink: 0;
  width: 25px;
  margin-right: 10px;
}
</style>