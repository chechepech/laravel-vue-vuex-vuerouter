<template>
  <div class="listing-save" @click.stop="toggleSaved()">
    <button v-if="button">
      <i :class="classes"></i>
      {{message}}
    </button>
    <i v-else :class="classes"></i>
  </div>
</template>
<script>
  export default {
    props: [ 'id', 'button'],
    computed: {
    isListingSaved() {
      //pendiente revisar
        return this.$store.state.saved.find(saved => saved === this.id);
      },
      classes() {
        let saved = this.isListingSaved;
        return {
          'fa': true,
          'fa-lg': true,
          'fa-heart': saved,
          'fa-heart-o': !saved
      }
    },
    message(){
      return this.isListingSaved ? 'Saved' : 'Save';
    }
  },
  methods: {
      toggleSaved() {
        this.$store.dispatch('toggleSaved', this.id);
      }
    }
}
</script>
<style>
  .listing-save {
    position: absolute;
    top: 20px;
    right: 20px;
    cursor: pointer;
  }
  .listing-save .fa-heart-o {
    color: #F76A3F;
  }
  .listing-save .fa-heart {
    color: #F76A3F;
  }

  .listing-save i {
    padding-right: 4px;
  }

  .listing-save button .fa-heart-o {
    color: #F76A3F;
  }
</style>