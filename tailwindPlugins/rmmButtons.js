
const plugin = require('tailwindcss/plugin')

const rmmButtons = plugin(({ addComponents, theme }) => {


    addComponents({
        '.btn, .frm_button_submit': {
            display: 'inline-flex',
            justifyContent: 'center',
            alignItems: 'center',
            height: theme("spacing.buttonHeight"),
            minWidth: theme("spacing.buttonMinWidth"),
            backgroundColor: theme("colors.siteBlack"),
            backgroundImage: 'none',
            borderRadius: theme("borderRadius.buttonRadius"),
            color: theme("colors.white"),
            fontFamily: theme("fontFamily.display"),
            fontWeight: 'bold',
            paddingLeft: theme("spacing.buttonHPadding"),
            paddingRight: theme("spacing.buttonHPadding"),
            '&:hover': {
                backgroundColor: theme("colors.primary"),
                backgroundImage: 'none',
                color: theme("colors.siteWhite"),
            },
            '.iconBefore': {
                marginRight: '0.5rem',
            },
            '.iconAfter': {
                marginLeft: '0.5rem',
            },
        },

        '.btn-grad': {
            backgroundColor: 'none',
            backgroundImage: theme("backgroundImage.grad-blue-green"),
            '&:hover': {
                backgroundColor: theme("colors.black"),
                backgroundImage: 'none',
            },
        },
        '.btn-grad-onDark': {
            backgroundColor: 'none',
            backgroundImage: theme("backgroundImage.grad-blue-green"),
            '&:hover': {
                backgroundColor: theme("colors.white"),
                color: theme("colors.primary"),
                backgroundImage: 'none',
            },
        },

        '.btn-white-onDark': {
            backgroundColor: theme("colors.white"),
            color: theme("colors.primary"),
            backgroundImage: 'none',
            '&:hover': {
                backgroundColor: theme("colors.secondaryOnDark"),
                color: theme("colors.primary"),
            },
        },

    })
})
    module.exports = rmmButtons
