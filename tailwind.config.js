const { colors, screens } = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    extend: {
        screens: {
            ...screens,
            'xxl': '1920px'
        },
        colors: {
            primary: '#09364f',
            secondary: '#f5ba1f',
            emom: colors.purple,
            amrap: colors.indigo,
            rft: colors.blue,
            couplet: colors.teal,
            ladder: colors.green,
            tabata: colors.yellow,
            freestyle: colors.orange,
            fufu: colors.red,
        }
    }
  },
  variants: {},
  plugins: []
}
