module.exports = {
    content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
    theme: {
        extend: {
            colors: {},

            fontSize: {
                dt1: ['32px', '36px'], //desktop height,line-spacing
                dt2: ['24px', '28px'],
                dt3: ['20px', '24px'],
                mt1: ['28px', '32px'], //mobile height,line-spacing
                mt2: ['20px', '24px'],
                mt3: ['18px', '22px'],
            },
            spacing: {
                '100': '6.25rem',
                'halfMobileVGap': '0.5rem',
                'mobileVGap': '1rem',
                'halfDesktopVGap': '1.5rem',
                'desktopVGap': '3rem',
            },
            maxWidth: {
                'contentWidth': 'var(--contentWidth)',
                'fullWidthMaxContentWidth': '(var--fullWidthMaxContentWidth)',
                'wideWidthContentWidth': '(var--wideWidthContentWidth)',
                'narrowWidthContentWidth': '(var--narrowWidthContentWidth)',
            },
            borderRadius: {
                'mobileCommon': '0.25rem',
                'desktopCommon': '0.25rem',
                'button': '0.125rem',
                'desktopAccordion': '8px',
            },
            boxShadow: {
                'mobileCommon': '2px 2px 6px 0 rgba(0, 0, 0, 0.2);',
                'desktopCommon': '2px 2px 6px 0 rgba(0, 0, 0, 0.2);',
                'button': '2px 2px 6px 0 rgba(0, 0, 0, 0.2);',
            },
            zIndex: {
                '100': '100',
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
        function ({ addVariant }) {
            addVariant('children', '& > *')
        },
    ],
    safelist: [
    'alignFull',
    ],
};
