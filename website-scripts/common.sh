#!/bin/bash

set -e

website=$HOME/ekg2
logs=$website/script-logs

function logging_prepare()
{
	log="$1"; shift
	mkdir -m 0755 -p $logs
	savelog -m 0644 -qtl "${logs}/${log}"
}

function logged_command()
{
	log="$1"; shift
	logging_prepare "$log"
	"$@" > "${logs}/${log}" 2>&1
}

function logging_start()
{
	log="$1"; shift
	logged_command "$log" exec
}

