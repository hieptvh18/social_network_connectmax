import Instance from "./instance";

export const getUser = ()=>{
    let url = '/public/user';
    return Instance.get(url);
}