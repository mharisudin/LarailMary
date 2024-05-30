/** @type {import('tailwindcss').Config} */
export default {
    content: [
		'./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
		 './storage/framework/views/*.php',
		 './resources/views/**/*.blade.php',
		 "./vendor/robsontenorio/mary/src/View/Components/**/*.php"
	],

    theme: {
        extend: {
            fontFamily: {
                sans: ['ui-sans-serif', 'system-ui', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
            },
        },
    },

    plugins: [
		require("daisyui")
	],

    daisyui: {
        darkMode: 'class',
        themes: [
            {
                light: {
                    ...require("daisyui/src/theming/themes")["light"],
                    "primary": "#3b82f6",
                    "neutral": "#000000",
                    ".btn": {
                        "background-color": "#ffffff",
                        "color": "#000000",
                        "border-color": "#d4d4d8",
                        "height": "2.5rem",
                        "min-height": "2.5rem",
                    },
                    ".btn:hover": {
                        "background-color": "#d4d4d8",
                        "color": "#000000",
                    },
                    ".btn-neutral": {
                        "background-color": "#000000",
                        "color": "#ffffff",
                        "border-color": "#000000",
                    },
                    ".btn-neutral:hover": {
                        "background-color": "#18181b",
                        "color": "#ffffff",
                    },

                },
                dark: {
                    ...require("daisyui/src/theming/themes")["dark"],
                    "base-100": "#000000",
                    "primary": "#ffffff",
                    "neutral": "#ffffff",
                    ".btn": {
                        "background-color": "#000000",
                        "color": "#ffffff",
                        "border-color": "#27272a",
                        "height": "2.5rem",
                        "min-height": "2.5rem",
                    },
                    ".btn:hover": {
                        "background-color": "#27272a",
                        "color": "#ffffff",
                    },
                    ".btn-neutral": {
                        "background-color": "#ffffff",
                        "color": "#000000",
                        "border-color": "#000000",
                    },
                    ".btn-neutral:hover": {
                        "background-color": "#e4e4e7",
                        "color": "#000000",
                        "border-color": "#000000",
                    },
                    ".text-gray-500": {
                        "color": "#d4d4d8",
                    },
                    ".input-primary": {
                        "color": "#d4d4d8",
                    },
                },
            },
        ], // false: only light + dark | true: all themes | array: specific themes like this ["light", "dark", "cupcake"]
        base: true, // applies background color and foreground color for root element by default
        styled: true, // include daisyUI colors and design decisions for all components
        utils: true, // adds responsive and modifier utility classes
        prefix: "", // prefix for daisyUI classnames (components, modifiers and responsive class names. Not colors)
        logs: true, // Shows info about daisyUI version and used config in the console when building your CSS
        themeRoot: ":root", // The element that receives theme color CSS variables
    },

};
