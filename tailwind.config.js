const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: ['./storage/framework/views/*.php', './resources/views/**/*.blade.php'],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
               'sans': ['ui-sans-serif', 'system-ui', ...],
               'serif': ['ui-serif', 'Georgia', ...],
               'mono': ['ui-monospace', 'SFMono-Regular', ...],
               'display': ['Oswald', ...],
               'body': ['Open Sans', ...],
            },

            color: {
               primary: '#050259',
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
