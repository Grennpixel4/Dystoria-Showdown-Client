#!/usr/bin/env bash
set -euo pipefail

main() {
	cd /home/showdown/Dystoria-Showdown-Client
	git fetch --quiet origin main
	if [[ -f replay.pokemonshowdown.com/index.php && "$(git rev-parse HEAD)" == "$(git rev-parse origin/main)" ]]; then
		return
	fi
	git reset --quiet --hard origin/main
	node build
	echo "replay site now at $(git rev-parse --short HEAD)"
}

main "$@"
exit
