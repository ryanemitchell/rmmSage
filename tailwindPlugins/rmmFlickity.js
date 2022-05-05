const plugin = require('tailwindcss/plugin')

const rmmFlickity = plugin(({ addComponents, theme }) => {


    addComponents({
        '.carousel::after': {
            content: '"flickity"',
            display: 'none',
        },
        '.carousel-cell': {
            counterIncrement: 'carousel-cell',
        },
        '.carousel-cell:before': {
            display: 'block',
        },
        '.flickity-page-dot': {
            display: 'block',
            width: '8px',
            height: '8px',
            padding: '0',
            margin: '0 8px',
            backgroundColor: theme("colors.siteBlack"),
            borderRadius: '50%',
            cursor: 'pointer',
            appearance: 'none',
            border: 'none',
            textIndent: '-9999px',
            overflow: 'hidden',
        },
        '.onDark .flickity-page-dot': {
            display: 'block',
            width: '8px',
            height: '8px',
            padding: '0',
            margin: '0 8px',
            backgroundColor: theme("colors.siteWhite"),
            borderRadius: '50%',
            cursor: 'pointer',
            appearance: 'none',
            border: 'none',
            textIndent: '-9999px',
            overflow: 'hidden',
        },
        '.flickity-page-dot.is-selected': {
            backgroundColor: theme("colors.secondary"),
        },
        '.flickity-page-dot:focus': {
            outline: 'none',
            boxShadow: 'inherit',
        },
        '@screen lg' : {
            '.disableOnDesktop::after': {
                content: '""',
            },
        },
    })
})
module.exports = rmmFlickity
