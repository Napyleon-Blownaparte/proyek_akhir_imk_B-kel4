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
        },
    },
    plugins: [],
}

