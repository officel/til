# mcb

memcached benchmark

https://github.com/s-hironobu/mcb

## install

    git clone https://github.com/s-hironobu/mcb.git
    cd mcb
    cc -Wall -lpthread -o mcb mcb.c

## how

    ./mcb -c set -a $target -p 11211 -t 500 -n 10000 -l 10000  -s
