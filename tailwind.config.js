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
                // parentPrimay: '#06B6D4',
                // parentPrimayHover: '#0891B2',
                // kidsPrimary: '#F59E0B',
                // kidsPrimaryHover: '#D97706',
                // kidsSecondary: '#FACC15',
                // kidsSecondaryHover: '#EAB308',
                'parent-50':'#EFFCF6',
                'parent-100':'#C6F7E2',
                'parent-200':'#8EEDC7',
                'parent-300':'#65D6AD',
                'parent-400':'#3EBD93',
                'parent-500':'#27AB83',
                'parent-600':'#199473',
                'parent-700':'#147D64',
                'parent-800':'#0C6B0C',
                'parent-900':'014D40',


            },
            boarderColor: {
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
                'parent-50':'#EFFCF6',
                'parent-100':'#C6F7E2',
                'parent-200':'#8EEDC7',
                'parent-300':'#65D6AD',
                'parent-400':'#3EBD93',
                'parent-500':'#27AB83',
                'parent-600':'#199473',
                'parent-700':'#147D64',
                'parent-800':'#0C6B0C',
                'parent-900':'014D40',
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
