<template>
  <div class="header">
    <div
      class="header-img"
      :style="headerImageStyle"
      @click="$emit('header-clicked')">
      <listing-save :id="id" :button="true"></listing-save>
      <button class="view-photos">View Photos</button>
    </div>
  </div>
</template>
<script>
  import ListingSave from './ListingSave.vue';
  export default {
    components: { ListingSave },
    props: ['image-url', 'id'],
    computed: {
      headerImageStyle() {
        return {
          'background-image': `url(${this.imageUrl})`
        };
      }
    }
  }
</script>