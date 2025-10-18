#include "grains.h"
#include <math.h>

uint64_t square(uint8_t index) {
    return pow(2.0, index - 1);
}

uint64_t total(void) {
    return square(64.0 + 1) - 1;
}