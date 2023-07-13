<script setup>

</script>

<template>
    <v-app>
        <v-navigation-drawer
            model-value
            class="pt-4"
            color="grey-lighten-3"
        >
            <v-list rounded="xl" class="pa-2" variant="tonal" density="compact">
                <v-list-item
                    title="Home"
                    :to="{ name: 'home' }"
                    rounded="xl"
                    color="primary"
                    prepend-icon="mdi-home"
                />
            </v-list>
        </v-navigation-drawer>

        <v-main class="container">
            <slot/>
        </v-main>
    </v-app>
</template>
