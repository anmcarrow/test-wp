#!/bin/sh

# Because actual integraton of Travis and Openshoft Cloud v3 is sucks,
# we just use webhook. Amen.

apt-get -qy install curl &&
curl -X POST https://api.starter-us-west-2.openshift.com/oapi/v1/namespaces/test-wp/buildconfigs/wp2/webhooks/192f97bca334e98e/generic

exit 0
