const { colors } = require('tailwindcss/defaultTheme')

module.exports = {
  theme: {
    extend: {
        colors: {
            emom: colors.purple,
            amrap: colors.indigo,
            rft: colors.blue,
            chipper: colors.teal,
            ladder: colors.green,
            tabata: colors.yellow,
        }
    }
  },
  variants: {},
  plugins: []
}
