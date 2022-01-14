<template>
  <div class="bg-blue-300 flex h-16 items-center justify-center">
    <div v-for="link in navLinks" :key="link.code"
    @click="goToLink(link)"
    :class="{
        'text-black': link.code != currentRoute,
        'text-white': link.code == currentRoute
    }"
    class="mx-10">
      {{link.label}}
    </div> 
  </div>
</template>

<script>
export default {
  data() {
    return {
      navLinks: [
        {
          code: 'home',
          label: 'Home'
        },
        {
          code: 'create',
          label: 'Nuovo terreno'
        },
      ]
    }
  },
  computed: {
    currentRoute() {
      return this.$route.matched[0].name;
    }
  },
  methods: {
        goToLink(link) {
            this.$router.push({
                name: link.code
            })
        }
    }
}
</script>

<style>

</style>
