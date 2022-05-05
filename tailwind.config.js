const plugin = require('tailwindcss/plugin')
module.exports = {
    presets: [
        require('./tailwindPLugins/rmmTailwindPresets.js'),
    ],
    content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
    theme: {
        extend: {
            colors: {
                'white': 'rgba(255, 255, 255, 1)',
                'siteWhite': 'rgba(255, 255, 255, 1)',
                'grey': 'rgba(243, 243, 243, 1)',
                'siteGrey': 'rgba(243, 243, 243, 1)',
                'siteDarkGrey': 'rgb(127,127,127)',
                'black': 'rgba(0, 28, 49, 1)',
                'siteBlack': 'rgba(0, 28, 49, 1)',
                'primary': 'rgba(0, 65, 115, 1)',
                'secondary': 'rgba(0, 164, 126, 1)',
                'secondary-onDark': 'rgba(0, 194, 149, 1)',
                'secondaryOnDark': 'rgba(0, 194, 149, 1)',
                'accent': 'rgba(244, 252, 255, 1)',
                'siteErrorRed': 'rgba(211, 0, 0, 1)',
                'transparent': 'rgba(244, 252, 255, 0)',
            },
            fontFamily: {
                'sans': ['"sofia-pro"', 'sans-serif', 'ui-sans-serif', 'system-ui'],
                'serif': ['ui-serif', 'Times New Roman'],
                'mono': ['ui-monospace', 'SFMono-Regular'],
                'display': ['"graphie"', 'sans-serif', 'ui-sans-serif', 'system-ui'],
                'body': ['"sofia-pro"', 'sans-serif', 'ui-sans-serif', 'system-ui'],
            },
            fontSize: {
                dxxl: ['52px', '56px'],
                mxxl: ['32px', '36px'],
                mxl: ['30px', '34px'], //d
                dxl: ['36px', '40px'], //des
                dt1: ['32px', '36px'], //desktop height,line-spacing
                dt2: ['24px', '28px'],
                dt3: ['20px', '24px'],
                mt1: ['28px', '32px'], //mobile height,line-spacing
                mt2: ['20px', '24px'],
                mh2: ['24px', '28px'],
                dh2: ['24px', '28px'],
                mt3: ['18px', '22px'],

            },
            spacing: {
                // '100': '6.25rem',
                'halfMobileVGap': '0.5rem',
                'mobileVGap': '1rem',
                'halfDesktopVGap': '1.5rem',
                'desktopVGap': '3rem',
                // '16': '1rem', // 16px
                // '50': '3.125rem', // 50px
                // '24': '1.5rem', // 24px
                'buttonMinWidth': '7.625rem', // 122px
                'buttonHeight': '2.125rem', // 34px
                'buttonHPadding': '1rem', // 34px
            },
            maxWidth: {
                'contentWidth': 'var(--contentWidth)',
                'fullWidthMaxContentWidth': '(var--fullWidthMaxContentWidth)',
                'wideWidthContentWidth': '(var--wideWidthContentWidth)',
                'narrowWidthContentWidth': '(var--narrowWidthContentWidth)',
            },
            borderRadius: {
                'common': '0.25rem',
                'mobileCommon': '0.25rem',
                'desktopCommon': '0.25rem',
                'buttonRadius': '0.125rem',
                'desktopAccordion': '8px',
                'formFieldRadius': '4px',

            },
            boxShadow: {
                'common': '2px 2px 6px 0 rgba(0, 0, 0, 0.2);',
                'mobileCommon': '2px 2px 6px 0 rgba(0, 0, 0, 0.2);',
                'desktopCommon': '2px 2px 6px 0 rgba(0, 0, 0, 0.2);',
                'button': '2px 2px 6px 0 rgba(0, 0, 0, 0.2);',
            },
            zIndex: {
                '100': '100',
            },
            backgroundImage: {
                'watermark-x': "url('../images/expertAir/watermark_x.svg');",
                'home-hero': "url('../images/expertAir/homeHeroBackgroundAnimated.svg');",
                'home-hero-mobile': "url('../images/expertAir/EA_mobile_hero_overlay.svg');",
                'geometric': "url('../images/expertAir/homeHeroBackground.svg');",
                'footer-arrows': "url('../images/expertAir/desktop_double_arrow.svg');",
                'blueTriangle': "url('../images/expertAir/blue_triangle_right.svg');",
                'geometricReversed': "url('../images/expertAir/geometricBg-reversed.svg');",






                'grad-blue-green':
                    "linear-gradient(-180deg, rgba(0, 164, 126, 1) 0%, rgba(0, 103, 153, 1) 100%);",
                'grad-blue-black':
                    "linear-gradient(-180deg, rgba(0, 65, 115, 1) 0%, rgba(5, 47, 67, 1) 100%);",
                'grad-transparent':
                    "linear-gradient(-180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 100%);",
                'grad-greyBlack':
                    "linear-gradient(90deg, rgba(243, 243, 243, 1) 50%, rgba(0, 28, 49, 1) 50%);",
            },
            filter: {
                //  USE PLUGIN
            },

        },
    },
    variants: {
        extend: {
            // ...
            filter: ['hover'],
        },
    },
    plugins: [

        function ({addVariant}) {
            addVariant('children', '& > *')
        },
        function ({addVariant}) {
            addVariant('grandChildren', '& > * > *')
        },
        require('./tailwindPLugins/rmmRecurrentStyles'),
        require('./tailwindPLugins/rmmTypography'),
        require('./tailwindPLugins/rmmButtons'),
        require('./tailwindPLugins/rmmFlickity'),
        plugin(function ({addBase, addComponents, addUtilities, theme}) {
            addBase({
            })
            addComponents({
                '.card': {
                    backgroundColor: theme('colors.white'),
                    borderRadius: theme('borderRadius.lg'),
                    padding: theme('spacing.6'),
                    boxShadow: theme('boxShadow.xl'),
                },
                '.siteBoxed': {
                    borderRadius: theme('borderRadius.common'),
                    backgroundColor: theme('colors.siteWhite'),
                    borderWidth: '1px',
                    borderStyle: 'solid',
                    borderColor: theme('colors.siteBlack'),
                },
                '.siteBoxedDark': {
                    borderRadius: theme('borderRadius.common'),
                    backgroundColor: theme('colors.siteSiteBlack'),
                    borderWidth: '1px',
                    borderStyle: 'solid',
                    borderColor: theme('colors.siteBlack'),
                },
                '.siteShadowedBox': {
                    borderRadius: theme('borderRadius.common'),
                    backgroundColor: theme('colors.siteSiteGrey'),
                    borderWidth: '0',
                    borderStyle: 'none',
                    boxShadow: theme('boxShadow.common'),
                },
            })
            addUtilities({
                '.filter-to-primary': {
                    filter: 'brightness(0) saturate(100%) invert(16%) sepia(25%) saturate(6869%) hue-rotate(190deg) brightness(94%) contrast(101%);',
                },
                '.filter-to-secondary': {
                    filter: 'brightness(0) saturate(100%) invert(39%) sepia(100%) saturate(756%) hue-rotate(130deg) brightness(93%) contrast(103%);',
                },

                '.filter-to-secondaryOnDark': {
                    filter: 'brightness(0) saturate(100%) invert(53%) sepia(85%) saturate(837%) hue-rotate(122deg) brightness(90%) contrast(101%);',
                },

                '.filter-to-siteBlack': {
                    filter: 'brightness(0) saturate(100%) invert(10%) sepia(11%) saturate(7178%) hue-rotate(174deg) brightness(94%) contrast(106%);',
                },
                '.filter-to-siteWhite': {
                    filter: 'brightness(0) invert(10%);',
                },
                '.smallBox-bg': {
                    backgroundSize: 'auto 100%;',
                    backgroundPositionX: '-54px;',
                },
            })
        }),
    ],
safelist: [
        'alignFull',
        'grid-cols-none',
        'grid-cols-1',
        'grid-cols-3',
        'grid-cols-3',
        'grid-cols-4',
        'mb-16',
        'is-stuck',
        'flickity-page-dot',
    '.onDark .flickity-page-dot',

    ],
};
