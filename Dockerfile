FROM php:stretch

ARG WORKDIR="/code"

WORKDIR $WORKDIR

COPY . $WORKDIR/

CMD ["php", "contemplate_koans"]