export function IsValidNumberBetweenOneAndHundred(val){

    const regex = new RegExp("^[1-9][0-9]?$|^100$");

    return regex.test(val)
}
