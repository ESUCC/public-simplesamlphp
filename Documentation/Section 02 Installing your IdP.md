## Section 02 - Automated SimpleSAMLphp install via Docker
The install is automated via Docker. Run this:
~~~
docker run --name some-simplesamlphp -p80:80 venatorfox/simplesamlphp:latest
~~~
Done. Visit https://localhost

This automated installation was from a different project. There is nothing organization specific in it.
What it does --> Installs: CentOS7, NGINX, FPM, SimpleSAMLphp, required php extensions.

The focus of these pages are configuration, not installation.
If you would like to see more details on the automated install docker project, view the [dockerfile].

Removing the entire stack is as easy as deleting the containers.
Stop and destroy the install:
~~~
docker stop some-simplesamlphp
docker rm some-simplesamlphp
~~~

---
### Clone this repository as a template

Of course, an installation is required that does not contain just the default values.
The following steps will use docker to setup HA, SSL, Memcache, and use the NebraskaCloud template for your customized IdP.

If you would like to view changes done from the default install, visit Section 01.

Clone this repository to `/opt/docker/volumes/idp-simplesamlphp/`:
~~~
git clone git@github.com:ESUCC/ssp-demo-config.git /opt/docker/volumes/idp-simplesamlphp/
~~~

Create a repository to backup your configurations to (optional)
As the following changes will now be organization specific, add your organization git origin.

Your remote should be a private repository as it will contain organization data.
Rename the NebraskaCloud origin name from origin to nebraskaCloud.
~~~
git remote rename origin nebraskaCloud
git remote add origin git@github.com:USERNAME/REPOSITORY.git
git remote -v
~~~

You should now see two remotes, one for this repository (for statewide changes) and one for your own repository.
Updates from either repository can be merged into yours in the future from a git pull <remote name> <branch>

---

### Customize for your organization

The docker-compose.yml located at the root of the repository contains all the settings that will apply to the install.

Modify any environment variable for your organization, such as contact, org name, etc.
Explanations for these variables can be viewed in the Runtime Environment Variable table at [docker-simplesamlphp].
For now, do not change `CONFIG_THEMEUSE`, `CONFIG_STORETYPE`, `CONFIG_MEMCACHESTORESERVERS`

---
### Change the URL in the haproxy.cfg file
Change the url in `haproxy.cfg` located at the root of the repository to the name of your choice.
These following examples will use `idp.esu99.org`

~~~
vi /opt/docker/volumes/idp-simplesamlphp/haproxy.cfg +42
~~~
Change line 42 to the following:
~~~
    bind *:443 ssl crt /etc/haproxy/ssl/idp.esu99.org.pem
~~~
Create the haproxy volume and copy the configuration there

~~~
mkdir -p /opt/docker/volumes/idp-haproxy/
cp /opt/docker/volumes/idp-simplesamlphp/haproxy.cfg /opt/docker/volumes/idp-haproxy/
~~~

---
### Generate a SSL certificate for idp.esu99.org

##### Option 1: Self Signed (For Testing, etc)
Change HOST=idp.esu99.org
This will generate a self-signed certificate for haproxy
~~~
docker run --rm -v /opt/docker/volumes/idp-haproxy/ssl:/ssl:Z -e HOST=idp.esu99.org -e TYPE=pem project42/selfsignedcert
~~~

##### Option 2: Use a Free CA for signing (For Production)
DNS will need to be set. Rate Limited, be sure to have everything corect
Set PGID and PUID to the cloud user. In CentOS, this PGID=1000, PUID=1000
Set the e-mail to be saved in the certificate

Create the container:
~~~
docker create \
  --privileged \
  --name=idp-letsencrypt \
  -v /opt/docker/volumes/idp-letsencrypt/config:/config:Z \
  -e PGID=1000 -e PUID=1000  \
  -e EMAIL=adam.zheng@esu99.org \
  -e URL=idp.esu99.org \
  -e SUBDOMAINS= \
  -p 443:443 \
  -e TZ=America/Chicago \
  linuxserver/letsencrypt
~~~

Run and tail the container:
~~~
docker run idp-letsencrypt && docker logs -f idp-letsencrypt
~~~

Wait for the process to complete, if no errors occured, cat the chain and private key to haproxy's volume.
~~~
cd /opt/docker/volumes/idp-letsencrypt/etc/letsencrypt/live/idp.esu99.org/
cat fullchain.pem privkey.pem > /opt/docker/volumes/idp-haproxy/ssl/demo-idp.nebraskacloud.org.pem
~~~

Stop the container
~~~
docker stop idp-letsencrypt
~~~

##### Option 3: Use whatever CA (For Production)
If your organization already has a wildcard cert or uses some CA already, you can use that as well.
cat the Certificate, Intermediate Certificates, Chain, Private Key to
`/opt/docker/volumes/idp-haproxy/ssl/idp.esu99.org.pem`

---
Launch everything:
~~~
docker-compose -f /opt/docker/volumes/esu10idp-simplesamlphp/docker-compose.yml up -d
docker ps -a
~~~

Visit https://idp.esu99.org

---
Last updated by [Venator-Fox] (Adam Zheng) on 13 October 2017

[//]: # (These are reference links used in the body of this note and get stripped out when the markdown processor does its job. There is no need to format nicely because it shouldn't be seen. Thanks SO - http://stackoverflow.com/questions/4823468/store-comments-in-markdown-syntax)
   [Venator-Fox]: <https://github.com/Venator-Fox>
   [isaacson]: <https://github.com/isaacson>
   [docker-simplesamlphp]: https://github.com/Venator-Fox/docker-simplesamlphp/tree/master/1.14.16
   [dockerfile]: https://github.com/Venator-Fox/docker-simplesamlphp/blob/master/1.14.16/Dockerfile
