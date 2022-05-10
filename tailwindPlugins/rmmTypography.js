
const plugin = require('tailwindcss/plugin')

const rmmTypography = plugin(({ addBase, theme }) => {
    addBase({
        'p': {
            fontSize: '1rem',
            lineHeight: '1.375',
            '@screen lg' : {
                fontSize: '1rem',
                lineHeight: '1.375',
            },
        },
        'h1,h2,h3,h4,h5,h6': {
            fontFamily: theme("fontFamily.display"),
            fontWeight: 'bold',
            color: theme("colors.primary"),
            marginTop: '0.5rem',
            marginBottom: '0.25rem',
        },
        'h1': {
            fontSize: '28px',
            lineHeight: '32px',
            '@screen lg' : {
                fontSize: '32px',
                lineHeight: '36px',
            },
        },
        'h2': {
            fontSize: '28px',
            lineHeight: '32px',
            '@screen lg' : {
                fontSize: '24px',
                lineHeight: '28px',
            },
        },
        'h3': {
            fontSize: '20px',
            lineHeight: '24px',
            '@screen lg' : {
                fontSize: '24px',
                lineHeight: '28px',
            },
        },
        /* ==========================================================================
          Content Specific Typography (main)
           ========================================================================== */
        'a': {
            color: theme("colors.primary"),
            '&:hover': {
                color: theme("colors.secondary"),
            },
        },

        'main ul': {
            listStyle: 'disc',
            listStylePosition: 'inside',
            paddingLeft: '1rem',
        },

        'main ul li::marker': {
            color: theme("colors.secondary"),
            fontSize: '1em',
        },
        'main p' : {
            marginBottom: '1em',
        },

        'main p:last-of-type' : {
            marginBottom: '0',
        },


        'main ol': {
            listStyle: 'decimal',
            listStylePosition: 'inside',
            paddingLeft: '1rem',
        },
        'main ol li': {
            listStyle: 'decimal',
            listStylePosition: 'inside',
        },

        'main ol li::marker': {
            color: theme("colors.secondary"),
            fontSize: '1em',
        },
        'small p': {
            fontSize: '12px',
        },
        'nav ul': {
            listStyle: 'none',
        },




        /* ==========================================================================
           Home Page Specific Header Sizes
           ========================================================================== */
        'home': {
            'h1,h2,h3,h4,h5,h6': {
                fontFamily: theme("fontFamily.display"),
                fontWeight: 'bold',
            },
        },

        '.noShiftBoldPrimary' : {
            textShadow: '0 0 0.65px theme("colors.primary"), 0 0 0.65px theme("colors.primary")',
            color: theme("colors.primary"),
        },


        '.pageTitle': {    //  " H1 interior"
            fontSize: '30px',
            lineHeight: '34px',
            '@screen lg' : {
                fontSize: '36px',
                lineHeight: '40px',
            },
        },



        '.tagline': {
            fontSize: '18px',
            lineHeight: '22px',
            '@screen lg' : {
                fontSize: '24px',
                lineHeight: '26px',
            },
        },

        '.largeHeader': {    //  " H1 interior"
            fontSize: '28px',
            lineHeight: '32px',
            '@screen lg' : {
                fontSize: '32px',
                lineHeight: '36px',
            },
        },






    })
})
module.exports = rmmTypography
