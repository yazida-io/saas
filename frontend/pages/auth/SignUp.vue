<script setup>
import {reactive, ref} from "vue";
import useAuthStore from "../../stores/useAuthStore";
import {useRouter} from "vue-router";

const form = reactive({
    name: 'Mouctar',
    email: 'mouctar@saas.test',
    password: 'mouctar@saas.test',
    password_confirmation: 'mouctar@saas.test',
});

const submitting = ref(false);

const authStore = useAuthStore();

const router = useRouter();

const signUp = () => {
    submitting.value = true;
    authStore.signUp(form)
        .then(() => router.push({name: 'home'}))
        .finally(() => (submitting.value = false))
}

</script>

<template>
    <div class="flex-center h-full w-full">
        <v-sheet width="700" class="p-4 space-y-7" rounded="lg">
            <h1 class="text-center">Sign Up</h1>
            <v-divider></v-divider>
            <div>
                <v-text-field
                    v-model="form.name"
                    label="Name"
                    required
                    :disabled="submitting"
                ></v-text-field>
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
                <v-text-field
                    v-model="form.password_confirmation"
                    label="Confirm Password"
                    required
                    type="password"
                    :disabled="submitting"
                ></v-text-field>
                <v-btn
                    color="primary"
                    block
                    @click="signUp"
                    :loading="submitting"
                >
                    Sign Up
                </v-btn>
            </div>
        </v-sheet>
    </div>
</template>
