const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            maxWidth: {
                '1/4': '25%',
                '1/2': '50%',
                '3/4': '75%',
                '540': '540px',
                '720': '720px',
                '960': '960px',
                '1140': '1140px'
            },
            flex: {
                '1/4': '0 0 25%',
                '1/2': '0 0 50%',
                '1': '0 0 100%'

            },
            spacing: {
                '1': '1rem',
                '5px': '5px',
                '10px': '10px',
                '15px': '15px',
                '20px': '20px',
                '25px': '25px',
                '30px': '30px',
                '40px': '40px',
                '50px': '50px',
                '80px': '80px'
            },
            colors: {
                'nav-link': '#66c323',
                '66c323': '#66c323',
                '5cb31e': '#5cb31e',
                '4ca30e': '#4ca30e'
            },
            textColor: {
                'nav-link-color': '#66c323',
                'link-300': '#66c323'
            },
            backgroundColor: {
                'div-gray-200': '#f8f9fa'
            },
            fontSize: {
                '16px': '16px',
                '18px': '18px'
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            backgroundColor: ['active'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
