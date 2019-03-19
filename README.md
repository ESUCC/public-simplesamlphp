#### IdP Configuration Repository
[![](https://img.shields.io/badge/Project-Public-blue.svg)]() [![](https://img.shields.io/badge/Version-1.17.1-blue.svg)](https://github.com/ESUCC/public-simplesamlphp/network) ![GitHub Open Issues](https://img.shields.io/github/issues/ESUCC/public-simplesamlphp.svg)

The container has been updated to use rh-nginx and rh-php7.2 via Red Hat/CentOS SCL. This is as of 1.17. Please do not use earlier builds as they were based on php5.6 which is now EOL. Questions can be directed to [Venator-Fox (adam.zheng@esu10.org)](https://github.com/Venator-Fox) with these [container changes](https://github.com/Venator-Fox/docker-simplesamlphp/commit/db16db4e3223ec97afda3a5df68f7bb4a1caa875#diff-da18125cd8d77ec5f0f722676b3a94ac).

This projected is utilizes [SimpleSAMLphp](https://simplesamlphp.org) provided by UNINETT.

To dive right in, please visit the [Wiki]

> The purpose of these documents are to allow sufficent
> knowledge of the current state SSO design, and future goals.
> Please contribute by expressing your ideas, concerns, plans, etc

> The SimpleSAMLphp installation is automated, as the focus is towards configuration.
> The automated install is completely public, generic, and contains no
> organization specific data or configurations.

> You can optionally view the [Dockerfile] if you are interested to see what the automated install is doing.

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


[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)
   [Wiki]: https://github.com/ESUCC/public-simplesamlphp/wiki
   [Dockerfile]: https://github.com/Venator-Fox/docker-simplesamlphp/blob/master/1.17.1/Dockerfile
   [Birds-Eye-Image]: https://github.com/ESUCC/public-simplesamlphp/blob/master/wiki-resources/images/birds-eye-overview.png "Birds Eye Overview"