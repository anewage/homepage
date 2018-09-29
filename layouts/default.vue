<template>
  <v-app>
    <v-toolbar color="white" fixed app>
      <v-btn :to="'/'" nuxt icon class="user-button">
        <v-avatar
          :tile="false"
          :size="45">
          <img src="/logo.jpg" alt="Amir Haghighati">
        </v-avatar>
      </v-btn>
      <v-toolbar-title>Amir Haghighati</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-toolbar-items class="hidden-sm-and-down">
        <v-btn flat>Link One</v-btn>
        <v-btn flat>Link Two</v-btn>
        <v-btn flat>Link Three</v-btn>
      </v-toolbar-items>
    </v-toolbar>
    <v-content class="white">
      <v-container fluid>
        <nuxt />
      </v-container>
    </v-content>
    <v-footer
      :fixed="fixed"
      app
    >
      <span>&copy; 2017</span>
    </v-footer>
  </v-app>
</template>

<script>
  export default {
    data() {
      return {
        clipped: false,
        drawer: true,
        fixed: false,
        items: [
          { icon: 'apps', title: 'Welcome', to: '/' },
          { icon: 'bubble_chart', title: 'Inspire', to: '/inspire' }
        ],
        miniVariant: false,
        right: true,
        rightDrawer: false,
        title: 'Vuetify.js'
      }
    }
  }
</script>

<style>
  .title {
    overflow: visible;
  }
  .user-avatar {
    width: 45px;
  }
  .user-button {
    margin-left: 20px;
    margin-right: 20px;
  }
</style>
