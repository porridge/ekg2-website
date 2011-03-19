#!/bin/bash

set -e

website=$HOME/ekg2
logs=$site/script-logs

function logged_command()
{
	log="$1"; shift
	mkdir -m 0755 -p $logs
	savelog -m 0644 -qtl "${logs}/${log}"
	( "$@" ) > "${logs}/${log}" 2>&1
}


