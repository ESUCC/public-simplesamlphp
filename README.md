# Federated SSO Tutorial
[![](https://img.shields.io/badge/Project-Public-blue.svg)]() [![](https://img.shields.io/badge/Version-1.14.16-blue.svg)](https://opensource.org/licenses/MIT) ![GitHub Open Issues](https://img.shields.io/github/issues/ESUCC/ssp-demo-config.svg) [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)


### These documents will cover the following:
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

### Requirements:

  - Some host with Docker, Docker Compose, and git installed. CentOS7 will be used in these documents.
  - Production hosts will require systemd in lieu of Docker Compose
  - (recommended) Some private GIT repository
  - (optional) Access to this demo nebraskaCloud repository. Click here to request access.

> The purpose of these documents are to allow sufficent
> knowledge of the current state SSO design, and future goals.
> Please contribute by expressing your ideas, concerns, plans, etc

> The SimpleSAMLphp installation is automated, as the focus is towards configuration.
> The automated install is completely public, generic, and contains no
> organization specific data or configurations.

> You can view the repository here to see what the automated install is doing.

### Bird's Eye Overview

### Start Here
Either select a section from above in the Documentation directory, or click here to start at the beginning.

### In the end, you will have the following:

License
----
MIT

---
Last updated by [Venator-Fox] (Adam Zheng) on 12 October 2017

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)
   [Venator-Fox]: <https://github.com/Venator-Fox>
