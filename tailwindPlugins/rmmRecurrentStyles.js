
const plugin = require('tailwindcss/plugin')

const rmmRecurrentStyles = plugin(({ addBase, theme }) => {

    addBase({
        // "pipe" divider for horizontal navigation
        'img' : {
           maxWidth: 'unset',
        },
        '.hasDivider': {
            position: 'relative',
            display: 'flex',
            alignItems: 'center',
            marginRight: '.5rem',
            '&:after' : {
                display: 'inline-block',
                marginLeft: '.5rem',
                backgroundColor: theme("colors.siteBlack"),
                content: '" "',
                width: '2px',
                height: '1rem',
            },
        },
        '.clipLeftArrow' :{
            clipPath: 'polygon(22% 0, 100% 0%, 100% 100%, 22% 100%, 0% 50%)',
        },
        '.clipDownArrow' :{
            clipPath: 'polygon(50% 100%, 100% 80%, 100% 0%, 0% 0%, 0% 80%)',
        },
        '.clipRightArrow' :{
            clipPath: 'polygon(0% 0%, 67% 0, 100% 50%, 67% 100%, 0% 100%)',
        },
        '.hasDarkOverlay' :{
            position: 'relative',
            '&:before' : {
                position: 'absolute',
                display: 'block',
                backgroundColor: theme("colors.siteBlack"),
                opacity: '0.8',
                content: '" "',
                width: '100%',
                height: '100%',
                top: '0',
                bottom: '0',
                zIndex: '1',
            },
            '> *' : {
                position: 'relative',
                zIndex: '100',
            },
        },
        '.hasBlueBlackOverlay' :{
            position: 'relative',
            '&:before' : {
                position: 'absolute',
                display: 'block',
                backgroundImage: 'linear-gradient(-180deg, rgba(0, 65, 115, 1) 0%, rgba(5, 47, 67, 1) 100%);',
                opacity: '0.8',
                content: '" "',
                width: '100%',
                height: '100%',
                top: '0',
                bottom: '0',
                zIndex: '1',
            },
            '> *' : {
                position: 'relative',
                zIndex: '100',
            },
        },

    })
})
module.exports = rmmRecurrentStyles
