#!/bin/bash

# nomad controller
CTL="${BASEURL}index.php?/module/nomad/"

# Get the scripts in the proper directories
"${CURL[@]}" "${CTL}get_script/nomad" -o "${MUNKIPATH}preflight.d/nomad"

# Check exit status of curl
if [ $? = 0 ]; then
	# Make executable
	chmod a+x "${MUNKIPATH}preflight.d/nomad"

	# Set preference to include this file in the preflight check
	setreportpref "nomad" "${CACHEPATH}nomad.json"

else
	echo "Failed to download all required components!"
	rm -f "${MUNKIPATH}preflight.d/nomad"

	# Signal that we had an error
	ERR=1
fi
