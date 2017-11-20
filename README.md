#### IdP Configuration Repository
[![](https://img.shields.io/badge/Project-Public-blue.svg)]() [![](https://img.shields.io/badge/Version-1.15.0-blue.svg)](https://github.com/ESUCC/public-simplesamlphp/network) ![GitHub Open Issues](https://img.shields.io/github/issues/ESUCC/public-simplesamlphp.svg)

To dive right in, please visit the [Wiki]

> The purpose of these documents are to allow sufficent
> knowledge of the current state SSO design, and future goals.
> Please contribute by expressing your ideas, concerns, plans, etc

> The SimpleSAMLphp installation is automated, as the focus is towards configuration.
> The automated install is completely public, generic, and contains no
> organization specific data or configurations.

> You can optionally view [docker-simplesamlphp] if you are interested to see what the automated install is doing.

The [Wiki] covers:
  - Explaination for 5 Minute install of a demo nebraskaCloud IdP, https://demo-idp.nebraskacloud.org
    - Explaination and installation of the nebraskaCloud multiAuth module
    - Installation of the alias extension
    - Installation of the nebraskaCloud theme
  - 5 Minute automated install of an IdP for your organization
  - Federating your organization IdP as a proxy to the demo nebraskaCloud IdP
  - Federating your Google IdP as a proxy to your organization IdP
    - Custom schemas in Google Directory
    - Mass update of users via GAM
    - Mass update of users via the User Gopher plugin from AmplifiedIT
  - Adding an Active Directory Source
  - Customization of the theme for your organization
  - Essential authsource options and configurations
  - Essential authproc development information
    - Standardizing claims from your school districts
    - Injecting state level claims (such as the CDN) from a database or another LDAP directory
    - Blocking logins due to insufficent claims (ex. missing mail, uid)
  - Installation of a claims viewer SP for testing

### Bird's Eye Overview
All aspects below overview are covered in the [Wiki]:

![Birds-Eye-Image][Birds-Eye-Image]

### Contributing

Please view [CONTRIBUTING.md] for contribution guidelines.

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)
   [Wiki]: https://github.com/ESUCC/public-simplesamlphp/wiki
   [docker-simplesamlphp]: https://github.com/Venator-Fox/docker-simplesamlphp/blob/master/1.15.0/Dockerfile
   [Birds-Eye-Image]: https://github.com/ESUCC/public-simplesamlphp/blob/master/wiki-resources/images/birds-eye-overview.png "Birds Eye Overview"
   [CONTRIBUTING.md]: CONTRIBUTING.md
