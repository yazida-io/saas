import axios from "axios";


const instance = axios.create({
    baseURL: `${window.location.protocol}//${window.location.host}/api/`,
})

instance.interceptors.request.use((config) => {
    const token = localStorage.getItem("token");
    if (token) {
        config.headers["Authorization"] = `Bearer ${token}`;
    }
    return config;
})


const $get = (uri: string, params?: any) => instance.get(uri, { params }).then(({ data }) => data);
const $post = (uri: string, data?: any) => instance.post(uri, data).then(({ data }) => data);

const $put = (uri: string, data?: any) => instance.put(uri, data).then(({ data }) => data);

const $delete = (uri: string, data?: any) => instance.delete(uri, data).then(({ data }) => data);


export {
    $get,
    $post,
    $put,
    $delete
}
