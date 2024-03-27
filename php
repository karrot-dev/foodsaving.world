#!/bin/bash

set -eu

docker run \
  --network host \
  --user $(id -u) \
  --rm -it \
  -v $(pwd):/app \
  --workdir /app \
  foodsaving-world \
  php "$@"
