Changelog
=========

### 1.2

- fixed several event deprecations
- removed group controller and logic (user entity change!)
- removed change password controller and logic
- removed profile controller and logic

### 1.1

- cleanup and bump composer dependencies
- removed mailer implementations: `twig` and `swiftmailer` (using Noop by default, configure your own!)

### 1.0

- changed package name to `kimai/user-bundle`
- removed support for mongo db
- removed support for couch db
- removed docs
- replaced deprecated twig usages from `\Twig_` namespace
- removed usage of deprecated `AdvancedUserInterface`
- removed support for deprecated `BCryptPasswordEncoder`
- replaced deprecated extends from `Controller` with `AbstractController`

See changelog for [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle/blob/master/Changelog.md) for all previous versions.
