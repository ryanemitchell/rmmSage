/**
 * @typedef {import('@roots/bud').Bud} bud
 *
 * @param {bud} app
 */
module.exports = async (app) => {
  app
    /**
     * Application entrypoints
     *
     * Paths are relative to your resources directory
     */
      .entry({
          app: [
              ['@scripts/app',
                  '@scripts/menus/mobile-dropdown-menu'],
              '@styles/app'],
          editor: ['@scripts/editor', '@styles/editor'],
      })

    /**
     * These files should be processed as part of the build
     * even if they are not explicitly imported in application assets.
     */
    .assets('images')

    /**
     * These files will trigger a full page reload
     * when modified.
     */
    .watch([
      'tailwind.config.js',
      'resources/views/**/*.blade.php',
      'app/View/**/*.php',
    ])

    /**
     * Target URL to be proxied by the dev server.
     *
     * This should be the URL you use to visit your local development server.
     */
    .proxy('http://newsage.local')

    /**
     * Development URL to be used in the browser.
     */
    .serve('http://newsage.local:3000');

};
