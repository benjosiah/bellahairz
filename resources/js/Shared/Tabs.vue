<template lang="html">
  <div class="">
    <ul class="flex overflow-scroll">
      <li v-for='(tab, index) in tabs'
        :key='tab.title'
        @click='selectTab(index)'
        :class='{"brand-text border-t-0 border-l-0 border-r-0 border-b border-2 border-brand-green px-4 py-1.5 font-black": (index == selectedIndex)}' class="px-4 py-1.5 text-sm text-gray-500">
        {{ tab.title }}
      </li>
    </ul>
    <slot></slot>
  </div>
</template>

<script>
export default {
  props: {
    mode: {
      type: String,
      default: 'light'
    }
  },
  data () {
    return {
      selectedIndex: 0,
      tabs: []
    }
  },
  created () {
    this.tabs = this.$children
  },
  mounted () {
    this.selectTab(0)
  },
  methods: {
    selectTab (i) {
      this.selectedIndex = i
      this.tabs.forEach((tab, index) => {
        tab.isActive = (index === i)
      })
    }
  }
}
</script>
