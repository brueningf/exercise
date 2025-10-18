#include "resistor_color.h"

int color_code(resistor_band_t code) {
    return code;
}

const resistor_band_t * colors(void) {
    static const resistor_band_t resistor_colors[] = {
        BLACK,
        BROWN,
        RED,
        ORANGE,
        YELLOW,
        GREEN,
        BLUE,
        VIOLET,
        GREY,
        WHITE,
    };

    return resistor_colors;
}