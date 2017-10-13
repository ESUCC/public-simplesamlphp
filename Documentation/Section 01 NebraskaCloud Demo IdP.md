## This Demo IdP

This IdP will be the playground to work with.
It is similar to how the Development IdP dev-idp.nebraskacloud.org is setup.
The process will be the same if you would like to push changes to it.

Please note this section is explaining the setup of this demo IdP.
Going through this section is optional, but explains what you are cloning for the automated install.
All of this will already be done when you clone the repository.

Download data for the latest version of SimpleSAMLphp
~~~
curl -SL https://simplesamlphp.org/download?latest | tar -zxC /opt/docker/volumes/ && mv /opt/docker/volumes/simplesamlphp-1* /opt/docker/volumes/idp-simplesamlphp
~~~

Remove directories and files that will be ephemeral, as they are provided by the Docker Container.
~~~
rm -rf /opt/docker/volumes/idp-simplesamlphp/bin/
rm -f /opt/docker/volumes/idp-simplesamlphp/composer.json
rm -f /opt/docker/volumes/idp-simplesamlphp/composer.lock
rm -f /opt/docker/volumes/idp-simplesamlphp/COPYING
rm -rf /opt/docker/volumes/idp-simplesamlphp/config-templates/
rm -f /opt/docker/volumes/idp-simplesamlphp/CONTRIBUTE.md
rm -rf /opt/docker/volumes/idp-simplesamlphp/docs/
rm -rf /opt/docker/volumes/idp-simplesamlphp/extra/
rm -rf /opt/docker/volumes/idp-simplesamlphp/lib/
rm -f /opt/docker/volumes/idp-simplesamlphp/LICENSE
rm -rf /opt/docker/volumes/idp-simplesamlphp/metadata-templates/
rm -f /opt/docker/volumes/idp-simplesamlphp/README.md
rm -rf /opt/docker/volumes/idp-simplesamlphp/schemas/
rm -rf /opt/docker/volumes/idp-simplesamlphp/tests/
rm -rf /opt/docker/volumes/idp-simplesamlphp/tools/
rm -rf /opt/docker/volumes/idp-simplesamlphp/vendor/
~~~

Add ESUCC NebraskaCloud Theme and support files supplied by [isaacson] (Scott Isaacson): [91563f8]
`modules/nebraskaCloudAuth/*`
`www/resources/bootstrap/*`
`www/resources/jquery/*`
`www/resources/nebraskaCloud/*`
`www/resources/typahead/*`

Add [isaacson] (Scott Isaacson) multiauth alias feature and array_key_exists: [1e2353f]
This will allow multiple entries of the same authsource in the org selection list:
array_key_exists fix will remove errors if $authconfig is null which fills logs with errors:
`modules/multiauth/lib/Auth/Source/MultiAuth.php`

Add esucc-cdn and department oid
`feature/documentation/name2oid.php`

Add [authgoogle] module to allow legacy direct connections:
`modules/authgoogle/`

Going through this section is optional, but explains what you are cloning for the automated install.
All of this will already be done when you clone the repository.

Add fake orgs ESU100 and ESU999 for IdP SP federation examples.

---
Last updated by [Venator-Fox] (Adam Zheng) on 13 October 2017

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)
   [Venator-Fox]: <https://github.com/Venator-Fox>
   [isaacson]: <https://github.com/isaacson>
   [authgoogle]: <https://github.com/piersharding/simplesamlphp-modules/tree/master/authgoogle>
   [91563f8]: <https://github.com/ESUCC/ssp-demo-config/tree/feature/esucc-customizations/www>
   [1e2353f]: <https://github.com/ESUCC/ssp-demo-config/commit/1e2353fd48668f9327d51a3eeff32a453662d2aa#diff-829d37f33c6daa01203d848f54d82a3e>
