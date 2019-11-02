<template>
  <div class="sv-page  flex-grow">
    <sv-page-header title="Resource Generator"></sv-page-header>

    <div class="sv-page-body flex flex-col md:flex-row p-0 sm:p-2 sm:pb-4 md:p-4 md:pb-12"  >
      <sv-card class="w-full"   title="Generate">

        <template slot="body">
          {{ response }}
        </template>
      </sv-card>
    </div>
  </div>
</template>

<script>
import { SvPageHeader } from 'superv-js'

export default {
  name: 'Generator',
  components: { SvPageHeader },
  data() {
    return {
      response: null,
      meta: {
        title: 'Generator',
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