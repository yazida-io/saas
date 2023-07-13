import {defineStore} from "pinia";

const useUserStore = defineStore({
    id: 'user',
    state: () => ({
        name: 'John Doe',
        age: 30
    })
});

export default useUserStore;
