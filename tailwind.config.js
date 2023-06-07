/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            lineHeight: {
                'normal': '1.35',
            },
            colors: {
                'primary': '#ff0000',
                "bg" : {
                    50 : "#f9f9f9",
                    100 : "#f3f3f3",
                    200 : "#e0e0e0",
                    300 : "#c7c7c7",
                    400 : "#a3a3a3",
                    500 : "#7a7a7a",
                    600 : "#5c5c5c",
                    700 : "#3d3d3d",
                    800 : "#2b2b2b",
                    900 : "#1d1d1d",
                    950 : "#121212",
                }
            },
        },
    },
    plugins: [],
}

