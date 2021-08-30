export default function toFix(value) {
    value = parseInt(value);

    return 'от ' + value.toFixed(2) + ' руб.';
}
