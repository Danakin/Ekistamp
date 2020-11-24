const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    purge: [
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                ekigreen: "#008D00",
                ekigray: "#F2F2F2",
            },
        },
    },

    variants: {
        opacity: ["responsive", "hover", "focus", "disabled"],
    },

    plugins: [require("@tailwindcss/ui"), require("@tailwindcss/custom-forms")],
};
