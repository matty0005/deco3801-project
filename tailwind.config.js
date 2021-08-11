const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                // sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                sans: ['Inter var', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                lime: colors.lime,
                orange: colors.orange,
                amber: colors.amber,
                emerald: colors.emerald,
                teal: colors.teal,
                cyan: colors.cyan,
                sky: colors.sky,
                purple: colors.purple,
                violet: colors.violet,
                fuchsia: colors.fuchsia,
                rose: colors.rose,
                warmGray: colors.warmGray,
                blueGray: colors.blueGray,
                parentPrimay: '#06B6D4',
                parentPrimayHover: '#0891B2',
                kidsPrimary: '#F59E0B',
                kidsPrimaryHover: '#D97706',
                kidsSecondary: '#FACC15',
                kidsSecondaryHover: '#EAB308',


            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
