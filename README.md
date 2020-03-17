# Kimai UserBundle

This is a fork from the FOSUserBundle. Why?

- To allow full compatibility with [Kimai 2](https://github.com/kevinpapst/kimai2) and current Symfony version
- To remove deprecations and BC layers
- To have a proper tagged version instead of the master branch and get rid of the dying dependency FOSUserBundle

This repo might be used by other apps, but it is not meant to be. No BC guaranteed in the future!

Changed things: read [CHANGELOG](Changelog.md)

## Outstanding changes

The following tasks are planned for the next version:

- Remove unused controllers, templates and routes
- Remove mailer
- Move mail listener to project

## License

This bundle is under the MIT license. See the complete license [in the bundle](LICENSE)
