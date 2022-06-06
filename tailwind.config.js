module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
],
  theme: {
    screens: {
      'sm': '640px',
      // => @media (min-width: 640px) { ... }

      'md': '768px',
      // => @media (min-width: 768px) { ... }

      'lg': '1024px',
      // => @media (min-width: 1024px) { ... }

      'xl': '1280px',
      // => @media (min-width: 1280px) { ... }

      '2xl': '1536px',
      // => @media (min-width: 1536px) { ... }
      
      'search': '432px',
      // => @media (min-width: 640px) { ... }

      'laptop': '1024px',
      // => @media (min-width: 1024px) { ... }

      'desktop': '1280px',
      // => @media (min-width: 1280px) { ... }
    },
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
        fGreyApp: '#DFDFDF',
      },
      fontFamily: {
        body: ['Poppins']
      },   
    },
  },
  plugins: [],
}
