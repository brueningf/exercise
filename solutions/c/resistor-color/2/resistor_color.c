#include "resistor_color.h"

resistor_band_t resistor_colors[] = {
    BLACK, BROWN, RED, ORANGE, YELLOW, GREEN, BLUE, VIOLET, GREY, WHITE
};

int color_code(resistor_band_t code) {
    return code;
}

resistor_band_t * colors(void) {
    return resistor_colors;
}