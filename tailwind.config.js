/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.ts",
        "./frontend/**/*.js",
        "./frontend/**/*.ts",
        "./frontend/**/*.vue",
    ],
    theme: {
        extend: {
            container: {
                center: true,
            }
        },
    },
    plugins: [],
}

