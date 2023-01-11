export function IsValidNumberBetweenOneAndFifty(val){

    const regex = new RegExp("^([1-9]|[1-4][0-9]|50)$");

    return regex.test(val)
}

export function generateRandomString() {
    let result = '';
    let characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!';
    let charactersLength = characters.length;
    for (let i = 0; i < 10; i++) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}
