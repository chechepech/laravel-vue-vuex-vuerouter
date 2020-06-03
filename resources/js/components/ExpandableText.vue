<template>
  <div>
    <p :class="{contracted: contracted}">
      <slot></slot>
    </p>
    <button v-if="contracted" class="more" @click="contracted = false">
      + More
    </button>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        contracted: true
      }
    }
  }
</script>