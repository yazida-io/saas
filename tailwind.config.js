/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
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
            },
            colors: {
                black: "#020924",
                primary: {
                    light: "#D1C4E9",
                    dark: "#281267",
                    DEFAULT: "#673AB7",
                    text: "#161616"
                },
                secondary: {
                    DEFAULT: "#FF5722",
                    text: "#757575"
                }
            },
            keyframes: {
                wiggle: {
                    '0%': { transform: 'rotate(-3deg) translateY(-100px)' },
                    '50%': { transform: 'rotate(0deg) translateY(0px)' },
                    '100%': { transform: 'rotate(-3deg) scale(1) translateY(-100px)' },
                }
            },
            animation: {
                wiggle: 'wiggle 11s ease-in-out infinite',
            }
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
}

