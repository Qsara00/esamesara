<template>
  <div class="flex flex-col items-center p-5 space-y-3">
    <div class="flex flex-col w-1/3">
      <label for="comune">Comune: </label>
      <input id="comune" type="text" placeholder="comune" v-model="platform.comune" class="outline-none border-2 px-2 rounded-lg py-1">
    </div>
    <div class="flex flex-col w-1/3">
      <label for="foto">Foto: </label>
      <input id="foto" type="string" placeholder="foto" v-model="platform.foto" class="outline-none border-2 px-2 rounded-lg py-1">
    </div>
    <div class="flex flex-col w-1/3">
      <label for="dimensione">Dimensione: </label>
      <input id="dimensione" type="float" placeholder="dimensione" v-model="platform.dimensione" class="outline-none border-2 px-2 rounded-lg py-1">
    </div>
    <div class="flex flex-col w-1/3">
      <label for="fogliocatasto">Foglio catastale: </label>
      <input id="fogliocatasto" type="string" placeholder="fogliocatasto" v-model="platform.fogliocatasto" class="outline-none border-2 px-2 rounded-lg py-1">
    </div>
    <div class="flex flex-col w-1/3">
      <label for="mappacatasto">Mappa catastale: </label>
      <input id="mappacatasto" type="string" placeholder="mappacatasto" v-model="platform.fogliocatasto" class="outline-none border-2 px-2 rounded-lg py-1">
    </div>

  </div>
</template>

<script>
export default {
  name:"Create",
  data() {
    return {
      platform: {},
      idEdit: false
    };
  },
  mounted() {
    if(this.$route.name == 'edit') {
      this.isEdit = true
    }
  },
  methods: {
    async create() {
      await this.$axios.post('http://localhost:8000/api/platforms/create', this.platform)
      this.$router.push({
        name: 'home'
      })
    }
  },
};
</script>

<style>

</style>