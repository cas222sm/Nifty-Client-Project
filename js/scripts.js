function dollarConverter() {
    "use strict";
    document.converter.euro.value = document.converter.dollar.value * 0.89;
    document.converter.yuan.value = document.converter.dollar.value * 6.86;
    document.converter.peso.value = document.converter.dollar.value * 18.48;
}

function euroConverter() {
    "use strict";
    document.converter.dollar.value = document.converter.euro.value * 1.12;
    document.converter.yuan.value = document.converter.euro.value * 7.56;
    document.converter.peso.value = document.converter.euro.value * 20.65;
}

function pesoConverter() {
    "use strict";
    document.converter.dollar.value = document.converter.peso.value * 0.054;
    document.converter.euro.value = document.converter.peso.value * 0.048;
    document.converter.yuan.value = document.converter.peso.value * 0.37;
}

function yuanConverter() {
    "use strict";
    document.converter.dollar.value = document.converter.yuan.value * 0.15;
    document.converter.euro.value = document.converter.yuan.value * 0.13;
    document.converter.peso.value = document.converter.yuan.value * 2.69;
}
