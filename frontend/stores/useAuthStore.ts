import {defineStore} from "pinia";
import {useLocalStorage} from "@vueuse/core";
import {$post} from "../composables/useApi";

export default defineStore({
    id: 'auth-store',
    state: () => ({
        user: useLocalStorage('auth::user', {name: '', email: ''}),
        token: useLocalStorage('auth::token', '')
    }),
    getters: {
        isAuthenticated: (state) => !!state.token,
    },
    actions: {
        signIn({email, password}) {
            return $post('login', {email, password})
                .then((data) => {
                    this.user = data.user
                    this.token = data.token
                })
        },
        signUp(credentials) {
            return $post('register', credentials)
                .then((data) => {
                    console.log(data)
                    this.user = data.user
                    this.token = data.token
                }).catch(console.log)
        },
        signOut() {
            return $post('logout').finally(() => {
                this.user = {name: '', email: ''}
                this.token = ''
            })
        }
    }
});
