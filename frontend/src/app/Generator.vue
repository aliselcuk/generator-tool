<template>
<div class="text-copy-primary">
Generator
<!--  <sv-page :meta="meta">-->
<!--    {{ response }}-->
<!--    dfdf-->
<!--  </sv-page>-->
</div>
</template>

<script>
export default {
  name: 'Generator',

  data() {
    return {
      response: null,
      meta:  {
        title: 'Gen Title',
      }
    }
  },

  created() {
    this.fetch()
  },

  methods: {
    async fetch() {
      const resp = await this.$api.get('sv/tools/generator')

      this.response = resp.data

    }
  },
}
</script>

<style scoped>

</style>