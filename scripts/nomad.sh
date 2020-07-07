#!/bin/sh

# Script to collect data
# and put the data into outputfile

CWD=$(dirname $0)
CACHEDIR="$CWD/cache/"
OUTPUT_FILE="${CACHEDIR}nomad.txt"
SEPARATOR=' = '

# Business logic goes here
# Replace 'echo' in the following lines with the data collection commands for your module.
NOMAD_VERSION=$(echo)
NOMAD_LOGIN_VERSION=$(echo)
NOMAD_ENABLED=$(echo)
NOMAD_LOGIN_ENABLED=$(echo)
NOMAD_USER=$(echo)
ADDOMAIN=$(echo)
KERBEROS_REALM=$(echo)
USE_KEYCHAIN=$(echo)
LOCAL_PASSWORD_SYNC=$(echo)

# Output data here
echo "nomad_version${SEPARATOR}${NOMAD_VERSION}" > ${OUTPUT_FILE}
echo "nomad_login_version${SEPARATOR}${NOMAD_LOGIN_VERSION}" >> ${OUTPUT_FILE}
echo "nomad_enabled${SEPARATOR}${NOMAD_ENABLED}" >> ${OUTPUT_FILE}
echo "nomad_login_enabled${SEPARATOR}${NOMAD_LOGIN_ENABLED}" >> ${OUTPUT_FILE}
echo "nomad_user${SEPARATOR}${NOMAD_USER}" >> ${OUTPUT_FILE}
echo "addomain${SEPARATOR}${ADDOMAIN}" >> ${OUTPUT_FILE}
echo "kerberos_realm${SEPARATOR}${KERBEROS_REALM}" >> ${OUTPUT_FILE}
echo "use_keychain${SEPARATOR}${USE_KEYCHAIN}" >> ${OUTPUT_FILE}
echo "local_password_sync${SEPARATOR}${LOCAL_PASSWORD_SYNC}" >> ${OUTPUT_FILE}
