<script setup lang="ts">
import {useRoute} from "vue-router";
import {ref, watch} from "vue";

const route = useRoute()

const currentLayout = ref<string>(route.meta?.layout || 'guest-layout')

watch(() => route.meta?.layout, (path) => {
    currentLayout.value = path || 'guest-layout'
})
</script>

<template>
    <component :is="currentLayout">
        <router-view/>
    </component>
</template>
