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
                sniglet: ['Sniglet']
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
                // parentPrimaryHover: '#0891B2',
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
                'kid-50': '#FFE8D9',
                'kid-100': '#FFD0B5',
                'kid-200': '#FFB088',
                'kid-300': '#FF9466',
                'kid-400': '#F9703E',
                'kid-500': '#F35627',
                'kid-600': '#DE3A11',
                'kid-700': '#C52707',
                'kid-800': '#AD1D07',
                'kid-900': '#841003',


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
                'kid-50': '#FFE8D9',
                'kid-100': '#FFD0B5',
                'kid-200': '#FFB088',
                'kid-300': '#FF9466',
                'kid-400': '#F9703E',
                'kid-500': '#F35627',
                'kid-600': '#DE3A11',
                'kid-700': '#C52707',
                'kid-800': '#AD1D07',
                'kid-900': '#841003',
            },
            height: {
                'kids': 'calc(100vh - 5rem)',
                '128': '32rem',
            },
            maxWidth: {
                '8xl': '92rem'
            },
            minHeight: {
                'kids': 'calc(100vh - 5rem)'
            },
            width: {
                '128': '32rem',
            },
            borderWidth: {
                '3': '3px',
            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            display: ["group-hover"],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
