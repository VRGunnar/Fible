module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
],
  theme: {
    extend: {
      backgroundColor: {
        navBlack: '#131F25',
        fBlack: '#18272E',
        fWhite: '#EFF0EF',
        fGreen: '#25C49A',
        fRed: '#F04E59',
        fGrey: '#8f908f'
      },
      colors: {
        navBlack: '#131F25',
        fBlack: '#18272E',
        fWhite: '#EFF0EF',
        fGreen: '#25C49A',
        fGreenLight: '#d3f3eb',
        fRed: '#F04E59',
        fGrey: '#8f908f',
      },
      fontFamily: {
        body: ['Poppins']
      }
    },
  },
  plugins: [],
}
