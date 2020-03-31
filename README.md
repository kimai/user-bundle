# Kimai UserBundle

**THIS IS NOT A BUNDLE/PLUGIN FOR KIMAI 2 - DO NOT TRY TO INSTALL IT MANUALLY!**

This is internal code, which is shipped automatically with Kimai.

So what is it? 

It is a fork from the FOSUserBundle, which provides basic user management functionality like the "user registration" or "password forgotten" feature.

It was forked, to ...

- allow full compatibility with [Kimai 2](https://github.com/kevinpapst/kimai2) and current Symfony version
- remove deprecations and BC layers
- have a proper tagged version instead of the master branch and get rid of the dying dependency FOSUserBundle

This repo might be used by other apps, but it is not meant to be. No BC guaranteed in the future! 
No support provided whatsoever.

Changed logic: read [CHANGELOG](Changelog.md)

## Outstanding changes

The following tasks are planned for the next version:

- Remove unused controllers, templates and routes
- Remove mailer
- Move mail listener to project

## License

This bundle is under the MIT license. See the complete license [in the bundle](LICENSE)
