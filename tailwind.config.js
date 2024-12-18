import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                'spin-slow': 'spin 4s linear infinite',
            },
        },

        colors: {
            'primary': 'rgb(68 94 145)',
            'on-primary': 'rgb(255 255 255)',
            'primary-container': 'rgb(216 226 255)',
            'on-primary-container': 'rgb(0 26 66)',
            'secondary': 'rgb(87 94 113)',
            'on-secondary': 'rgb(255 255 255)',
            'secondary-container': 'rgb(219 226 249)',
            'on-secondary-container': 'rgb(20 27 44)',
            'tertiary': 'rgb(113 85 115)',
            'on-tertiary': 'rgb(255 255 255)',
            'tertiary-container': 'rgb(252 215 251)',
            'on-tertiary-container': 'rgb(41 19 45)',
            'error': 'rgb(186 26 26)',
            'on-error': 'rgb(255 255 255)',
            'error-container': 'rgb(255 218 214)',
            'on-error-container': 'rgb(65 0 2)',
            'background': 'rgb(249 249 255)',
            'on-background': 'rgb(26 27 32)',
            'surface': 'rgb(249 249 255)',
            'on-surface': 'rgb(26 27 32)',
            'surface-variant': 'rgb(225 226 236)',
            'on-surface-variant': 'rgb(68 71 79)',
            'outline': 'rgb(117 119 127)',
            'outline-variant': 'rgb(197 198 208)',
            'shadow': 'rgb(0 0 0)',
            'scrim': 'rgb(0 0 0)',
            'inverse-surface': 'rgb(47 48 54)',
            'inverse-on-surface': 'rgb(240 240 247)',
            'inverse-primary': 'rgb(174 198 255)',
            'primary-fixed': 'rgb(216 226 255)',
            'on-primary-fixed': 'rgb(0 26 66)',
            'primary-fixed-dim': 'rgb(174 198 255)',
            'on-primary-fixed-variant': 'rgb(44 70 120)',
            'secondary-fixed': 'rgb(219 226 249)',
            'on-secondary-fixed': 'rgb(20 27 44)',
            'secondary-fixed-dim': 'rgb(191 198 220)',
            'on-secondary-fixed-variant': 'rgb(63 71 89)',
            'tertiary-fixed': 'rgb(252 215 251)',
            'on-tertiary-fixed': 'rgb(41 19 45)',
            'tertiary-fixed-dim': 'rgb(222 188 223)',
            'on-tertiary-fixed-variant': 'rgb(88 62 91)',
            'surface-dim': 'rgb(218 217 224)',
            'surface-bright': 'rgb(249 249 255)',
            'surface-container-lowest': 'rgb(255 255 255)',
            'surface-container-low': 'rgb(243 243 250)',
            'surface-container': 'rgb(238 237 244)',
            'surface-container-high': 'rgb(232 231 239)',
            'surface-container-highest': 'rgb(226 226 233)',
            'transparent': 'rgba(255 0 0 0)',
            'success': '#00B74A'
        }
    },
    plugins: [],
}
