<template>
  <div>
    <div id="toolbar">
    	<router-link :to="{name: 'home'}">
			<img class="icon" src="/images/logo.png">
			<h1>Vuebnb</h1>
  		</router-link>
        <ul class="links">
          <li v-if="$store.state.auth">
            <router-link :to="{name: 'saved'}">Saved</router-link>
          </li>
          <li v-if="$store.state.auth">
            <a @click="logout">Log Out</a>
            <form style="display: none;" action="/logout" method="POST" id="logout">
              <input type="hidden" name="_token" style="display: none;" :value="csrf_token">
            </form>
          </li>
          <li v-else>
            <router-link :to="{name: 'login'}">Log In</router-link>
          </li>
        </ul>
    </div>
    <router-view></router-view>
    <custom-footer></custom-footer>
  </div>
</template>
<script type="text/javascript">
import CustomFooter from './CustomFooter.vue';

	export default {
    components: {
      CustomFooter
    },
    data() {
      return {
        csrf_token: window.csrf_token
      }
    },
    methods: {
      logout() { document.getElementById('logout').submit(); }
    }
  }
</script>