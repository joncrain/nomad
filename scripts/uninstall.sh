#!/bin/bash

# Remove nomad script
rm -f "${MUNKIPATH}preflight.d/nomad"

# Remove nomad.txt file
rm -f "${MUNKIPATH}preflight.d/cache/nomad.json"
