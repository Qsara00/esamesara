<template>
    <div>
        <h1 class="flex flex-col items-center m-4 text-lg font-medium">DETTAGLI</h1>
        {{}}
    </div>
</template>

<script>
export default {
    name:"View",
    data() {
      return {
        platform: {},
      }
    },
    async mounted() {
      let platformId = this.$route.params.id;
      let response = await this.$axios.get('http://localhost:8000/api/platforms' + platformId);
      this.platform = response.data;
    }
}

</script>

<style>

</style>