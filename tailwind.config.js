// tailwind.config.js

module.exports = {
  content: [
    './**/*.php',
    './src/**/*.{html,js,jsx,ts,tsx}', // Make sure this path is correct
    './node_modules/daisyui/dist/**/*.js', // Ensure DaisyUI is included
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('daisyui'), // Adding DaisyUI plugin
  ],
}