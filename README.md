# Nomad
NoMAD and NoMAD Login Module for MunkiReport

## Table Schema

The table contains the following information, one row per machine:

* id (int) Unique id
* serial_number (string) Serial Number
* nomad_version (string) Version number if NoMAD is installed
* nomad_login_version (string) Version number if NoMAD Login is installed
* nomad_user (string) Username of NoMAD user
* nomad_enabled (boolean) Returns True if NoMAD is signed in
* nomad_login_enabled (boolean) Returns True if NoMAD Login is in the authorization mechs
* addomain (string) AD Domain of NoMAD
* kerberos_realm (string) Kerberos Realm of NoMAD
* use_keychain (boolean) Returns True if keychain is enabled
* local_password_sync (boolean) Returns True if local password sync is enabled
