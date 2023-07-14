import axios from "axios";
import useAuthStore from "../stores/useAuthStore";


const instance = axios.create({
    baseURL: `${window.location.protocol}//${window.location.host}/api/`,
})

instance.interceptors.request.use((config) => {
    const authStore = useAuthStore();
    if (authStore.token) {
        config.headers["Authorization"] = `Bearer ${authStore.token}`;
    }
    return config;
})


const $get = (uri: string, params?: any) => instance.get(uri, { params }).then(({ data }) => data);
const $post = (uri: string, data?: any) => instance.post(uri, data).then(({ data }) => data)
    .catch(({ response }) => response);

const $put = (uri: string, data?: any) => instance.put(uri, data).then(({ data }) => data);

const $delete = (uri: string, data?: any) => instance.delete(uri, data).then(({ data }) => data);


export {
    $get,
    $post,
    $put,
    $delete
}
