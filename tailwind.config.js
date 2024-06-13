// @type {import('tailwindcss').Config}

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        ],
    mode: 'jit',
    theme: {
        extend: {
            colors: {
                'text': 'var(--text)',
                'background': 'var(--background)',
                'prim': 'var(--prim)',
                'secon': 'var(--secon)',
                'accent': 'var(--accent)',
            },
            fontFamily: {
                sans: ['"Plus Jakarta Sans"', 'sans-serif'],
            },
            keyframes: {
                fadeInUp: {
                    '0%': {
                        transform: 'translateY(25%)',
                        opacity: 0
                      },
                      '100%': {
                        transform: 'translateY(0%)',
                        opacity: 1
                      }
                },
                fadeInDown: {
                    '0%': {
                        transform: 'translateY(-25%)',
                        opacity: 0
                      },
                      '100%': {
                        transform: 'translateY(0%)',
                        opacity: 1
                      }
                },
                fadeInRight: {
                    '0%': {
                        transform: 'translateX(-15%)',
                        opacity: 0
                      },
                      '100%': {
                        transform: 'translateX(0%)',
                        opacity: 1
                      }
                },
                fadeInLeft: {
                    '0%': {
                        transform: 'translateX(15%)',
                        opacity: 0
                      },
                      '100%': {
                        transform: 'translateX(0%)',
                        opacity: 1
                      }
                },
            },
            animation: {
                'fadeInUp-animation': 'fadeInUp 1s ease-out',
                'fadeInDown-animation': 'fadeInDown 1s ease-out',
                'fadeInRight-animation': 'fadeInRight 1s ease-out',
                'fadeInLeft-animation': 'fadeInLeft 1s ease-out'
            }
        },
    },
    plugins: [],
}

