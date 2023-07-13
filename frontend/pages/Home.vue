<script setup lang="ts">
import useUserStore from "../stores/useUserStore";

const userStore = useUserStore()

</script>

<template>
    <div>
        <h1 class="bg-pink-200">
            Welcome to the home page, {{ userStore.name }}!
        </h1>
    </div>
</template>
