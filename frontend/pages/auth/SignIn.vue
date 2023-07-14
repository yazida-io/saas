<script setup>
import {reactive, ref} from "vue";
import useAuthStore from "../../stores/useAuthStore";
import {useRouter} from "vue-router";

const router = useRouter();

const form = reactive({
    email: 'mouctar@saas.test',
    password: 'mouctar@saas.test',
});

const authStore = useAuthStore();

const submitting = ref(false);

const signIn = () => {
    submitting.value = true;
    authStore.signIn(form)
        .then(() => router.push({name: 'home'}))
        .finally(() => (submitting.value = false))
}

</script>

<template>
    <div class="flex-center h-full w-full">
        <v-sheet width="400" class="p-4 space-y-7" rounded="lg">
            <h1 class="text-center">Sign In</h1>
            <v-divider></v-divider>
            <div>
                <v-text-field
                    v-model="form.email"
                    label="Email"
                    required
                    :disabled="submitting"
                ></v-text-field>
                <v-text-field
                    v-model="form.password"
                    label="Password"
                    required
                    type="password"
                    :disabled="submitting"
                ></v-text-field>
                <v-btn
                    color="primary"
                    block
                    @click="signIn"
                    :loading="submitting"
                >
                    Sign In
                </v-btn>
            </div>
        </v-sheet>
    </div>
</template>
