module.exports = {
	mode: 'jit',
	purge: {
		content: [
			'./inc/template-parts/*.php',
			'./so-custom-widgets/**/template/*.php',
			'./inc/partials/*.php',
			'./*.php',
			'./assets/js/*.js',
		],
	},
	darkMode: false, //you can set it to media(uses prefers-color-scheme) or class(better for toggling modes via a button)
	theme: {

		screens: {
			'xxs': '20rem',
			'xs': '30rem',
			'sm': '40rem',
			'md': '48rem',
			'ml': '56rem',
			'lg': '64rem',
			'xl': '80rem',
			'2xl': '96rem',
		},

		extend: {
			colors:{
				primary: {
					50: '#f4fbf8',
					100: '#e8f7f2',
					200: '#c6eade',
					300: '#a3deca',
					400: '#5fc5a2',
					500: '#1aac7a',
					600: '#179b6e',
					700: '#14815c',
					800: '#106749',
					900: '#0d543c',
				},
				secondary: {
					50: '#f5f5f5',
					100: '#ebebeb',
					200: '#cccccc',
					300: '#adadad',
					400: '#707070',
					500: '#333333',
					600: '#2e2e2e',
					700: '#262626',
					800: '#1f1f1f',
					900: '#191919',
				},
			},

			fontFamily: {
				'body': ['Poppins'],
			},
		},

		

	},
	variants: {
	},
	corePlugins: {
		// ...
	   container: false,
	},
	plugins: [],
}