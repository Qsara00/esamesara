<template>
  <div>
    <h1 class="flex flex-col items-center text-lg p-2 font-medium">TERRENI AGRICOLI</h1>
    <div v-for="platform in platforms" :key="platform.id" class="flex ml-10 leading-6">
      <h1 @click="goToView(platform)">Terreno agricolo: {{platform.comune}}</h1>
      <button @click="edit(platform.id)" class="border-2 px-4 rounded-full border-blue-400">Edit</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "Home",
  data() {
    return {
      platforms: []
    }
  },
  async mounted() {
    let response = await this.$axios.get('http://localhost:8000/api/platforms');
      console.log(response.data);
      console.log(response.status);
      this.platforms = response.data;
  },
  methods: {
        goToView(platform) {
            this.$router.push({
                name: 'view',
                params: {
                    id: platform.id
                }
            });
        },

        edit(id) {
            this.$router.push('/edit/' + id)
        }
    }
}
</script>

<style>

</style>