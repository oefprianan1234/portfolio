import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    darkMode: 'class',
    theme: {
        extend: {
            colors: {
                primary: {
                    50: '#eef2ff',
                    100: '#e0e7ff',
                    200: '#c7d2fe',
                    300: '#a5b4fc',
                    400: '#818cf8',
                    500: '#6366f1',
                    600: '#4f46e5',
                    700: '#4338ca',
                    800: '#3730a3',
                    900: '#312e81',
                },
                secondary: {
                    50: '#f9f5ff',
                    100: '#f2ebff',
                    200: '#e5d6ff',
                    300: '#d1b3ff',
                    400: '#b080ff',
                    500: '#904dff',
                    600: '#701aff',
                    700: '#5c00ff',
                    800: '#4a00cc',
                    900: '#380099',
                },
                accent: {
                    50: '#fff1f2',
                    100: '#ffe4e6',
                    200: '#fecdd3',
                    300: '#fda4af',
                    400: '#fb7185',
                    500: '#f43f5e',
                    600: '#e11d48',
                    700: '#be123c',
                    800: '#9f1239',
                    900: '#881337',
                }
            },
            animation: {
                'float': 'float 6s ease-in-out infinite',
                'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                'bounce-gentle': 'bounce-gentle 2s infinite',
                'slide-up-fade': 'slide-up-fade 0.5s cubic-bezier(0.4, 0, 0.2, 1)',
                'scale-up': 'scale-up 0.3s cubic-bezier(0.4, 0, 0.2, 1)',
            },
            keyframes: {
                'bounce-gentle': {
                    '0%, 100%': { transform: 'translateY(-2%)' },
                    '50%': { transform: 'translateY(0)' },
                },
                'slide-up-fade': {
                    '0%': { transform: 'translateY(20px)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                },
                'scale-up': {
                    '0%': { transform: 'scale(0.95)', opacity: '0' },
                    '100%': { transform: 'scale(1)', opacity: '1' },
                },
            },
            boxShadow: {
                'glow': '0 0 15px rgba(var(--color-primary), 0.3)',
                'glow-lg': '0 0 30px rgba(var(--color-primary), 0.4)',
            },
        },
    },
    plugins: [forms, typography],
}
