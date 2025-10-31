#include "darts.h"
#include <math.h>

uint8_t score(coordinate_t landing_position) {
    float d = sqrt(pow(0 - landing_position.x, 2) + pow(0 - landing_position.y, 2));

    if (d > 10) return 0;
    if (d > 5) return 1;
    if (d > 1) return 5;
    return 10;
}